<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appürodDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'contao_install' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\InstallationBundle\\Controller\\InstallationController::installAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/install',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::mainAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_login' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_password' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::passwordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_preview' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::previewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/preview',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_file' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::fileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/file',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_help' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::helpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/help',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_page' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_popup' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::popupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/popup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_switch' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::switchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/switch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_alerts' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::alertsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/alerts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_picker' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\BackendController::pickerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/picker',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_frontend_cron' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'frontend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::cronAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_contao/cron',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_frontend_share' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'frontend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::shareAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_contao/share',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_initialize' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Contao\\CoreBundle\\Controller\\InitializeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_contao/initialize',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_backend_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'backend',    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'contao_backend',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contao/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_frontend' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',    '_scope' => 'frontend',  ),  2 =>   array (    'alias' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.html',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'alias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_index' => array (  0 =>   array (  ),  1 =>   array (    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',    '_scope' => 'frontend',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_root' => array (  0 =>   array (  ),  1 =>   array (    '_scope' => 'frontend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contao_catch_all' => array (  0 =>   array (    0 => '_url_fragment',  ),  1 =>   array (    '_scope' => 'frontend',    '_token_check' => true,    '_controller' => 'Contao\\CoreBundle\\Controller\\FrontendController::indexAction',  ),  2 =>   array (    '_url_fragment' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => '_url_fragment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
