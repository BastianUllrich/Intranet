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

/* fe_page_mate_left.html5 */
class __TwigTemplate_5aab330c31f50ba6b453243aa76a1a306c6479771cc02a2a56d0a956cda1567d extends \Twig\Template
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

<?php \$this->block('container'); ?>
    <?php \$this->parent(); ?>
<?php \$this->endblock(); ?>

<?php \$this->block('left'); ?>
    <?php if (\$this->left): ?>
    <div class=\"col s12 l3 pull-l9 left-outer\">
      <aside id=\"left\">
        <div class=\"inside\">
          <?= \$this->left ?>
        </div>
      </aside>
    </div>
    <?php endif; ?>
<?php \$this->endblock(); ?>

<?php \$this->block('main'); ?>
    <div class=\"col s12 l9 push-l3\">
\t    <div id=\"main\">
\t      <div class=\"inside\">
\t        <?= \$this->main ?>
\t      </div>
\t      <?php \$this->sections('main'); ?>
\t    </div>
    </div>
<?php \$this->endblock(); ?>

";
    }

    public function getTemplateName()
    {
        return "fe_page_mate_left.html5";
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
        return new Source("", "fe_page_mate_left.html5", "/var/www/ullrich-student/templates/fe_page_mate_left.html5");
    }
}
