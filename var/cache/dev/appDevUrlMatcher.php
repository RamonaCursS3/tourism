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

        if (0 === strpos($pathinfo, '/touristattraction')) {
            // touristattraction_index
            if (rtrim($pathinfo, '/') === '/touristattraction') {
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
            if (preg_match('#^/touristattraction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_touristattraction_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattraction_show')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::showAction',));
            }
            not_touristattraction_show:

            // touristattraction_new
            if ($pathinfo === '/touristattraction/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_touristattraction_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::newAction',  '_route' => 'touristattraction_new',);
            }
            not_touristattraction_new:

            // touristattraction_edit
            if (preg_match('#^/touristattraction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_touristattraction_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattraction_edit')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::editAction',));
            }
            not_touristattraction_edit:

            // touristattraction_delete
            if (preg_match('#^/touristattraction/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_touristattraction_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'touristattraction_delete')), array (  '_controller' => 'AppBundle\\Controller\\TouristAttractionController::deleteAction',));
            }
            not_touristattraction_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/city')) {
                // city_index
                if (rtrim($pathinfo, '/') === '/city') {
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
                if (preg_match('#^/city/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_city_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_show')), array (  '_controller' => 'AppBundle\\Controller\\CityController::showAction',));
                }
                not_city_show:

                // city_new
                if ($pathinfo === '/city/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_city_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CityController::newAction',  '_route' => 'city_new',);
                }
                not_city_new:

                // city_edit
                if (preg_match('#^/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_city_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_edit')), array (  '_controller' => 'AppBundle\\Controller\\CityController::editAction',));
                }
                not_city_edit:

                // city_delete
                if (preg_match('#^/city/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_city_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_delete')), array (  '_controller' => 'AppBundle\\Controller\\CityController::deleteAction',));
                }
                not_city_delete:

            }

            if (0 === strpos($pathinfo, '/country')) {
                // country_index
                if (rtrim($pathinfo, '/') === '/country') {
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
                if (preg_match('#^/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_country_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_show')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::showAction',));
                }
                not_country_show:

                // country_new
                if ($pathinfo === '/country/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_country_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CountryController::newAction',  '_route' => 'country_new',);
                }
                not_country_new:

                // country_edit
                if (preg_match('#^/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_country_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_edit')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::editAction',));
                }
                not_country_edit:

                // country_delete
                if (preg_match('#^/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_country_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_delete')), array (  '_controller' => 'AppBundle\\Controller\\CountryController::deleteAction',));
                }
                not_country_delete:

            }

        }

        if (0 === strpos($pathinfo, '/hotel')) {
            // hotel_index
            if (rtrim($pathinfo, '/') === '/hotel') {
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
            if (preg_match('#^/hotel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hotel_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_show')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::showAction',));
            }
            not_hotel_show:

            // hotel_new
            if ($pathinfo === '/hotel/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hotel_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HotelController::newAction',  '_route' => 'hotel_new',);
            }
            not_hotel_new:

            // hotel_edit
            if (preg_match('#^/hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hotel_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_edit')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::editAction',));
            }
            not_hotel_edit:

            // hotel_delete
            if (preg_match('#^/hotel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_hotel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_delete')), array (  '_controller' => 'AppBundle\\Controller\\HotelController::deleteAction',));
            }
            not_hotel_delete:

        }

        if (0 === strpos($pathinfo, '/tour')) {
            // tour_index
            if (rtrim($pathinfo, '/') === '/tour') {
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
            if (preg_match('#^/tour/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tour_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_show')), array (  '_controller' => 'AppBundle\\Controller\\TourController::showAction',));
            }
            not_tour_show:

            // tour_new
            if ($pathinfo === '/tour/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tour_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TourController::newAction',  '_route' => 'tour_new',);
            }
            not_tour_new:

            // tour_edit
            if (preg_match('#^/tour/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tour_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_edit')), array (  '_controller' => 'AppBundle\\Controller\\TourController::editAction',));
            }
            not_tour_edit:

            // tour_delete
            if (preg_match('#^/tour/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tour_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tour_delete')), array (  '_controller' => 'AppBundle\\Controller\\TourController::deleteAction',));
            }
            not_tour_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
