<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ContaoCoreBundle:Backend:be_page.html.twig */
class __TwigTemplate_076c555655f2d3dd864a5c1108a60596826b4b6b81a609e98f1fdf248800087e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension')->renderContaoBackendTemplate(["main" =>         $this->renderBlock("main", $context, $blocks), "error" =>         $this->renderBlock("error", $context, $blocks), "headline" =>         $this->renderBlock("headline", $context, $blocks)]);
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Backend:be_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Backend:be_page.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Backend/be_page.html.twig");
    }
}
