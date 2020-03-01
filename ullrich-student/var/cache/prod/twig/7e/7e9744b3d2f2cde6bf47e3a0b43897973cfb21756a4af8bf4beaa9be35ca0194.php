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
class __TwigTemplate_9ec8ae26aeee8d13b88b58d88fa0795f120bdeee242d8830ec99155fc7701f0f extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["ua"] ?? null), "html", null, true);
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
    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
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
        return array (  105 => 30,  97 => 31,  95 => 30,  87 => 25,  81 => 22,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  54 => 13,  50 => 12,  46 => 11,  34 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoInstallationBundle::layout.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/layout.html.twig");
    }
}
