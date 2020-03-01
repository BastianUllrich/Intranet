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

/* @Twig/images/icon-minus-square.svg */
class __TwigTemplate_6b86b3e6c79ff50a0ad07036919897e4277612158a1f10c9140740560ed43c89 extends \Twig\Template
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
        echo "<svg width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1408 960V832q0-26-19-45t-45-19H448q-26 0-45 19t-19 45v128q0 26 19 45t45 19h896q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5T1376 1664H416q-119 0-203.5-84.5T128 1376V416q0-119 84.5-203.5T416 128h960q119 0 203.5 84.5T1664 416z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "@Twig/images/icon-minus-square.svg";
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
        return new Source("", "@Twig/images/icon-minus-square.svg", "/var/www/ullrich-student/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/images/icon-minus-square.svg");
    }
}
