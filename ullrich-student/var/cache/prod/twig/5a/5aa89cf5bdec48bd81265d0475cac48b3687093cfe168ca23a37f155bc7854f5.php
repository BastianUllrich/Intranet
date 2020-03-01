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

/* ContaoCoreBundle:Error:insecure_installation.html.twig */
class __TwigTemplate_1696335e182df082e80b3ae9f3063df33ab2395914191e65a9a5660ff9dbc949 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:insecure_installation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "insecure", []), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_matter($context, array $blocks = [])
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "insecureRoot", []), "html", null, true);
        echo "</p>
";
    }

    // line 8
    public function block_howToFix($context, array $blocks = [])
    {
        // line 9
        echo "    <p>";
        echo $this->getAttribute(($context["error"] ?? null), "insecureFix", []);
        echo "</p>
";
    }

    // line 11
    public function block_explain($context, array $blocks = [])
    {
        // line 12
        echo "    <p>";
        echo $this->getAttribute(($context["error"] ?? null), "insecureExplain", []);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:insecure_installation.html.twig";
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
        return new Source("", "ContaoCoreBundle:Error:insecure_installation.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Error/insecure_installation.html.twig");
    }
}
