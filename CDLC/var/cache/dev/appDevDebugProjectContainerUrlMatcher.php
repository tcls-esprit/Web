<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        // base_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'base_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_base_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'base_default_index'));
            }

            return $ret;
        }
        not_base_default_index:

        if (0 === strpos($pathinfo, '/t')) {
            // base_default_test
            if ('/test' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::TestAction',  '_route' => 'base_default_test',);
            }

            // base_default_theatres
            if ('/theatres' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::theatresAction',  '_route' => 'base_default_theatres',);
            }

            if (0 === strpos($pathinfo, '/tickets')) {
                // tickets_stats
                if ('/ticketsstats' === $pathinfo) {
                    return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::ticketsstats',  '_route' => 'tickets_stats',);
                }

                // tickets_time_stats
                if ('/ticketstimestats' === $pathinfo) {
                    return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::ticketstimestats',  '_route' => 'tickets_time_stats',);
                }

                if (0 === strpos($pathinfo, '/ticketstheatre')) {
                    // ticketstheatre_index
                    if ('/ticketstheatre' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'BaseBundle\\Controller\\TicketstheatreController::indexAction',  '_route' => 'ticketstheatre_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_ticketstheatre_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ticketstheatre_index'));
                        }

                        return $ret;
                    }
                    not_ticketstheatre_index:

                    // ticketstheatre_new
                    if ('/ticketstheatre/new' === $pathinfo) {
                        return array (  '_controller' => 'BaseBundle\\Controller\\TicketstheatreController::newAction',  '_route' => 'ticketstheatre_new',);
                    }

                    // ticketstheatre_show
                    if (preg_match('#^/ticketstheatre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketstheatre_show']), array (  '_controller' => 'BaseBundle\\Controller\\TicketstheatreController::showAction',));
                    }

                    // ticketstheatre_edit
                    if (preg_match('#^/ticketstheatre/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketstheatre_edit']), array (  '_controller' => 'BaseBundle\\Controller\\TicketstheatreController::editAction',));
                    }

                    // ticketstheatre_delete
                    if (preg_match('#^/ticketstheatre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketstheatre_delete']), array (  '_controller' => 'BaseBundle\\Controller\\TicketstheatreController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/ticketsevent')) {
                    // ticketsevent_index
                    if ('/ticketsevent' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'BaseBundle\\Controller\\TicketseventController::indexAction',  '_route' => 'ticketsevent_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_ticketsevent_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ticketsevent_index'));
                        }

                        return $ret;
                    }
                    not_ticketsevent_index:

                    // ticketsevent_new
                    if ('/ticketsevent/new' === $pathinfo) {
                        return array (  '_controller' => 'BaseBundle\\Controller\\TicketseventController::newAction',  '_route' => 'ticketsevent_new',);
                    }

                    // ticketsevent_show
                    if (preg_match('#^/ticketsevent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketsevent_show']), array (  '_controller' => 'BaseBundle\\Controller\\TicketseventController::showAction',));
                    }

                    // ticketsevent_edit
                    if (preg_match('#^/ticketsevent/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketsevent_edit']), array (  '_controller' => 'BaseBundle\\Controller\\TicketseventController::editAction',));
                    }

                    // ticketsevent_delete
                    if (preg_match('#^/ticketsevent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketsevent_delete']), array (  '_controller' => 'BaseBundle\\Controller\\TicketseventController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/ticketsfilm')) {
                    // ticketsfilm_index
                    if ('/ticketsfilm' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'BaseBundle\\Controller\\TicketsfilmController::indexAction',  '_route' => 'ticketsfilm_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_ticketsfilm_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ticketsfilm_index'));
                        }

                        return $ret;
                    }
                    not_ticketsfilm_index:

                    // ticketsfilm_new
                    if ('/ticketsfilm/new' === $pathinfo) {
                        return array (  '_controller' => 'BaseBundle\\Controller\\TicketsfilmController::newAction',  '_route' => 'ticketsfilm_new',);
                    }

                    // ticketsfilm_show
                    if (preg_match('#^/ticketsfilm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketsfilm_show']), array (  '_controller' => 'BaseBundle\\Controller\\TicketsfilmController::showAction',));
                    }

                    // ticketsfilm_edit
                    if (preg_match('#^/ticketsfilm/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketsfilm_edit']), array (  '_controller' => 'BaseBundle\\Controller\\TicketsfilmController::editAction',));
                    }

                    // ticketsfilm_delete
                    if (preg_match('#^/ticketsfilm/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'ticketsfilm_delete']), array (  '_controller' => 'BaseBundle\\Controller\\TicketsfilmController::deleteAction',));
                    }

                }

            }

        }

        // base_default_events
        if ('/events' === $pathinfo) {
            return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::eventsAction',  '_route' => 'base_default_events',);
        }

        // base_default_movies
        if ('/movies' === $pathinfo) {
            return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::moviesAction',  '_route' => 'base_default_movies',);
        }

        // base_default_musee
        if ('/musee' === $pathinfo) {
            return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::museeAction',  '_route' => 'base_default_musee',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // base_default_acteurs
            if ('/acteurs' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::acteursAction',  '_route' => 'base_default_acteurs',);
            }

            // base_default_autresespace
            if ('/autresespace' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::autresespaceAction',  '_route' => 'base_default_autresespace',);
            }

            // base_default_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::adminAction',  '_route' => 'base_default_admin',);
            }

        }

        // base_default_guides
        if ('/guides' === $pathinfo) {
            return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::guidesAction',  '_route' => 'base_default_guides',);
        }

        if (0 === strpos($pathinfo, '/salle')) {
            // base_default_salledetheatre
            if ('/salledetheatre' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::salledetheatreAction',  '_route' => 'base_default_salledetheatre',);
            }

            // base_default_salledecinema
            if ('/salledecinema' === $pathinfo) {
                return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::salledecinemaAction',  '_route' => 'base_default_salledecinema',);
            }

            if (0 === strpos($pathinfo, '/salles')) {
                // salles_stats
                if ('/sallesstats' === $pathinfo) {
                    return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::sallesstats',  '_route' => 'salles_stats',);
                }

                // salles_index
                if ('/salles' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BaseBundle\\Controller\\SallesController::indexAction',  '_route' => 'salles_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_salles_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'salles_index'));
                    }

                    return $ret;
                }
                not_salles_index:

                // salles_new
                if ('/salles/new' === $pathinfo) {
                    return array (  '_controller' => 'BaseBundle\\Controller\\SallesController::newAction',  '_route' => 'salles_new',);
                }

                // salles_show
                if (preg_match('#^/salles/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'salles_show']), array (  '_controller' => 'BaseBundle\\Controller\\SallesController::showAction',));
                }

                // salles_edit
                if (preg_match('#^/salles/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'salles_edit']), array (  '_controller' => 'BaseBundle\\Controller\\SallesController::editAction',));
                }

                // salles_delete
                if (preg_match('#^/salles/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'salles_delete']), array (  '_controller' => 'BaseBundle\\Controller\\SallesController::deleteAction',));
                }

            }

        }

        // check
        if ('/check' === $pathinfo) {
            return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::checkcalendar',  '_route' => 'check',);
        }

        // full
        if ('/fullcc' === $pathinfo) {
            return array (  '_controller' => 'BaseBundle\\Controller\\DefaultController::calendar',  '_route' => 'full',);
        }

        // fullcalendar_loader
        if ('/fc-load-events' === $pathinfo) {
            return array (  '_controller' => 'ADesigns\\CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  '_route' => 'fullcalendar_loader',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_js_routing_js']), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
