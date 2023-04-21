<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/accessibility' => [[['_route' => 'app_accessibility', '_controller' => 'App\\Controller\\AccessibilityController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/colortest' => [[['_route' => 'app_colortest', '_controller' => 'App\\Controller\\ColortestController::index'], null, null, null, false, false, null]],
        '/dressing' => [[['_route' => 'app_dressing', '_controller' => 'App\\Controller\\DressingController::index'], null, null, null, false, false, null]],
        '/formulaire' => [[['_route' => 'app_formulaire', '_controller' => 'App\\Controller\\FormulaireController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/generator' => [[['_route' => 'app_generator', '_controller' => 'App\\Controller\\HomeController::generator'], null, null, null, false, false, null]],
        '/join/us' => [[['_route' => 'app_join_us', '_controller' => 'App\\Controller\\JoinUsController::index'], null, null, null, false, false, null]],
        '/legal' => [[['_route' => 'app_legal', '_controller' => 'App\\Controller\\LegalController::index'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'app_privacy', '_controller' => 'App\\Controller\\PrivacyController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/terms/of/use' => [[['_route' => 'app_terms_of_use', '_controller' => 'App\\Controller\\TermsOfUseController::index'], null, null, null, false, false, null]],
        '/testpalette' => [[['_route' => 'app_testpalette', '_controller' => 'App\\Controller\\TestpaletteController::index'], null, null, null, false, false, null]],
        '/integrationcolor/backup' => [[['_route' => 'app_testpalette_inte_backup', '_controller' => 'App\\Controller\\TestpaletteController::integrationcolor'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/vetement' => [[['_route' => 'app_vetement', '_controller' => 'App\\Controller\\VetementController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/style/([^/]++)(*:57)'
                .'|/list\\-vetements/([^/]++)(*:89)'
                .'|/delete/([^/]++)/([^/]++)(*:121)'
                .'|/testcolorname/([^/]++)(*:152)'
                .'|/hsl/([^/]++)/([^/]++)/([^/]++)(*:191)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => 'app_style', '_controller' => 'App\\Controller\\DressingController::top'], ['type'], null, null, false, true, null]],
        89 => [[['_route' => 'app_list-vetements', '_controller' => 'App\\Controller\\DressingController::bottom'], ['type'], null, null, false, true, null]],
        121 => [[['_route' => 'app_delete', '_controller' => 'App\\Controller\\DressingController::delete'], ['type', 'id'], null, null, false, true, null]],
        152 => [[['_route' => 'app_testcolorname', '_controller' => 'App\\Controller\\TestpaletteController::colorname'], ['hexa1'], null, null, false, true, null]],
        191 => [
            [['_route' => 'app_hsl', '_controller' => 'App\\Controller\\VetementController::hsl'], ['h', 's', 'l'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
