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

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_7abe3bc5ba3cccc7db1b956fccddbd9c9df3b94db948fdade033556d93687a06 extends \Twig\Template
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
        $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? null)), "channel", [], "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if (($context["channel_is_defined"] ?? null)) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        ";
            if (($this->getAttribute($context["log"], "priority", []) >= 400)) {
                // line 15
                echo "            ";
                $context["status"] = "error";
                // line 16
                echo "        ";
            } elseif (($this->getAttribute($context["log"], "priority", []) >= 300)) {
                // line 17
                echo "            ";
                $context["status"] = "warning";
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "            ";
                $context["severity"] = (($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "exception", [], "any", false, true), "severity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "exception", [], "any", false, true), "severity", []), false)) : (false));
                // line 20
                echo "            ";
                $context["status"] = ((((($context["severity"] ?? null) === constant("E_DEPRECATED")) || (($context["severity"] ?? null) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 21
                echo "        ";
            }
            // line 22
            echo "        <tr class=\"status-";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", []), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", []), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 27
            if (($context["channel_is_defined"] ?? null)) {
                // line 28
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", []), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 32
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", []), $this->getAttribute($context["log"], "context", []));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  104 => 32,  98 => 29,  95 => 28,  93 => 27,  88 => 25,  84 => 24,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  50 => 13,  43 => 8,  39 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "TwigBundle:Exception:logs.html.twig", "/var/www/ullrich-student/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
