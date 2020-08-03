<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/gradepassback' => [[['_route' => 'grade_pass_back', '_controller' => 'App\\Controller\\GradePassBackController::index'], null, null, null, false, false, null]],
        '/result' => [[['_route' => 'result', '_controller' => 'App\\Controller\\ResultController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/python/([^/]++)(*:58)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        58 => [
            [['_route' => 'python', '_controller' => 'App\\Controller\\PythonController::index'], ['chapter'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
