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

/* knp_menu_ordered.html.twig */
class __TwigTemplate_10464fbc38ad87c41de1cf6cccb95cee69232c40b1b34549013dea583daefa98 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4)->unwrap();
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", []) &&  !($this->getAttribute(($context["options"] ?? null), "depth", []) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", []))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "knp_menu_ordered.html.twig", "/var/www/ullrich-student/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_ordered.html.twig");
    }
}
