<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class QuillExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('quill_html', [$this, 'quillToHtml']),
        ];
    }

    public function quillToHtml(?string $html): string
{
    if (empty($html)) {
        return '';
    }

    libxml_use_internal_errors(true);

    $dom = new \DOMDocument();
    $dom->loadHTML(
        '<?xml encoding="utf-8" ?>'.$html,
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );

    libxml_clear_errors();

    // Supprime les <span class="ql-ui">
    $xpath = new \DOMXPath($dom);

    foreach ($xpath->query('//span[contains(@class, "ql-ui")]') as $span) {
        $span->parentNode->removeChild($span);
    }

    // Remplace les <ol> de Quill par des <ul>
    foreach (iterator_to_array($dom->getElementsByTagName('ol')) as $ol) {

        $isBulletList = true;

        foreach ($ol->getElementsByTagName('li') as $li) {
            if ($li->getAttribute('data-list') !== 'bullet') {
                $isBulletList = false;
                break;
            }
        }

        if ($isBulletList) {
            $ul = $dom->createElement('ul');
            $ul->setAttribute('class', 'section__list');

            while ($ol->firstChild) {
                $li = $ol->firstChild;

                if ($li instanceof \DOMElement) {
                    $li->removeAttribute('data-list');
                }

                $ul->appendChild($li);
            }

            $ol->parentNode->replaceChild($ul, $ol);
        }
    }

    return $dom->saveHTML();
}
}