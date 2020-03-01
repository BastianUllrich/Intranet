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

/* fe_page_mate_right.html5 */
class __TwigTemplate_6871cf433a21e96408aabf56861f5ef3f5cc5b73b347355a20ac187db1acc9d2 extends \Twig\Template
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
        echo "<?php \$this->extend('fe_page_mate'); ?>

<?php \$this->block('right'); ?>
    <?php if (\$this->right): ?>
    <div class=\"col s12 l3 right-outer\">
        <div class=\"inside\" aria-label=\"Sub Navigation\">
\t\t\t<img src=\"files/mate/img/Bliz_Logo.png\" alt=\"Logo des BliZ\" title=\"Logo des BliZ\" class=\"bliz_logo\">
\t          <?= \$this->right ?>
        </div>
    </div>
    <?php endif; ?>
<?php \$this->endblock(); ?>

<?php \$this->block('main'); ?>
\t
    <div class=\"col s12 l9\">
\t    <div id=\"main\">
\t      <div class=\"inside\">
\t        <?= \$this->main ?>
\t      </div>
\t      <?php \$this->sections('main'); ?>
\t    </div>
    </div>
<?php \$this->endblock(); ?>

<?php \$this->block('container'); ?>
\t<?php \$this->parent(); ?>
<?php \$this->endblock(); ?>
";
    }

    public function getTemplateName()
    {
        return "fe_page_mate_right.html5";
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
        return new Source("", "fe_page_mate_right.html5", "/var/www/ullrich-student/templates/fe_page_mate_right.html5");
    }
}
