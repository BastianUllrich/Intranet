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

/* ContaoCoreBundle:Error:error.html.twig */
class __TwigTemplate_1ad89aa4fbbbf81d6cfa5c21b5c234cd5c206d350610e4a0ec9027e561106d98 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoCore/Error/layout.html.twig", "ContaoCoreBundle:Error:error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["error"] ?? null), "error", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "error", []), "An error occurred")) : ("An error occurred")), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_matter($context, array $blocks = [])
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["error"] ?? null), "errorOccurred", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "errorOccurred", []), "An error occurred while executing this script. Something does not work properly. Additionally an error occurred while trying to display the error message.")) : ("An error occurred while executing this script. Something does not work properly. Additionally an error occurred while trying to display the error message.")), "html", null, true);
        echo "</p>
";
    }

    // line 8
    public function block_howToFix($context, array $blocks = [])
    {
        // line 9
        echo "    <p>";
        echo (($this->getAttribute(($context["error"] ?? null), "errorFixOne", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "errorFixOne", []), "Open the current log file in the <code>var/logs</code> or <code>app/logs</code> directory and find the associated error message (usually the last one).")) : ("Open the current log file in the <code>var/logs</code> or <code>app/logs</code> directory and find the associated error message (usually the last one)."));
        echo "</p>
";
    }

    // line 11
    public function block_explain($context, array $blocks = [])
    {
        // line 12
        echo "    <p>";
        echo (($this->getAttribute(($context["error"] ?? null), "errorExplain", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "errorExplain", []), "The script execution stopped, because something does not work properly. The actual error message is hidden by this notice for security reasons and can be found in the current log file (see above). If you do not understand the error message or do not know how to fix the problem, search the <a href=\"https://contao.org/faq.html\">Contao FAQs</a> or visit the <a href=\"https://contao.org/support.html\">Contao support page</a>.")) : ("The script execution stopped, because something does not work properly. The actual error message is hidden by this notice for security reasons and can be found in the current log file (see above). If you do not understand the error message or do not know how to fix the problem, search the <a href=\"https://contao.org/faq.html\">Contao FAQs</a> or visit the <a href=\"https://contao.org/support.html\">Contao support page</a>."));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:error.html.twig";
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
        return new Source("", "ContaoCoreBundle:Error:error.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Error/error.html.twig");
    }
}
