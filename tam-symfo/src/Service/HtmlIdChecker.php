<?php

namespace App\Service;

use App\Entity\Section\Section;
use App\Repository\Section\AboutSectionRepository;
use App\Repository\Section\ActionRepository;
use App\Repository\Section\ActionsSectionRepository;
use App\Repository\Section\AssociationSectionRepository;
use App\Repository\Section\BeninSectionRepository;
use App\Repository\Section\ContactSectionRepository;
use App\Repository\Section\EulogySectionRepository;
use App\Repository\Section\FranceSectionRepository;
use App\Repository\Section\HomeSectionRepository;
use App\Repository\Section\ReportsSectionRepository;
use App\Repository\Section\ResourcesSectionRepository;
use App\Repository\Section\TeamSectionRepository;
use App\Repository\Section\TrainingSectionRepository;

class HtmlIdChecker
{
    private const RESERVED_IDS = [
        'rubricInfo',
        'beninSections',
        'contact',
        'contactSections',
        'actionsContainer',
        'action_reorder',
        'franceSections',
        'carousel',
        'carousel_reorder',
        'galleryImage',
        'homeSections',
        'header',
        'toggleNavbar',
        'icons',
        'nav',
        'who_submenu',
        'actions_submenu',
        'js-data',
        'section_reorder',
        'reportsContainer',
        'reports_reorder',
        'reportsSections',
        'resourcesSections',
        'videos',
        'gallerie',
        'image-error',
        'visuals',
        'visual_reorder',
        'trainingSections',
        'beninSections',
        'footer_links',
        'footer__contact',
        'footer__social',
        'lightbox-image',
    ];

    public function __construct(
        private HomeSectionRepository $homeRepository,
        private ActionRepository $actionRepository,
        private AssociationSectionRepository $associationRepository,
        private EulogySectionRepository $eulogyRepository,
        private ReportsSectionRepository $reportsRepository,
        private TeamSectionRepository $teamRepository,
        private BeninSectionRepository $beninRepository,
        private FranceSectionRepository $franceRepository,
        private TrainingSectionRepository $trainingRepository,
        private ResourcesSectionRepository $resourcesRepository,
        private ContactSectionRepository $contactRepository,
    ) {
    }

    public function isAvailable(string $htmlId, ?Section $currentSection = null): bool
    {
        if (in_array($htmlId, self::RESERVED_IDS, true)) {
            return false;
        }

        $repositories = [
            $this->homeRepository,
            $this->actionRepository,
            $this->associationRepository,
            $this->eulogyRepository,
            $this->reportsRepository,
            $this->teamRepository,
            $this->beninRepository,
            $this->franceRepository,
            $this->trainingRepository,
            $this->resourcesRepository,
            $this->contactRepository,
        ];

        foreach ($repositories as $repository) {
            $section = $repository->findOneBy([
                'htmlId' => $htmlId,
            ]);

            if (!$section) {
                continue;
            }

            // On modifie la même section
            if (
                $currentSection
                && get_class($section) === get_class($currentSection)
                && $section->getId() === $currentSection->getId()
            ) {
                continue;
            }

            return false;
        }

        return true;
    }
}