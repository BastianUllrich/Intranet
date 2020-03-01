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

/* ContaoInstallationBundle::password.html.twig */
class __TwigTemplate_7d518fcd83706df63e75cc0bcc563e264367d9dfdee163a11717371841391d01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoInstallationBundle::password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoInstallationBundle::password.html.twig"));

        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::password.html.twig", 1);
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
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("set_password"), "html", null, true);
        echo "</h3>
    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 7
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "    <p>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("set_password_hint");
        echo "</p>
    <form method=\"post\">
      <div class=\"tl_formbody\">
        <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_password\">
        <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["request_token"] ?? $this->getContext($context, "request_token")), "html", null, true);
        echo "\">
        <h4><label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password"), "html", null, true);
        echo "</label></h4>
        <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
        <h4><label for=\"confirmation\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation"), "html", null, true);
        echo "</label></h4>
        <input type=\"password\" name=\"confirmation\" id=\"confirmation\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
      </div>
      <div class=\"tl_formbody_submit\">
        <div class=\"tl_submit_container\">
          <button type=\"submit\" class=\"tl_submit\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("save_password"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </form>
  </fieldset>
  <script>
    \$('password').focus();
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  92 => 16,  87 => 14,  83 => 13,  75 => 9,  69 => 7,  67 => 6,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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
    <h3>{{ 'set_password'|trans }}</h3>
    {% if error is defined %}
      <p class=\"tl_error\">{{ error }}</p>
    {%  endif %}
    <p>{{ 'set_password_hint'|trans|raw }}</p>
    <form method=\"post\">
      <div class=\"tl_formbody\">
        <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_password\">
        <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"{{ request_token }}\">
        <h4><label for=\"password\">{{ 'password'|trans }}</label></h4>
        <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
        <h4><label for=\"confirmation\">{{ 'confirmation'|trans }}</label></h4>
        <input type=\"password\" name=\"confirmation\" id=\"confirmation\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
      </div>
      <div class=\"tl_formbody_submit\">
        <div class=\"tl_submit_container\">
          <button type=\"submit\" class=\"tl_submit\">{{ 'save_password'|trans }}</button>
        </div>
      </div>
    </form>
  </fieldset>
  <script>
    \$('password').focus();
  </script>
{% endblock %}
", "ContaoInstallationBundle::password.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/password.html.twig");
    }
}
