<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\ApiController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/check-auth' => [[['_route' => 'api_check_auth', '_controller' => 'App\\Controller\\AuthController::checkAuth'], null, ['GET' => 0], null, false, false, null]],
        '/api/joueurs' => [
            [['_route' => 'get_joueurs', '_controller' => 'App\\Controller\\JoueurController::getJoueurs'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_joueur', '_controller' => 'App\\Controller\\JoueurController::addJoueur'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/produits' => [
            [['_route' => 'get_products', '_controller' => 'App\\Controller\\BoutiqueAdminController::getProducts'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_product', '_controller' => 'App\\Controller\\BoutiqueAdminController::addProduct'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'boutique_add_product', '_controller' => 'App\\Controller\\BoutiqueAdminController::addProduct'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'boutique_get_products', '_controller' => 'App\\Controller\\BoutiqueAdminController::getProducts'], null, ['GET' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|errors/(\\d+)(*:65)'
                        .'|validation_errors/([^/]++)(*:98)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:134)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:165)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:204)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:241)'
                        .')'
                        .'|joueurs/([^/]++)(?'
                            .'|(*:269)'
                        .')'
                        .'|produits/(?'
                            .'|([^/]++)(*:298)'
                            .'|(\\d+)/stock(?'
                                .'|(*:320)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:360)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        65 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        98 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        134 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        165 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        204 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        241 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        269 => [
            [['_route' => 'update_joueur', '_controller' => 'App\\Controller\\JoueurController::updateJoueur'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_joueur', '_controller' => 'App\\Controller\\JoueurController::deleteJoueur'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        298 => [[['_route' => 'boutique_delete_product', '_controller' => 'App\\Controller\\BoutiqueAdminController::deleteProduct'], ['id'], ['DELETE' => 0], null, false, true, null]],
        320 => [
            [['_route' => 'boutique_update_stock', '_controller' => 'App\\Controller\\BoutiqueAdminController::updateStock'], ['id'], ['PUT' => 0], null, false, false, null],
            [['_route' => 'update_stock', '_controller' => 'App\\Controller\\BoutiqueAdminController::updateStock'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        360 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
