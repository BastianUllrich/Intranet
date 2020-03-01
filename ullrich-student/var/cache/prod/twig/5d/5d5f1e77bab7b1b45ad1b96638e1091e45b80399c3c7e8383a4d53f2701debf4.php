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

/* @Twig/images/icon-plus-square-o.svg */
class __TwigTemplate_58598d9f3e4bda0c4e0b5323180a0d9a77371bcaf1d933b56474ffe07153104c extends \Twig\Template
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
        echo "<svg width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1344 800v64q0 14-9 23t-23 9H960v352q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V896H480q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h352V416q0-14 9-23t23-9h64q14 0 23 9t9 23v352h352q14 0 23 9t9 23zm128 448V416q0-66-47-113t-113-47H480q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113zm128-832v832q0 119-84.5 203.5T1312 1536H480q-119 0-203.5-84.5T192 1248V416q0-119 84.5-203.5T480 128h832q119 0 203.5 84.5T1600 416z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "@Twig/images/icon-plus-square-o.svg";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/images/icon-plus-square-o.svg", "/var/www/ullrich-student/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/images/icon-plus-square-o.svg");
    }
}
