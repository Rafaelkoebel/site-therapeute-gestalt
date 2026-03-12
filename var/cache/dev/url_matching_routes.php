<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/info-pratique' => [[['_route' => 'admin_info_pratique_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/info-pratique/new' => [[['_route' => 'admin_info_pratique_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/info-pratique/batch-delete' => [[['_route' => 'admin_info_pratique_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/info-pratique/autocomplete' => [[['_route' => 'admin_info_pratique_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/info-pratique/render-filters' => [[['_route' => 'admin_info_pratique_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message-contact' => [[['_route' => 'admin_message_contact_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message-contact/new' => [[['_route' => 'admin_message_contact_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/message-contact/batch-delete' => [[['_route' => 'admin_message_contact_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/message-contact/autocomplete' => [[['_route' => 'admin_message_contact_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message-contact/render-filters' => [[['_route' => 'admin_message_contact_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/motif-consultation' => [[['_route' => 'admin_motif_consultation_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/motif-consultation/new' => [[['_route' => 'admin_motif_consultation_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/motif-consultation/batch-delete' => [[['_route' => 'admin_motif_consultation_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/motif-consultation/autocomplete' => [[['_route' => 'admin_motif_consultation_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/motif-consultation/render-filters' => [[['_route' => 'admin_motif_consultation_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page' => [[['_route' => 'admin_page_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page/new' => [[['_route' => 'admin_page_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/page/batch-delete' => [[['_route' => 'admin_page_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/autocomplete' => [[['_route' => 'admin_page_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page/render-filters' => [[['_route' => 'admin_page_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/therapeute' => [[['_route' => 'admin_therapeute_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/therapeute/new' => [[['_route' => 'admin_therapeute_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/therapeute/batch-delete' => [[['_route' => 'admin_therapeute_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/therapeute/autocomplete' => [[['_route' => 'admin_therapeute_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/therapeute/render-filters' => [[['_route' => 'admin_therapeute_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/infos-pratiques' => [[['_route' => 'info_pratique', '_controller' => 'App\\Controller\\InfoPratiqueController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|info\\-pratique/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:51)'
                            .'|delete(*:64)'
                        .')'
                        .'|(*:72)'
                    .')'
                    .'|m(?'
                        .'|essage\\-contact/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:119)'
                                .'|delete(*:133)'
                            .')'
                            .'|(*:142)'
                        .')'
                        .'|otif\\-consultation/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:189)'
                                .'|delete(*:203)'
                            .')'
                            .'|(*:212)'
                        .')'
                    .')'
                    .'|page/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:246)'
                            .'|delete(*:260)'
                        .')'
                        .'|(*:269)'
                    .')'
                    .'|therapeute/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:308)'
                            .'|delete(*:322)'
                        .')'
                        .'|(*:331)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:369)'
                .'|/((?!login$|admin$|logout$).+)(*:407)'
                .'|/log(?'
                    .'|in(*:424)'
                    .'|out(*:435)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        51 => [[['_route' => 'admin_info_pratique_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        64 => [[['_route' => 'admin_info_pratique_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        72 => [[['_route' => 'admin_info_pratique_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\InfoPratiqueCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\InfoPratiqueCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        119 => [[['_route' => 'admin_message_contact_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        133 => [[['_route' => 'admin_message_contact_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        142 => [[['_route' => 'admin_message_contact_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageContactCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageContactCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        189 => [[['_route' => 'admin_motif_consultation_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        203 => [[['_route' => 'admin_motif_consultation_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        212 => [[['_route' => 'admin_motif_consultation_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MotifConsultationCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MotifConsultationCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'admin_page_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        260 => [[['_route' => 'admin_page_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        269 => [[['_route' => 'admin_page_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'admin_therapeute_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        322 => [[['_route' => 'admin_therapeute_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        331 => [[['_route' => 'admin_therapeute_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TherapeuteCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\AdminDashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TherapeuteCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        407 => [[['_route' => 'page_show', '_controller' => 'App\\Controller\\PageController::show'], ['slug'], null, null, false, true, null]],
        424 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        435 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
