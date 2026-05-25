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
        '/admin' => [[['_route' => 'admin_main', '_controller' => 'App\\Controller\\Back\\BackMainController::index'], null, null, null, false, false, null]],
        '/actions/benin' => [[['_route' => 'app_actions_benin', '_controller' => 'App\\Controller\\Front\\ActionsBeninController::index'], null, null, null, false, false, null]],
        '/actions/france' => [[['_route' => 'app_actions_france', '_controller' => 'App\\Controller\\Front\\ActionsFranceController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\Front\\ContactController::index'], null, null, null, false, false, null]],
        '/hommage' => [[['_route' => 'app_eulogy', '_controller' => 'App\\Controller\\Front\\EulogyController::index'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'app_legal', '_controller' => 'App\\Controller\\Front\\LegalController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\Front\\MainController::index'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'app_research', '_controller' => 'App\\Controller\\Front\\ResearchController::index'], null, null, null, false, false, null]],
        '/ressources' => [[['_route' => 'app_resources', '_controller' => 'App\\Controller\\Front\\ResourcesController::index'], null, null, null, false, false, null]],
        '/soutenir' => [[['_route' => 'app_support', '_controller' => 'App\\Controller\\Front\\SupportController::index'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_training', '_controller' => 'App\\Controller\\Front\\TrainingController::index'], null, null, null, false, false, null]],
        '/association' => [[['_route' => 'app_who_association', '_controller' => 'App\\Controller\\Front\\WhoAssociationController::index'], null, null, null, false, false, null]],
        '/rapports-d-activite' => [[['_route' => 'app_who_reports', '_controller' => 'App\\Controller\\Front\\WhoReportsController::index'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'app_who_team', '_controller' => 'App\\Controller\\Front\\WhoTeamController::index'], null, null, null, false, false, null]],
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
        191 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
