<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/member')) {
            if (0 === strpos($pathinfo, '/member/touristattraction')) {
                // touristattraction_index
                if (rtrim($pathinfo, '/') === '/member/touristattraction') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_touristattraction_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'touristattraction_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::indexAction',  '_route' => 'touristattraction_index',);
                }
                not_touristattraction_index:

                // touristattraction_show
                if (preg_match('#^/member/touristattraction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_touristattraction_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattraction_show')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::showAction',));
                }
                not_touristattraction_show:

                // touristattraction_new
                if ($pathinfo === '/member/touristattraction/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_touristattraction_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::newAction',  '_route' => 'touristattraction_new',);
                }
                not_touristattraction_new:

                // touristattraction_edit
                if (preg_match('#^/member/touristattraction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_touristattraction_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattraction_edit')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::editAction',));
                }
                not_touristattraction_edit:

                // touristattraction_delete
                if (preg_match('#^/member/touristattraction/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_touristattraction_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattraction_delete')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::deleteAction',));
                }
                not_touristattraction_delete:

            }

            if (0 === strpos($pathinfo, '/member/c')) {
                if (0 === strpos($pathinfo, '/member/city')) {
                    // city_index
                    if (rtrim($pathinfo, '/') === '/member/city') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_city_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'city_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CityController::indexAction',  '_route' => 'city_index',);
                    }
                    not_city_index:

                    // city_show
                    if (preg_match('#^/member/city/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_city_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_show')), array (  '_controller' => 'AppBundle\\Controller\\CityController::showAction',));
                    }
                    not_city_show:

                    // city_new
                    if ($pathinfo === '/member/city/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_city_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CityController::newAction',  '_route' => 'city_new',);
                    }
                    not_city_new:

                    // city_edit
                    if (preg_match('#^/member/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_city_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_edit')), array (  '_controller' => 'AppBundle\\Controller\\CityController::editAction',));
                    }
                    not_city_edit:

                    // city_delete
                    if (preg_match('#^/member/city/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_city_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_delete')), array (  '_controller' => 'AppBundle\\Controller\\CityController::deleteAction',));
                    }
                    not_city_delete:

                }

                if (0 === strpos($pathinfo, '/member/country')) {
                    // country_index
                    if (rtrim($pathinfo, '/') === '/member/country') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_country_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'country_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CountryController::indexAction',  '_route' => 'country_index',);
                    }
                    not_country_index:

                    // country_show
                    if (preg_match('#^/member/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_country_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_show')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::showAction',));
                    }
                    not_country_show:

                    // country_new
                    if ($pathinfo === '/member/country/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_country_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CountryController::newAction',  '_route' => 'country_new',);
                    }
                    not_country_new:

                    // country_edit
                    if (preg_match('#^/member/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_country_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_edit')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::editAction',));
                    }
                    not_country_edit:

                    // country_delete
                    if (preg_match('#^/member/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_country_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_delete')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::deleteAction',));
                    }
                    not_country_delete:

                }

            }

            if (0 === strpos($pathinfo, '/member/hotel')) {
                // hotel_index
                if (rtrim($pathinfo, '/') === '/member/hotel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hotel_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'hotel_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HotelController::indexAction',  '_route' => 'hotel_index',);
                }
                not_hotel_index:

                // hotel_show
                if (preg_match('#^/member/hotel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hotel_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_show')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::showAction',));
                }
                not_hotel_show:

                // hotel_new
                if ($pathinfo === '/member/hotel/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_hotel_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\HotelController::newAction',  '_route' => 'hotel_new',);
                }
                not_hotel_new:

                // hotel_edit
                if (preg_match('#^/member/hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_hotel_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_edit')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::editAction',));
                }
                not_hotel_edit:

                // hotel_delete
                if (preg_match('#^/member/hotel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_hotel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_delete')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::deleteAction',));
                }
                not_hotel_delete:

            }

            if (0 === strpos($pathinfo, '/member/tour')) {
                // tour_index
                if (rtrim($pathinfo, '/') === '/member/tour') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tour_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tour_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TourController::indexAction',  '_route' => 'tour_index',);
                }
                not_tour_index:

                // tour_show
                if (preg_match('#^/member/tour/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tour_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_show')), array (  '_controller' => 'AppBundle\\Controller\\TourController::showAction',));
                }
                not_tour_show:

                // tour_new
                if ($pathinfo === '/member/tour/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tour_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TourController::newAction',  '_route' => 'tour_new',);
                }
                not_tour_new:

                // tour_edit
                if (preg_match('#^/member/tour/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tour_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_edit')), array (  '_controller' => 'AppBundle\\Controller\\TourController::editAction',));
                }
                not_tour_edit:

                // tour_delete
                if (preg_match('#^/member/tour/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tour_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_delete')), array (  '_controller' => 'AppBundle\\Controller\\TourController::deleteAction',));
                }
                not_tour_delete:

                if (0 === strpos($pathinfo, '/member/touristattractionimage')) {
                    // touristattractionimage_index
                    if (rtrim($pathinfo, '/') === '/member/touristattractionimage') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_touristattractionimage_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'touristattractionimage_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionImageController::indexAction',  '_route' => 'touristattractionimage_index',);
                    }
                    not_touristattractionimage_index:

                    // touristattractionimage_show
                    if (preg_match('#^/member/touristattractionimage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_touristattractionimage_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattractionimage_show')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionImageController::showAction',));
                    }
                    not_touristattractionimage_show:

                    // touristattractionimage_new
                    if ($pathinfo === '/member/touristattractionimage/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_touristattractionimage_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionImageController::newAction',  '_route' => 'touristattractionimage_new',);
                    }
                    not_touristattractionimage_new:

                    // touristattractionimage_edit
                    if (preg_match('#^/member/touristattractionimage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_touristattractionimage_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattractionimage_edit')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionImageController::editAction',));
                    }
                    not_touristattractionimage_edit:

                    // touristattractionimage_delete
                    if (preg_match('#^/member/touristattractionimage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_touristattractionimage_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattractionimage_delete')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionImageController::deleteAction',));
                    }
                    not_touristattractionimage_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_index
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_user_index',);
                }

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::showAction',));
                }

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editAction',));
                }

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::deleteAction',));
                }
                not_admin_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/role')) {
                // admin_role_index
                if (rtrim($pathinfo, '/') === '/admin/role') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_role_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_role_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RoleController::indexAction',  '_route' => 'admin_role_index',);
                }
                not_admin_role_index:

                // admin_role_show
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_role_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_show')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::showAction',));
                }
                not_admin_role_show:

                // admin_role_new
                if ($pathinfo === '/admin/role/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_role_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RoleController::newAction',  '_route' => 'admin_role_new',);
                }
                not_admin_role_new:

                // admin_role_edit
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_role_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_edit')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::editAction',));
                }
                not_admin_role_edit:

                // admin_role_delete
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_role_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_delete')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::deleteAction',));
                }
                not_admin_role_delete:

            }

            if (0 === strpos($pathinfo, '/admin/csvfiles')) {
                // csvfiles_index
                if (rtrim($pathinfo, '/') === '/admin/csvfiles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_csvfiles_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'csvfiles_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CsvFilesController::indexAction',  '_route' => 'csvfiles_index',);
                }
                not_csvfiles_index:

                // csvfiles_new
                if ($pathinfo === '/admin/csvfiles/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_csvfiles_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CsvFilesController::newAction',  '_route' => 'csvfiles_new',);
                }
                not_csvfiles_new:

                // csvfiles_create
                if ($pathinfo === '/admin/csvfiles/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CsvFilesController::createAction',  '_route' => 'csvfiles_create',);
                }

                // csvfiles_delete
                if (preg_match('#^/admin/csvfiles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'csvfiles_delete')), array (  '_controller' => 'AppBundle\\Controller\\CsvFilesController::deleteAction',));
                }

                // csvfiles_importa
                if (preg_match('#^/admin/csvfiles/(?P<id>[^/]++)/(?P<tip>[^/]++)/importa$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'csvfiles_importa')), array (  '_controller' => 'AppBundle\\Controller\\CsvFilesController::importaAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
