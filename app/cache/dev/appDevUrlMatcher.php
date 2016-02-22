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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // access_denied
        if ($pathinfo === '/denied') {
            return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\DefaultController::deniedAction',  '_route' => 'access_denied',);
        }

        if (0 === strpos($pathinfo, '/lists')) {
            // post_index
            if (rtrim($pathinfo, '/') === '/lists') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post_index');
                }

                return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::indexAction',  '_route' => 'post_index',);
            }
            not_post_index:

            // post_new
            if ($pathinfo === '/lists/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_new;
                }

                return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::newAction',  '_route' => 'post_new',);
            }
            not_post_new:

            // post_show
            if (preg_match('#^/lists/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::showAction',));
            }
            not_post_show:

            // post_edit
            if (preg_match('#^/lists/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::editAction',));
            }
            not_post_edit:

            // edittask
            if (preg_match('#^/lists/(?P<id>[^/]++)/(?P<taskid>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_edittask;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edittask')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::edittaskAction',));
            }
            not_edittask:

            // newtask
            if (preg_match('#^/lists/(?P<id>[^/]++)/newtask$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_newtask;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newtask')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::newtaskAction',));
            }
            not_newtask:

            if (0 === strpos($pathinfo, '/lists/delete')) {
                // list_delete
                if (preg_match('#^/lists/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_list_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_delete')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::deleteAction',));
                }
                not_list_delete:

                // task_delete
                if (preg_match('#^/lists/delete/(?P<id>[^/]++)/(?P<taskid>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_task_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_delete')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\TodolistController::deletetaskAction',));
                }
                not_task_delete:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_list_index
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_list_index',);
            }

            // admin_list_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_list_new',);
            }

            // admin_list_delete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_list_delete')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\AdminController::deleteadminAction',));
            }

            // admin_list_show
            if (preg_match('#^/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_list_show')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\AdminController::showAction',));
            }

            // admin_list_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_list_edit')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\AdminController::editAction',));
            }

            // admin_edittask
            if (preg_match('#^/admin/(?P<id>[^/]++)/(?P<taskid>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edittask')), array (  '_controller' => 'A2x\\BlogBundle\\Controller\\AdminController::edittaskAction',));
            }

        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'A2x\\BlogBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
