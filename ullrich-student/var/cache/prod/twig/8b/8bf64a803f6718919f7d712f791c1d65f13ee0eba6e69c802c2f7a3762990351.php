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

/* ContaoCoreBundle:Error:backend.html.twig */
class __TwigTemplate_422a7f25fdaf7d8e9f0141b9854e7ed9921dd9f18ff125ab1fc89c862614a894 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:backend.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, ($context["statusName"] ?? null), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "matter", []), "html", null, true);
        echo "</h2>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["exception"] ?? null), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  50 => 5,  43 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:backend.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Error/backend.html.twig");
    }
}
