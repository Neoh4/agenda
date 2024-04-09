<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [
            [['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null],
            [['_route' => 'login_check', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null],
        ],
        '/authenticated-page' => [[['_route' => 'authenticated_page', '_controller' => 'App\\Controller\\LoginController::authenticatedPage'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/add-homework' => [[['_route' => 'add_homework', '_controller' => 'App\\Controller\\HomeworkController::addHomework'], null, ['POST' => 0], null, false, false, null]],
        '/popup-content' => [[['_route' => 'popup_content', '_controller' => 'App\\Controller\\PopupController::popupContent'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'manage_students', '_controller' => 'App\\Controller\\AdminController::studentContent'], null, null, null, false, false, null]],
        '/profs' => [[['_route' => 'manage_teachers', '_controller' => 'App\\Controller\\AdminController::teachersContent'], null, null, null, false, false, null]],
        '/classes' => [[['_route' => 'manage_classes', '_controller' => 'App\\Controller\\AdminController::classesContent'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/add-user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\AdminController::addUser'], null, ['POST' => 0], null, false, false, null]],
        '/add-classe' => [[['_route' => 'add_class', '_controller' => 'App\\Controller\\AdminController::addClasse'], null, ['POST' => 0], null, false, false, null]],
        '/add-student' => [[['_route' => 'add_student', '_controller' => 'App\\Controller\\AdminController::addStudent'], null, ['POST' => 0], null, false, false, null]],
        '/add-teacher' => [[['_route' => 'add_teachers', '_controller' => 'App\\Controller\\AdminController::addTeacher'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/edit(?'
                    .'|_homework/([^/]++)(*:68)'
                    .'|\\-teacher/([^/]++)(*:93)'
                .')'
                .'|/get\\-teacher/([^/]++)(*:123)'
                .'|/delete\\-(?'
                    .'|user/([^/]++)(*:156)'
                    .'|classe/([^/]++)(*:179)'
                .')'
                .'|/homework/(?'
                    .'|update/([^/]++)(*:216)'
                    .'|delete/([^/]++)(*:239)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'edit_homework', '_controller' => 'App\\Controller\\EdithomeworkController::edit'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'edit_teacher', '_controller' => 'App\\Controller\\AdminController::editTeacher'], ['id'], ['POST' => 0], null, false, true, null]],
        123 => [[['_route' => 'get_teacher', '_controller' => 'App\\Controller\\AdminController::getTeacher'], ['id'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['DELETE' => 0], null, false, true, null]],
        179 => [[['_route' => 'delete_classe', '_controller' => 'App\\Controller\\AdminController::deleteClasse'], ['id'], ['DELETE' => 0], null, false, true, null]],
        216 => [[['_route' => 'update_homework', '_controller' => 'App\\Controller\\EdithomeworkController::update'], ['id'], null, null, false, true, null]],
        239 => [
            [['_route' => 'delete_homework', '_controller' => 'App\\Controller\\EdithomeworkController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
