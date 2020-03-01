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

/* ContaoInstallationBundle::login.html.twig */
class __TwigTemplate_717b4a10d66feae409f8199b59ef2a1e6a4df7c79b456325c3d966472f5ab18c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "  <fieldset class=\"tl_tbox nolegend\">
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login"), "html", null, true);
        echo "</h3>
    <p class=\"tl_info\" id=\"cookies\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("allow_cookies"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 8
            echo "      <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 10
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login_explanation"), "html", null, true);
        echo "</p>
    <form method=\"post\">
      <div class=\"tl_formbody\">
        <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_login\">
        <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
        <h4><label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password"), "html", null, true);
        echo "</label></h4>
        <input type=\"password\" name=\"password\" id=\"password\" autocomplete=\"off\" class=\"tl_text\" value=\"\">
      </div>
      <div class=\"tl_formbody_submit\">
        <div class=\"tl_submit_container\">
          <button type=\"submit\" class=\"tl_submit\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </form>
  </fieldset>
  <script>
    \$('password').focus();
    navigator.cookieEnabled && \$('cookies').destroy();
  </script>
";
    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  73 => 15,  69 => 14,  61 => 10,  55 => 8,  53 => 7,  49 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoInstallationBundle::login.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/login.html.twig");
    }
}
