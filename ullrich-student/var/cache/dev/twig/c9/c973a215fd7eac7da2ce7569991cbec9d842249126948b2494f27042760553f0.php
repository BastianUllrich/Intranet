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

/* ContaoCoreBundle:Collector:contao.html.twig */
class __TwigTemplate_48e7a71a10f131f79367943516406af5cd5607397cd23026b6d54e6a253c72ca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoCoreBundle:Collector:contao.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoCoreBundle:Collector:contao.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "ContaoCoreBundle:Collector:contao.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@ContaoCore/Collector/contao.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "version", []), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Contao</b>
                <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "version", []), "html", null, true);
        echo "</span>
            </div>
            ";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "frontend", [])) {
            // line 15
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Page layout</b>
                    <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "layout", []), "html", null, true);
            echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Template</b>
                    <span>";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "summary", [], "any", false, true), "template", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "summary", [], "any", false, true), "template", []), "n/a")) : ("n/a")), "html", null, true);
            echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>FE preview</b>
                    ";
            // line 25
            if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "preview", [])) {
                // line 26
                echo "                        <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">enabled</span>
                    ";
            } else {
                // line 28
                echo "                        <span>disabled</span>
                    ";
            }
            // line 30
            echo "                </div>
            ";
        }
        // line 32
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span><a href=\"https://docs.contao.org/\" target=\"_blank\" rel=\"help\">Read the Contao docs</a></span>
            </div>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "contao", "additional_classes" => ((($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "preview", [])) ? ("sf-toolbar-status-yellow ") : ("")) . "sf-toolbar-block-right")]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo twig_include($this->env, $context, "@ContaoCore/Collector/contao.svg");
        echo "</span>
        <strong>Contao</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 49
        echo "    <h2>Summary</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "version", []), "html", null, true);
        echo "</span>
            <span class=\"label\">Contao version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "models", []), "html", null, true);
        echo "</span>
            <span class=\"label\">Registered models</span>
        </div>

        ";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "layout", [])) {
            // line 62
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "summary", []), "layout", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Page layout</span>
            </div>
        ";
        }
        // line 67
        echo "    </div>

    <h2>Classes set</h2>
    <table>
        <thead>
            <tr>
                <th>Class name</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "classesset", []));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 78
            echo "                <tr>
                    <td><code>";
            // line 79
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo "</code></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>

    <h2>Classes aliased</h2>
    <table>
        <thead>
            <tr>
                <th>Alias name</th>
                <th>Original name</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "classesaliased", []));
        foreach ($context['_seq'] as $context["alias"] => $context["original"]) {
            // line 95
            echo "                <tr>
                    <td><code>";
            // line 96
            echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
            echo "</code></td>
                    <td><code>";
            // line 97
            echo twig_escape_filter($this->env, $context["original"], "html", null, true);
            echo "</code></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alias'], $context['original'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </tbody>
    </table>

    <h2>Classes composerized</h2>
    <table>
        <thead>
            <tr>
                <th>Alias name</th>
                <th>Original name</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "classescomposerized", []));
        foreach ($context['_seq'] as $context["alias"] => $context["original"]) {
            // line 113
            echo "                <tr>
                    <td><code>";
            // line 114
            echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
            echo "</code></td>
                    <td><code>";
            // line 115
            echo twig_escape_filter($this->env, $context["original"], "html", null, true);
            echo "</code></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alias'], $context['original'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "        </tbody>
    </table>

    ";
        // line 121
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "additionaldata", [])) {
            // line 122
            echo "        <h2>Other</h2>
        <pre>
            ";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "additionaldata", []));
            echo "
        </pre>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Collector:contao.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 124,  313 => 122,  311 => 121,  306 => 118,  297 => 115,  293 => 114,  290 => 113,  286 => 112,  272 => 100,  263 => 97,  259 => 96,  256 => 95,  252 => 94,  238 => 82,  229 => 79,  226 => 78,  222 => 77,  210 => 67,  203 => 63,  200 => 62,  198 => 61,  191 => 57,  183 => 52,  178 => 49,  169 => 48,  155 => 43,  152 => 42,  143 => 41,  130 => 38,  122 => 32,  118 => 30,  114 => 28,  110 => 26,  108 => 25,  101 => 21,  94 => 17,  90 => 15,  88 => 14,  83 => 12,  78 => 9,  75 => 8,  70 => 6,  65 => 5,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@ContaoCore/Collector/contao.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.summary.version }}</span>
    {% endset %}
    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Contao</b>
                <span>{{ collector.summary.version }}</span>
            </div>
            {% if collector.summary.frontend %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Page layout</b>
                    <span>{{ collector.summary.layout }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Template</b>
                    <span>{{ collector.summary.template|default('n/a') }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>FE preview</b>
                    {% if collector.summary.preview %}
                        <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">enabled</span>
                    {% else %}
                        <span>disabled</span>
                    {% endif %}
                </div>
            {% endif %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span><a href=\"https://docs.contao.org/\" target=\"_blank\" rel=\"help\">Read the Contao docs</a></span>
            </div>
        </div>
    {% endset %}
    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'contao', additional_classes: ((collector.summary.preview ? 'sf-toolbar-status-yellow ' : '') ~ 'sf-toolbar-block-right') }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@ContaoCore/Collector/contao.svg') }}</span>
        <strong>Contao</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Summary</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.summary.version }}</span>
            <span class=\"label\">Contao version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.summary.models }}</span>
            <span class=\"label\">Registered models</span>
        </div>

        {% if collector.summary.layout %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.layout }}</span>
                <span class=\"label\">Page layout</span>
            </div>
        {% endif %}
    </div>

    <h2>Classes set</h2>
    <table>
        <thead>
            <tr>
                <th>Class name</th>
            </tr>
        </thead>
        <tbody>
            {% for class in collector.classesset %}
                <tr>
                    <td><code>{{ class }}</code></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <h2>Classes aliased</h2>
    <table>
        <thead>
            <tr>
                <th>Alias name</th>
                <th>Original name</th>
            </tr>
        </thead>
        <tbody>
            {% for alias, original in collector.classesaliased %}
                <tr>
                    <td><code>{{ alias }}</code></td>
                    <td><code>{{ original }}</code></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <h2>Classes composerized</h2>
    <table>
        <thead>
            <tr>
                <th>Alias name</th>
                <th>Original name</th>
            </tr>
        </thead>
        <tbody>
            {% for alias, original in collector.classescomposerized %}
                <tr>
                    <td><code>{{ alias }}</code></td>
                    <td><code>{{ original }}</code></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    {% if collector.additionaldata %}
        <h2>Other</h2>
        <pre>
            {{ dump(collector.additionaldata) }}
        </pre>
    {% endif %}
{% endblock %}
", "ContaoCoreBundle:Collector:contao.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Collector/contao.html.twig");
    }
}
