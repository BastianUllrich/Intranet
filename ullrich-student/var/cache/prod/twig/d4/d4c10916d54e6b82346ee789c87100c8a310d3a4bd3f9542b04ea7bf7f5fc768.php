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
class __TwigTemplate_144da9f1bb8a2b56e52023f0ebe2e195cce5454e858df09389f120f6fb10de97 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::database.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
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
            echo twig_escape_filter($this->env, ($context["database_error"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "database_user", []), "html", null, true);
        echo "\">
          <h4><label for=\"dbPassword\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_password"), "html", null, true);
        echo "</label></h4>
          <input type=\"password\" name=\"dbPassword\" id=\"dbPassword\" class=\"tl_text\" value=\"";
        // line 22
        if ($this->getAttribute(($context["parameters"] ?? null), "database_password", [])) {
            echo "*****";
        }
        echo "\">
          <h4><label for=\"dbName\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("database_name"), "html", null, true);
        echo "</label></h4>
          <input type=\"text\" name=\"dbName\" id=\"dbName\" class=\"tl_text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "database_name", []), "html", null, true);
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
        return array (  115 => 28,  108 => 24,  104 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  58 => 10,  52 => 8,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoInstallationBundle::database.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/database.html.twig");
    }
}
