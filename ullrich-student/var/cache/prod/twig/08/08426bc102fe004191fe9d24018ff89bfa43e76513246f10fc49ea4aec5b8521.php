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

/* ContaoCoreBundle:Error:no_root_page_found.html.twig */
class __TwigTemplate_dc913e127ac445a1445196dde763432764652b2cf4c7e6e3ac536d009fce3855 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'matter' => [$this, 'block_matter'],
            'howToFix' => [$this, 'block_howToFix'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:no_root_page_found.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "noRoot", []), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_matter($context, array $blocks = [])
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "noRootPage", []), "html", null, true);
        echo "</p>
";
    }

    // line 8
    public function block_howToFix($context, array $blocks = [])
    {
        // line 9
        echo "    <p>";
        echo sprintf($this->getAttribute(($context["error"] ?? null), "noRootFix", []), ($context["base"] ?? null), ($context["adminEmail"] ?? null));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:no_root_page_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  61 => 8,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:no_root_page_found.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Error/no_root_page_found.html.twig");
    }
}
