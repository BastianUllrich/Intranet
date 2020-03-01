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

/* ContaoCoreBundle:Error:no_layout_specified.html.twig */
class __TwigTemplate_355545d618658c0c24db918cd6dc67a711f26136700045e7616ee5f7f7f83493 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'matter' => [$this, 'block_matter'],
            'howToFix' => [$this, 'block_howToFix'],
            'explain' => [$this, 'block_explain'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoCore/Error/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:no_layout_specified.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "noLayout", []), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_matter($context, array $blocks = [])
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "noLayoutSpecified", []), "html", null, true);
        echo "</p>
";
    }

    // line 8
    public function block_howToFix($context, array $blocks = [])
    {
        // line 9
        echo "    <p>";
        echo sprintf($this->getAttribute(($context["error"] ?? null), "noLayoutFix", []), ($context["adminEmail"] ?? null));
        echo "</p>
";
    }

    // line 11
    public function block_explain($context, array $blocks = [])
    {
        // line 12
        echo "    <p>";
        echo $this->getAttribute(($context["error"] ?? null), "noLayoutExplain", []);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:no_layout_specified.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  72 => 11,  65 => 9,  62 => 8,  55 => 6,  52 => 5,  45 => 3,  42 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:no_layout_specified.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Error/no_layout_specified.html.twig");
    }
}
