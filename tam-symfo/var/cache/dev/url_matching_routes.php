<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/association' => [[['_route' => 'admin_association', '_controller' => 'App\\Controller\\Back\\BackAssociationController::index'], null, null, null, false, false, null]],
        '/admin/association/section_reorder' => [[['_route' => 'admin_association_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackAssociationController::reorder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/benin' => [[['_route' => 'admin_benin', '_controller' => 'App\\Controller\\Back\\BackBeninController::index'], null, null, null, false, false, null]],
        '/admin/benin/section_reorder' => [[['_route' => 'admin_benin_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackBeninController::reorder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/contact' => [[['_route' => 'admin_contact', '_controller' => 'App\\Controller\\Back\\BackContactController::index'], null, null, null, false, false, null]],
        '/admin/contact/section_reorder' => [[['_route' => 'admin_contact_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackContactController::reorder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/france' => [[['_route' => 'admin_france', '_controller' => 'App\\Controller\\Back\\BackFranceController::index'], null, null, null, false, false, null]],
        '/admin/france/section_reorder' => [[['_route' => 'admin_france_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackFranceController::reorderSection'], null, ['POST' => 0], null, false, false, null]],
        '/admin/france/action_reorder' => [[['_route' => 'admin_france_actions_reorder', '_controller' => 'App\\Controller\\Back\\BackFranceController::reorderAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\Back\\BackHomeController::index'], null, null, null, false, false, null]],
        '/admin/home/section_reorder' => [[['_route' => 'home_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackHomeController::reorderSections'], null, ['POST' => 0], null, false, false, null]],
        '/admin/home/carousel_reorder' => [[['_route' => 'carousel_reorder', '_controller' => 'App\\Controller\\Back\\BackHomeController::reorderImages'], null, ['POST' => 0], null, false, false, null]],
        '/admin/rapports' => [[['_route' => 'admin_reports', '_controller' => 'App\\Controller\\Back\\BackReportsController::index'], null, null, null, false, false, null]],
        '/admin/reports/section_reorder' => [[['_route' => 'admin_reports_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackReportsController::reorderSections'], null, ['POST' => 0], null, false, false, null]],
        '/admin/reports/reports_reorder' => [[['_route' => 'admin_reports_reorder', '_controller' => 'App\\Controller\\Back\\BackReportsController::reorderReports'], null, ['POST' => 0], null, false, false, null]],
        '/admin/ressources' => [[['_route' => 'admin_resources', '_controller' => 'App\\Controller\\Back\\BackResourcesController::index'], null, null, null, false, false, null]],
        '/admin/resources/section_reorder' => [[['_route' => 'admin_resources_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackResourcesController::reorder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/resources/visual_reorder' => [[['_route' => 'admin_resources_visual_reorder', '_controller' => 'App\\Controller\\Back\\BackResourcesController::visualReorder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/equipe' => [[['_route' => 'admin_team', '_controller' => 'App\\Controller\\Back\\BackTeamController::index'], null, null, null, false, false, null]],
        '/admin/team/section_reorder' => [[['_route' => 'admin_team_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackTeamController::reorder'], null, ['POST' => 0], null, false, false, null]],
        '/admin/formation' => [[['_route' => 'admin_training', '_controller' => 'App\\Controller\\Back\\BackTrainingController::index'], null, null, null, false, false, null]],
        '/admin/training/section_reorder' => [[['_route' => 'admin_training_sections_reorder', '_controller' => 'App\\Controller\\Back\\BackTrainingController::reorder'], null, ['POST' => 0], null, false, false, null]],
        '/association' => [[['_route' => 'app_who_association', '_controller' => 'App\\Controller\\Front\\AssociationController::index'], null, null, null, false, false, null]],
        '/benin' => [[['_route' => 'app_actions_benin', '_controller' => 'App\\Controller\\Front\\BeninController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\Front\\ContactController::index'], null, null, null, false, false, null]],
        '/hommage' => [[['_route' => 'app_eulogy', '_controller' => 'App\\Controller\\Front\\EulogyController::index'], null, null, null, false, false, null]],
        '/france' => [[['_route' => 'app_actions_france', '_controller' => 'App\\Controller\\Front\\FranceController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'app_legal', '_controller' => 'App\\Controller\\Front\\LegalController::index'], null, null, null, false, false, null]],
        '/rapports' => [[['_route' => 'app_who_reports', '_controller' => 'App\\Controller\\Front\\ReportsController::index'], null, null, null, false, false, null]],
        '/ressources' => [[['_route' => 'app_resources', '_controller' => 'App\\Controller\\Front\\ResourcesController::index'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'app_who_team', '_controller' => 'App\\Controller\\Front\\TeamController::index'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_training', '_controller' => 'App\\Controller\\Front\\TrainingController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|association/section_(?'
                        .'|delete/([^/]++)(*:250)'
                        .'|update/([^/]++)(*:273)'
                    .')'
                    .'|benin/section_(?'
                        .'|delete/([^/]++)(*:314)'
                        .'|update/([^/]++)(*:337)'
                    .')'
                    .'|contact/section_(?'
                        .'|delete/([^/]++)(*:380)'
                        .'|update/([^/]++)(*:403)'
                    .')'
                    .'|france/(?'
                        .'|section_(?'
                            .'|delete/([^/]++)(*:448)'
                            .'|update/([^/]++)(*:471)'
                        .')'
                        .'|action_(?'
                            .'|delete/([^/]++)(*:505)'
                            .'|update/([^/]++)(*:528)'
                        .')'
                    .')'
                    .'|home/(?'
                        .'|section_(?'
                            .'|update/([^/]++)(*:572)'
                            .'|delete/([^/]++)(*:595)'
                        .')'
                        .'|carousel_delete/([^/]++)(*:628)'
                    .')'
                    .'|re(?'
                        .'|ports/(?'
                            .'|section_(?'
                                .'|delete/([^/]++)(*:677)'
                                .'|update/([^/]++)(*:700)'
                            .')'
                            .'|report_(?'
                                .'|delete/([^/]++)(*:734)'
                                .'|update/([^/]++)(*:757)'
                            .')'
                        .')'
                        .'|ssources/(?'
                            .'|section_(?'
                                .'|delete/([^/]++)(*:805)'
                                .'|update/([^/]++)(*:828)'
                            .')'
                            .'|image_(?'
                                .'|delete/([^/]++)(*:861)'
                                .'|update/([^/]++)(*:884)'
                            .')'
                            .'|vi(?'
                                .'|deo_delete/([^/]++)(*:917)'
                                .'|sual_(?'
                                    .'|update/([^/]++)(*:948)'
                                    .'|delete/([^/]++)(*:971)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|equipe/(?'
                        .'|section_(?'
                            .'|delete/([^/]++)(*:1019)'
                            .'|update/([^/]++)(*:1043)'
                        .')'
                        .'|member_(?'
                            .'|delete/([^/]++)(*:1078)'
                            .'|update/([^/]++)(*:1102)'
                        .')'
                    .')'
                    .'|training/section_(?'
                        .'|delete/([^/]++)(*:1148)'
                        .'|update/([^/]++)(*:1172)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        250 => [[['_route' => 'admin_association_section_delete', '_controller' => 'App\\Controller\\Back\\BackAssociationController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'admin_association_section_update', '_controller' => 'App\\Controller\\Back\\BackAssociationController::updateSection'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'admin_benin_section_delete', '_controller' => 'App\\Controller\\Back\\BackBeninController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'admin_benin_section_update', '_controller' => 'App\\Controller\\Back\\BackBeninController::updateSection'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'admin_contact_section_delete', '_controller' => 'App\\Controller\\Back\\BackContactController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        403 => [[['_route' => 'admin_contact_section_update', '_controller' => 'App\\Controller\\Back\\BackContactController::updateSection'], ['id'], null, null, false, true, null]],
        448 => [[['_route' => 'admin_france_section_delete', '_controller' => 'App\\Controller\\Back\\BackFranceController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        471 => [[['_route' => 'admin_france_section_update', '_controller' => 'App\\Controller\\Back\\BackFranceController::updateSection'], ['id'], null, null, false, true, null]],
        505 => [[['_route' => 'admin_france_action_delete', '_controller' => 'App\\Controller\\Back\\BackFranceController::deleteAction'], ['id'], ['POST' => 0], null, false, true, null]],
        528 => [[['_route' => 'admin_france_action_update', '_controller' => 'App\\Controller\\Back\\BackFranceController::updateAction'], ['id'], null, null, false, true, null]],
        572 => [[['_route' => 'admin_home_section_update', '_controller' => 'App\\Controller\\Back\\BackHomeController::updateSection'], ['id'], null, null, false, true, null]],
        595 => [[['_route' => 'admin_home_section_delete', '_controller' => 'App\\Controller\\Back\\BackHomeController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        628 => [[['_route' => 'admin_home_carousel_delete', '_controller' => 'App\\Controller\\Back\\BackHomeController::deleteCarousel'], ['id'], ['POST' => 0], null, false, true, null]],
        677 => [[['_route' => 'admin_reports_section_delete', '_controller' => 'App\\Controller\\Back\\BackReportsController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        700 => [[['_route' => 'admin_reports_section_update', '_controller' => 'App\\Controller\\Back\\BackReportsController::updateSection'], ['id'], null, null, false, true, null]],
        734 => [[['_route' => 'admin_reports_delete', '_controller' => 'App\\Controller\\Back\\BackReportsController::deleteReports'], ['id'], ['POST' => 0], null, false, true, null]],
        757 => [[['_route' => 'admin_reports_update', '_controller' => 'App\\Controller\\Back\\BackReportsController::updateReport'], ['id'], null, null, false, true, null]],
        805 => [[['_route' => 'admin_resources_section_delete', '_controller' => 'App\\Controller\\Back\\BackResourcesController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        828 => [[['_route' => 'admin_resources_section_update', '_controller' => 'App\\Controller\\Back\\BackResourcesController::updateSection'], ['id'], null, null, false, true, null]],
        861 => [[['_route' => 'admin_resources_image_delete', '_controller' => 'App\\Controller\\Back\\BackResourcesController::deleteImage'], ['id'], ['POST' => 0], null, false, true, null]],
        884 => [[['_route' => 'admin_resources_image_update', '_controller' => 'App\\Controller\\Back\\BackResourcesController::updateImage'], ['id'], null, null, false, true, null]],
        917 => [[['_route' => 'admin_resources_video_delete', '_controller' => 'App\\Controller\\Back\\BackResourcesController::deleteVideo'], ['id'], ['POST' => 0], null, false, true, null]],
        948 => [[['_route' => 'admin_resources_visual_update', '_controller' => 'App\\Controller\\Back\\BackResourcesController::visualUpdate'], ['id'], null, null, false, true, null]],
        971 => [[['_route' => 'admin_resources_visual_delete', '_controller' => 'App\\Controller\\Back\\BackResourcesController::visualDelete'], ['id'], ['POST' => 0], null, false, true, null]],
        1019 => [[['_route' => 'admin_team_section_delete', '_controller' => 'App\\Controller\\Back\\BackTeamController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        1043 => [[['_route' => 'admin_team_section_update', '_controller' => 'App\\Controller\\Back\\BackTeamController::updateSection'], ['id'], null, null, false, true, null]],
        1078 => [[['_route' => 'admin_team_member_delete', '_controller' => 'App\\Controller\\Back\\BackTeamController::deleteMember'], ['id'], ['POST' => 0], null, false, true, null]],
        1102 => [[['_route' => 'admin_team_member_update', '_controller' => 'App\\Controller\\Back\\BackTeamController::updateMember'], ['id'], null, null, false, true, null]],
        1148 => [[['_route' => 'admin_training_section_delete', '_controller' => 'App\\Controller\\Back\\BackTrainingController::deleteSection'], ['id'], ['POST' => 0], null, false, true, null]],
        1172 => [
            [['_route' => 'admin_training_section_update', '_controller' => 'App\\Controller\\Back\\BackTrainingController::updateSection'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
