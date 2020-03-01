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

/* ce_image.html5 */
class __TwigTemplate_25d7eee65b2dcf929e14058a9dc5a7ede2dc36887dd0cc214557a9715ba035f3 extends \Twig\Template
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
        echo "<?php \$this->extend('block_searchable'); ?>

<?php \$this->block('content'); ?>

  <figure class=\"image_container\"<?php if (\$this->margin): ?> style=\"<?= \$this->margin ?>\"<?php endif; ?>>
\t<h1>
    <?php if (\$this->href): ?>
      <a href=\"<?= \$this->href ?>\"<?php if (\$this->linkTitle): ?> title=\"<?= \$this->linkTitle ?>\"<?php endif; ?><?= \$this->attributes ?>>
    <?php endif; ?>

    <?php \$this->insert('picture_default', \$this->picture); ?>

    <?php if (\$this->href): ?>
      </a>
    <?php endif; ?>

    <?php if (\$this->caption): ?>
      <figcaption class=\"caption\"><?= \$this->caption ?></figcaption>
    <?php endif; ?>
\t</h1>
  </figure>

<?php \$this->endblock(); ?>
";
    }

    public function getTemplateName()
    {
        return "ce_image.html5";
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
        return new Source("", "ce_image.html5", "/var/www/ullrich-student/templates/ce_image.html5");
    }
}
