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

/* j_nav--mobile.html5.html5 */
class __TwigTemplate_6013185c62387a75fc32f74d7e870591358f13b20234d54469bda74be26f9036 extends \Twig\Template
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
        echo "<script>
jQuery(function (\$) {
  \$('.nav-toggler__button').on('click', function(e) {
  \te.preventDefault();
    \$('.nav--mobile').toggleClass('nav--mobile--active');
  });
});
</script>";
    }

    public function getTemplateName()
    {
        return "j_nav--mobile.html5.html5";
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
        return new Source("", "j_nav--mobile.html5.html5", "/var/www/ullrich-student/templates/j_nav--mobile.html5.html5");
    }
}
