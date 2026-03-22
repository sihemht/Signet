<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/admin' => [[['_route' => 'dashboard_admin_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/new' => [[['_route' => 'dashboard_admin_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/batch-delete' => [[['_route' => 'dashboard_admin_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/admin/autocomplete' => [[['_route' => 'dashboard_admin_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/render-filters' => [[['_route' => 'dashboard_admin_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event' => [[['_route' => 'dashboard_event_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event/new' => [[['_route' => 'dashboard_event_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/event/batch-delete' => [[['_route' => 'dashboard_event_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/event/autocomplete' => [[['_route' => 'dashboard_event_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event/render-filters' => [[['_route' => 'dashboard_event_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'dashboard_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'dashboard_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'dashboard_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'dashboard_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'dashboard_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vote' => [[['_route' => 'dashboard_vote_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vote/new' => [[['_route' => 'dashboard_vote_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/vote/batch-delete' => [[['_route' => 'dashboard_vote_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/vote/autocomplete' => [[['_route' => 'dashboard_vote_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vote/render-filters' => [[['_route' => 'dashboard_vote_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/api/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\AuthController::register'], null, null, null, false, false, null]],
        '/books' => [[['_route' => 'app_books_index', '_controller' => 'App\\Controller\\BooksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/books/new' => [[['_route' => 'app_books_new', '_controller' => 'App\\Controller\\BooksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search-books' => [[['_route' => 'search_books', '_controller' => 'App\\Controller\\OpenLibraryController::searchBooks'], null, ['GET' => 0], null, false, false, null]],
        '/add-book' => [[['_route' => 'add_book', '_controller' => 'App\\Controller\\OpenLibraryController::addBook'], null, ['POST' => 0], null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|\\.well\\-known/genid/([^/]++)(*:49)'
                            .'|errors/(\\d+)(*:68)'
                            .'|validation_errors/([^/]++)(*:101)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:138)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:169)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:208)'
                            .'|v(?'
                                .'|alidation_errors/([^/]++)(?'
                                    .'|(*:248)'
                                .')'
                                .'|otes(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:290)'
                                    .'|(?:\\.([^/]++))?(*:313)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:350)'
                                    .')'
                                .')'
                            .')'
                            .'|events(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:396)'
                                .'|(?:\\.([^/]++))?(*:419)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:456)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|admin/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:501)'
                                .'|delete(*:515)'
                            .')'
                            .'|(*:524)'
                        .')'
                        .'|event/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:558)'
                                .'|delete(*:572)'
                            .')'
                            .'|(*:581)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:614)'
                                .'|delete(*:628)'
                            .')'
                            .'|(*:637)'
                        .')'
                        .'|vote/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:670)'
                                .'|delete(*:684)'
                            .')'
                            .'|(*:693)'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:732)'
                .'|/([^/]++)/(?'
                    .'|start\\-reading(*:767)'
                    .'|finish\\-reading(*:790)'
                    .'|abandon\\-reading(*:814)'
                    .'|never\\-read(*:833)'
                .')'
                .'|/book(?'
                    .'|s/([^/]++)(?'
                        .'|(*:863)'
                        .'|/edit(*:876)'
                        .'|(*:884)'
                    .')'
                    .'|\\-details/([^/]++)(*:911)'
                .')'
                .'|/api/events(*:931)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        68 => [[['_route' => 'api_errors', '_controller' => 'api_platform.action.error_page'], ['status'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        101 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        138 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        169 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        208 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        248 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        290 => [[['_route' => '_api_/votes/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vote', '_api_operation_name' => '_api_/votes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => '_api_/votes{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vote', '_api_operation_name' => '_api_/votes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        350 => [
            [['_route' => '_api_/votes/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vote', '_api_operation_name' => '_api_/votes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/votes/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vote', '_api_operation_name' => '_api_/votes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        396 => [[['_route' => '_api_/events/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Event', '_api_operation_name' => '_api_/events/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => '_api_/events{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Event', '_api_operation_name' => '_api_/events{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        456 => [
            [['_route' => '_api_/events/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Event', '_api_operation_name' => '_api_/events/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/events/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Event', '_api_operation_name' => '_api_/events/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        501 => [[['_route' => 'dashboard_admin_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        515 => [[['_route' => 'dashboard_admin_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        524 => [[['_route' => 'dashboard_admin_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AdminCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AdminCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        558 => [[['_route' => 'dashboard_event_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        572 => [[['_route' => 'dashboard_event_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        581 => [[['_route' => 'dashboard_event_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        614 => [[['_route' => 'dashboard_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        628 => [[['_route' => 'dashboard_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        637 => [[['_route' => 'dashboard_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        670 => [[['_route' => 'dashboard_vote_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        684 => [[['_route' => 'dashboard_vote_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        693 => [[['_route' => 'dashboard_vote_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VoteCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VoteCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        732 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        767 => [[['_route' => 'app_books_start_reading', '_controller' => 'App\\Controller\\BookStatusController::startReading'], ['id'], ['POST' => 0], null, false, false, null]],
        790 => [[['_route' => 'app_books_finish_reading', '_controller' => 'App\\Controller\\BookStatusController::finishReading'], ['id'], ['POST' => 0], null, false, false, null]],
        814 => [[['_route' => 'app_books_abandon_reading', '_controller' => 'App\\Controller\\BookStatusController::abandonReading'], ['id'], ['POST' => 0], null, false, false, null]],
        833 => [[['_route' => 'app_books_never_read', '_controller' => 'App\\Controller\\BookStatusController::neverRead'], ['id'], ['POST' => 0], null, false, false, null]],
        863 => [[['_route' => 'app_books_show', '_controller' => 'App\\Controller\\BooksController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_books_edit', '_controller' => 'App\\Controller\\BooksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        884 => [[['_route' => 'app_books_delete', '_controller' => 'App\\Controller\\BooksController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        911 => [[['_route' => 'book_details', '_controller' => 'App\\Controller\\OpenLibraryController::getBookDetails'], ['olid'], ['GET' => 0], null, false, true, null]],
        931 => [
            [['_route' => 'list_event', '_controller' => 'App\\Controller\\EventController::index'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
