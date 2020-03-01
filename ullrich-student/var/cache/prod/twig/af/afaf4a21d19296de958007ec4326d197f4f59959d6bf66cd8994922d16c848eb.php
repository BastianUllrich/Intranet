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

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_64c58ba423bdc9a02bbff99d7228316cd2816d656ade8c779536ae4d1e913547 extends \Twig\Template
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
        if ($this->getAttribute(($context["trace"] ?? null), "function", [])) {
            // line 2
            echo "at ";
            echo (($this->getAttribute(($context["trace"] ?? null), "class", []) . $this->getAttribute(($context["trace"] ?? null), "type", [])) . $this->getAttribute(($context["trace"] ?? null), "function", []));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? null), "args", []));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", []), "")) : (""))) &&  !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "line", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "line", []), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute(($context["trace"] ?? null), "function", [])) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute(($context["trace"] ?? null), "file", []), $this->getAttribute(($context["trace"] ?? null), "line", []))), [(" at line " . $this->getAttribute(($context["trace"] ?? null), "line", [])) => ""]);
            echo ":";
            echo $this->getAttribute(($context["trace"] ?? null), "line", []);
            echo (($this->getAttribute(($context["trace"] ?? null), "function", [])) ? (")") : (""));
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  39 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "TwigBundle:Exception:trace.txt.twig", "/var/www/ullrich-student/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
