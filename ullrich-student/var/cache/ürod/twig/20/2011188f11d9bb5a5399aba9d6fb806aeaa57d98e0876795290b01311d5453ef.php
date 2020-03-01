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

/* ContaoInstallationBundle::layout.html.twig */
class __TwigTemplate_635539806f15b769cef68b1b2355b4aa34a836633a53b4bbf14cb8b2db747047 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoInstallationBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["language"] ?? $this->getContext($context, "language")), "html", null, true);
        echo "\">
<head>

  <meta charset=\"utf-8\">
  <title>Contao Open Source CMS</title>
  <meta name=\"generator\" content=\"Contao Open Source CMS\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
  <meta name=\"robots\" content=\"noindex,nofollow\">

  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("system/themes/flexible/fonts.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("system/themes/flexible/basic.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("system/themes/flexible/install.css"), "html", null, true);
        echo "\">

  <script>var Contao={theme:'flexible',path:'";
        // line 15
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "'}</script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/mootools/js/mootools.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contaocore/mootao.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contaocore/core.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("system/themes/flexible/hover.js"), "html", null, true);
        echo "\"></script>

</head>
<body class=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["ua"] ?? $this->getContext($context, "ua")), "html", null, true);
        echo "\">

  <div id=\"header\">
    <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("install_tool"), "html", null, true);
        echo "</h1>
  </div>

  <div id=\"container\">
    <div id=\"main\">
      ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 31
        echo "    </div>
  </div>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  100 => 31,  98 => 30,  90 => 25,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  57 => 13,  53 => 12,  49 => 11,  37 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ language }}\">
<head>

  <meta charset=\"utf-8\">
  <title>Contao Open Source CMS</title>
  <meta name=\"generator\" content=\"Contao Open Source CMS\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
  <meta name=\"robots\" content=\"noindex,nofollow\">

  <link rel=\"stylesheet\" href=\"{{ asset('system/themes/flexible/fonts.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('system/themes/flexible/basic.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('system/themes/flexible/install.css') }}\">

  <script>var Contao={theme:'flexible',path:'{{ path }}'}</script>
  <script src=\"{{ asset('assets/mootools/js/mootools.min.js') }}\"></script>
  <script src=\"{{ asset('bundles/contaocore/mootao.min.js') }}\"></script>
  <script src=\"{{ asset('bundles/contaocore/core.min.js') }}\"></script>
  <script src=\"{{ asset('system/themes/flexible/hover.js') }}\"></script>

</head>
<body class=\"{{ ua }}\">

  <div id=\"header\">
    <h1>{{ 'install_tool'|trans }}</h1>
  </div>

  <div id=\"container\">
    <div id=\"main\">
      {% block main %}{% endblock %}
    </div>
  </div>

</body>
</html>", "ContaoInstallationBundle::layout.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/layout.html.twig");
    }
}
