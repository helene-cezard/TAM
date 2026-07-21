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

    // Remplace les iframe vidéo MP4 par des balises <video>
    foreach ($xpath->query('//iframe[contains(@class, "ql-video")]') as $iframe) {

        if (!$iframe instanceof \DOMElement) {
            continue;
        }

        $src = $iframe->getAttribute('src');

        // Seulement les fichiers mp4
        if (!preg_match('/\.mp4($|\?)/i', $src)) {
            continue;
        }

        $video = $dom->createElement('video');
        $video->setAttribute('width', '320');
        $video->setAttribute('height', '240');
        $video->setAttribute('controls', '');
        $video->setAttribute('preload', 'metadata');

        $source = $dom->createElement('source');
        $source->setAttribute('src', $src);
        $source->setAttribute('type', 'video/mp4');

        $video->appendChild($source);

        $iframe->parentNode->replaceChild($video, $iframe);
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