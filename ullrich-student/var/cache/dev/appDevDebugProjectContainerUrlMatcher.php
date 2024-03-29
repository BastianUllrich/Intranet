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

            elseif (0 === strpos($pathinfo, '/_contao')) {
                // contao_frontend_cron
                if ('/_contao/cron' === $pathinfo) {
                    return array (  '_scope' => 'frontend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::cronAction',  '_route' => 'contao_frontend_cron',);
                }

                // contao_frontend_share
                if ('/_contao/share' === $pathinfo) {
                    return array (  '_scope' => 'frontend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::shareAction',  '_route' => 'contao_frontend_share',);
                }

                // contao_initialize
                if ('/_contao/initialize' === $pathinfo) {
                    return array (  '_controller' => 'Contao\\CoreBundle\\Controller\\InitializeController::indexAction',  '_route' => 'contao_initialize',);
                }

            }

        }

        // contao_install_redirect
        if ('/install.php' === $pathinfo) {
            return array (  '_scope' => 'backend',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'contao_install',  'permanent' => true,  '_route' => 'contao_install_redirect',);
        }

        if (0 === strpos($pathinfo, '/contao')) {
            // contao_install
            if ('/contao/install' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\InstallationBundle\\Controller\\InstallationController::installAction',  '_route' => 'contao_install',);
            }

            // contao_backend
            if ('/contao' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::mainAction',  '_route' => 'contao_backend',);
            }

            // contao_backend_login
            if ('/contao/login' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::loginAction',  '_route' => 'contao_backend_login',);
            }

            if (0 === strpos($pathinfo, '/contao/p')) {
                // contao_backend_password
                if ('/contao/password' === $pathinfo) {
                    return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::passwordAction',  '_route' => 'contao_backend_password',);
                }

                // contao_backend_page
                if ('/contao/page' === $pathinfo) {
                    return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pageAction',  '_route' => 'contao_backend_page',);
                }

                // contao_backend_preview
                if ('/contao/preview' === $pathinfo) {
                    return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::previewAction',  '_route' => 'contao_backend_preview',);
                }

                // contao_backend_popup
                if ('/contao/popup' === $pathinfo) {
                    return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::popupAction',  '_route' => 'contao_backend_popup',);
                }

                // contao_backend_picker
                if ('/contao/picker' === $pathinfo) {
                    return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pickerAction',  '_route' => 'contao_backend_picker',);
                }

            }

            // contao_backend_confirm
            if ('/contao/confirm' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::confirmAction',  '_route' => 'contao_backend_confirm',);
            }

            // contao_backend_file
            if ('/contao/file' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::fileAction',  '_route' => 'contao_backend_file',);
            }

            // contao_backend_help
            if ('/contao/help' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::helpAction',  '_route' => 'contao_backend_help',);
            }

            // contao_backend_switch
            if ('/contao/switch' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::switchAction',  '_route' => 'contao_backend_switch',);
            }

            // contao_backend_alerts
            if ('/contao/alerts' === $pathinfo) {
                return array (  '_scope' => 'backend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::alertsAction',  '_route' => 'contao_backend_alerts',);
            }

            // contao_backend_redirect
            if ('/contao' === $trimmedPathinfo) {
                $ret = array (  '_scope' => 'backend',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'contao_backend',  'permanent' => true,  '_route' => 'contao_backend_redirect',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_contao_backend_redirect;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contao_backend_redirect'));
                }

                return $ret;
            }
            not_contao_backend_redirect:

        }

        // contao_frontend
        if (preg_match('#^/(?P<alias>.+)\\.html$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'contao_frontend']), array (  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',  '_scope' => 'frontend',));
        }

        // contao_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',  '_scope' => 'frontend',  '_route' => 'contao_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_contao_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contao_index'));
            }

            return $ret;
        }
        not_contao_index:

        // contao_root
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_scope' => 'frontend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',  '_route' => 'contao_root',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_contao_root;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contao_root'));
            }

            return $ret;
        }
        not_contao_root:

        // contao_catch_all
        if (preg_match('#^/(?P<_url_fragment>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'contao_catch_all']), array (  '_scope' => 'frontend',  '_token_check' => true,  '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
