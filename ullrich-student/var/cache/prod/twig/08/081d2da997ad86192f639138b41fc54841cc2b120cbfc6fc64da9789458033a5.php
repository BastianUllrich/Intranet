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

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_9f3a2b08aac52cdabb0823654f8a624afb4950afc88fdc57738b2e33980513b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? null), "extra", [0 => "translation_domain", 1 => "messages"], "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? null), "label", []);
        // line 6
        if ( !(($context["translation_domain"] ?? null) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), $this->getAttribute(($context["item"] ?? null), "extra", [0 => "translation_params", 1 => []], "method"), ($context["translation_domain"] ?? null));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", []) && $this->getAttribute(($context["item"] ?? null), "extra", [0 => "safe_label", 1 => false], "method"))) {
            echo ($context["label"] ?? null);
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "KnpMenuBundle::menu.html.twig", "/var/www/ullrich-student/vendor/knplabs/knp-menu-bundle/src/Resources/views/menu.html.twig");
    }
}
