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

/* mod_articlelist.html5 */
class __TwigTemplate_f377935a779a559beaf36c0575124dacdea0ccd40a5a169416bd125ae9061a34 extends \Twig\Template
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
        echo "<?php \$this->extend('block_unsearchable'); ?>

<?php \$this->block('content'); ?>

  <ul>
    <?php foreach (\$this->articles as \$article): ?>
      <li><a href=\"<?= \$this->request ?>#<?= \$article['id'] ?>\" title=\"<?= \$article['title'] ?>\"><?= \$article['link'] ?></a></li>
    <?php endforeach; ?>
  </ul>

<?php \$this->endblock(); ?>
";
    }

    public function getTemplateName()
    {
        return "mod_articlelist.html5";
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
        return new Source("", "mod_articlelist.html5", "/var/www/ullrich-student/templates/mod_articlelist.html5");
    }
}
