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

/* ContaoInstallationBundle::database.html.twig */
class __TwigTemplate_12164fd032a2fc4d27e70355d3a4d6a1af816e0b5290f2c6ee64c531b6ca5cb4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoInstallation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoInstallationBundle::database.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoInstallationBundle::database.html.twig"));

        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::database.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <div>
      <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_connection"), "html", null, true);
        echo "</h3>
      ";
        // line 7
        if ((isset($context["database_error"]) || array_key_exists("database_error", $context))) {
            // line 8
            echo "        <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["database_error"] ?? $this->getContext($context, "database_error")), "html", null, true);
            echo "</p>
      ";
        }
        // line 10
        echo "      <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_connection_explain"), "html", null, true);
        echo "</p>
      <form method=\"post\">
        <div class=\"tl_formbody\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_login\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["request_token"] ?? $this->getContext($context, "request_token")), "html", null, true);
        echo "\">
          <h4><label for=\"dbHost\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_host"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbHost\" id=\"dbHost\" class=\"tl_text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "database_host", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "database_host", []), "localhost")) : ("localhost")), "html", null, true);
        echo "\">
          <h4><label for=\"dbPort\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_port"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbPort\" id=\"dbPort\" class=\"tl_text\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "database_port", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "database_port", []), 3306)) : (3306)), "html", null, true);
        echo "\">
          <h4><label for=\"dbUser\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_user"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbUser\" id=\"dbUser\" class=\"tl_text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "database_user", []), "html", null, true);
        echo "\">
          <h4><label for=\"dbPassword\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_password"), "html", null, true);
        echo "</label></h4>
          <input type=\"password\" name=\"dbPassword\" id=\"dbPassword\" class=\"tl_text\" value=\"";
        // line 22
        if ($this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "database_password", [])) {
            echo "*****";
        }
        echo "\">
          <h4><label for=\"dbName\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_name"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbName\" id=\"dbName\" class=\"tl_text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? $this->getContext($context, "parameters")), "database_name", []), "html", null, true);
        echo "\">
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("save_settings"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  <script>
    \$('dbHost').focus();
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::database.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  126 => 24,  122 => 23,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  76 => 10,  70 => 8,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ContaoInstallation/layout.html.twig\" %}

{% block main %}
  <fieldset class=\"tl_tbox nolegend\">
    <div>
      <h3>{{ 'database_connection'|trans }}</h3>
      {% if database_error is defined %}
        <p class=\"tl_error\">{{ database_error }}</p>
      {% endif %}
      <p>{{ 'database_connection_explain'|trans }}</p>
      <form method=\"post\">
        <div class=\"tl_formbody\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_login\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"{{ request_token }}\">
          <h4><label for=\"dbHost\">{{ 'database_host'|trans }}</label></h4>
          <input type=\"text\" name=\"dbHost\" id=\"dbHost\" class=\"tl_text\" value=\"{{ parameters.database_host|default('localhost') }}\">
          <h4><label for=\"dbPort\">{{ 'database_port'|trans }}</label></h4>
          <input type=\"text\" name=\"dbPort\" id=\"dbPort\" class=\"tl_text\" value=\"{{ parameters.database_port|default(3306) }}\">
          <h4><label for=\"dbUser\">{{ 'database_user'|trans }}</label></h4>
          <input type=\"text\" name=\"dbUser\" id=\"dbUser\" class=\"tl_text\" value=\"{{ parameters.database_user }}\">
          <h4><label for=\"dbPassword\">{{ 'database_password'|trans }}</label></h4>
          <input type=\"password\" name=\"dbPassword\" id=\"dbPassword\" class=\"tl_text\" value=\"{% if parameters.database_password %}*****{% endif %}\">
          <h4><label for=\"dbName\">{{ 'database_name'|trans }}</label></h4>
          <input type=\"text\" name=\"dbName\" id=\"dbName\" class=\"tl_text\" value=\"{{ parameters.database_name }}\">
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\">{{ 'save_settings'|trans }}</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  <script>
    \$('dbHost').focus();
  </script>
{% endblock %}
", "ContaoInstallationBundle::database.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/database.html.twig");
    }
}
