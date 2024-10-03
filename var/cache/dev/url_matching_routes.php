<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/micro-post/add' => [[['_route' => 'app_micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboard/registration' => [[['_route' => 'app_dashboard_registration', '_controller' => 'App\\Controller\\DashboardController::dashboardRegistration'], null, null, null, false, false, null]],
        '/dashboard/users' => [[['_route' => 'app_dashboard_users', '_controller' => 'App\\Controller\\DashboardController::dashboardUsers'], null, null, null, false, false, null]],
        '/dashboard/user' => [[['_route' => 'app_dashboard_user', '_controller' => 'App\\Controller\\DashboardController::register'], null, null, null, false, false, null]],
        '/dashboard/tournament' => [[['_route' => 'app_dashboard_tournament', '_controller' => 'App\\Controller\\DashboardController::dashboardTournament'], null, null, null, false, false, null]],
        '/dashboard/create-tournament' => [[['_route' => 'app_dashboard_create_tournament', '_controller' => 'App\\Controller\\DashboardController::createTournament'], null, null, null, false, false, null]],
        '/dashboard/games' => [[['_route' => 'app_dashboard_games', '_controller' => 'App\\Controller\\DashboardGamesController::dashboardGames'], null, null, null, false, false, null]],
        '/dashboard/create-game' => [[['_route' => 'app_dashboard_create_game', '_controller' => 'App\\Controller\\DashboardGamesController::createGame'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/micro-post' => [[['_route' => 'app_micro_post', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, false, false, null]],
        '/micro-post/top-liked' => [[['_route' => 'app_micro_post_topliked', '_controller' => 'App\\Controller\\MicroPostController::topLiked'], null, null, null, false, false, null]],
        '/micro-post/follows' => [[['_route' => 'app_micro_post_follows', '_controller' => 'App\\Controller\\MicroPostController::follows'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/test-email' => [[['_route' => 'test_email', '_controller' => 'App\\Controller\\TestEmailController::sendTestEmail'], null, null, null, false, false, null]],
        '/settings/userExtraInfo' => [[['_route' => 'app_settings_user_extra_info', '_controller' => 'App\\Controller\\UserExtraInfoProfileController::profile'], null, null, null, false, false, null]],
        '/settings/profile' => [[['_route' => 'app_settings_profile', '_controller' => 'App\\Controller\\UserProfileController::profile'], null, null, null, false, false, null]],
        '/settings/profile_image' => [[['_route' => 'app_settings_profile_image', '_controller' => 'App\\Controller\\UserProfileController::profileImage'], null, null, null, false, false, null]],
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
                .'|/dashboard/(?'
                    .'|registration/(?'
                        .'|status/([^/]++)(*:247)'
                        .'|tournament/([^/]++)(*:274)'
                        .'|change\\-team/([^/]++)(*:303)'
                    .')'
                    .'|tournament/(?'
                        .'|create\\-games/([^/]++)(*:348)'
                        .'|delete/([^/]++)(*:371)'
                    .')'
                    .'|user(?'
                        .'|s/delete/([^/]++)(*:404)'
                        .'|/edit/([^/]++)(*:426)'
                    .')'
                    .'|edit\\-game/([^/]++)(*:454)'
                .')'
                .'|/follow/([^/]++)(*:479)'
                .'|/un(?'
                    .'|follow/([^/]++)(*:508)'
                    .'|like/([^/]++)(*:529)'
                .')'
                .'|/m(?'
                    .'|essages/(\\d+)(*:556)'
                    .'|icro\\-post/([^/]++)(?'
                        .'|(*:586)'
                        .'|/(?'
                            .'|edit(*:602)'
                            .'|comment(*:617)'
                        .')'
                    .')'
                .')'
                .'|/like/([^/]++)(*:642)'
                .'|/profile/([^/]++)(?'
                    .'|(*:670)'
                    .'|/follo(?'
                        .'|ws(*:689)'
                        .'|ers(*:700)'
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
        247 => [[['_route' => 'app_dashboard_registration_status', '_controller' => 'App\\Controller\\DashboardController::changeRegistrationStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_dashboard_registration_user', '_controller' => 'App\\Controller\\DashboardController::userRegistration'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_dashboard_change_team', '_controller' => 'App\\Controller\\DashboardController::changeTeam'], ['id'], ['POST' => 0], null, false, true, null]],
        348 => [[['_route' => 'app_dashboard_create_games', '_controller' => 'App\\Controller\\DashboardController::createGames'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'app_dashboard_tournament_delete', '_controller' => 'App\\Controller\\DashboardController::deleteTournament'], ['id'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_dashboard_users_delete', '_controller' => 'App\\Controller\\DashboardController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        426 => [[['_route' => 'app_dashboard_user_edit', '_controller' => 'App\\Controller\\DashboardController::editUser'], ['id'], null, null, false, true, null]],
        454 => [[['_route' => 'app_dashboard_edit_game', '_controller' => 'App\\Controller\\DashboardGamesController::editGame'], ['id'], null, null, false, true, null]],
        479 => [[['_route' => 'app_follow', '_controller' => 'App\\Controller\\FollowerController::follow'], ['id'], null, null, false, true, null]],
        508 => [[['_route' => 'app_unfollow', '_controller' => 'App\\Controller\\FollowerController::unfollow'], ['id'], null, null, false, true, null]],
        529 => [[['_route' => 'app_unlike', '_controller' => 'App\\Controller\\LikeController::unlike'], ['id'], null, null, false, true, null]],
        556 => [[['_route' => 'app_show_one', '_controller' => 'App\\Controller\\HelloController::showOne'], ['id'], null, null, false, true, null]],
        586 => [[['_route' => 'app_micro_post_show', '_controller' => 'App\\Controller\\MicroPostController::showOne'], ['post'], null, null, false, true, null]],
        602 => [[['_route' => 'app_micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['post'], null, null, false, false, null]],
        617 => [[['_route' => 'app_micro_post_comment', '_controller' => 'App\\Controller\\MicroPostController::addComment'], ['post'], null, null, false, false, null]],
        642 => [[['_route' => 'app_like', '_controller' => 'App\\Controller\\LikeController::like'], ['id'], null, null, false, true, null]],
        670 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::show'], ['id'], null, null, false, true, null]],
        689 => [[['_route' => 'app_profile_follows', '_controller' => 'App\\Controller\\ProfileController::follows'], ['id'], null, null, false, false, null]],
        700 => [
            [['_route' => 'app_profile_followers', '_controller' => 'App\\Controller\\ProfileController::followers'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
