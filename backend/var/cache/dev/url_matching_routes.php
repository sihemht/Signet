<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/books' => [[['_route' => 'app_books_index', '_controller' => 'App\\Controller\\BooksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/books/new' => [[['_route' => 'app_books_new', '_controller' => 'App\\Controller\\BooksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search-books' => [[['_route' => 'search_books', '_controller' => 'App\\Controller\\OpenLibraryController::searchBooks'], null, ['GET' => 0], null, false, false, null]],
        '/add-book' => [[['_route' => 'add_book', '_controller' => 'App\\Controller\\OpenLibraryController::addBook'], null, ['POST' => 0], null, false, false, null]],
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
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:280)'
                .'|/([^/]++)/(?'
                    .'|start\\-reading(*:315)'
                    .'|finish\\-reading(*:338)'
                    .'|abandon\\-reading(*:362)'
                    .'|never\\-read(*:381)'
                .')'
                .'|/book(?'
                    .'|s/([^/]++)(?'
                        .'|(*:411)'
                        .'|/edit(*:424)'
                        .'|(*:432)'
                    .')'
                    .'|\\-details/([^/]++)(*:459)'
                .')'
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
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        280 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        315 => [[['_route' => 'app_books_start_reading', '_controller' => 'App\\Controller\\BookStatusController::startReading'], ['id'], ['POST' => 0], null, false, false, null]],
        338 => [[['_route' => 'app_books_finish_reading', '_controller' => 'App\\Controller\\BookStatusController::finishReading'], ['id'], ['POST' => 0], null, false, false, null]],
        362 => [[['_route' => 'app_books_abandon_reading', '_controller' => 'App\\Controller\\BookStatusController::abandonReading'], ['id'], ['POST' => 0], null, false, false, null]],
        381 => [[['_route' => 'app_books_never_read', '_controller' => 'App\\Controller\\BookStatusController::neverRead'], ['id'], ['POST' => 0], null, false, false, null]],
        411 => [[['_route' => 'app_books_show', '_controller' => 'App\\Controller\\BooksController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        424 => [[['_route' => 'app_books_edit', '_controller' => 'App\\Controller\\BooksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        432 => [[['_route' => 'app_books_delete', '_controller' => 'App\\Controller\\BooksController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        459 => [
            [['_route' => 'book_details', '_controller' => 'App\\Controller\\OpenLibraryController::getBookDetails'], ['olid'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
