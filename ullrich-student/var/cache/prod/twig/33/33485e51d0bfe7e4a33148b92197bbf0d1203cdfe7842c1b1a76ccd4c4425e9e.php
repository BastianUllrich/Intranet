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

/* form_textfield.html5 */
class __TwigTemplate_de40c03b1c718a6c4e89ee452fae568ec1388caf8114b5abc6fb7f3ba9c9e5c5 extends \Twig\Template
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
        echo "<?php \$this->extend('form_row'); ?>

<?php \$this->block('label'); ?>
  <?php if (\$this->label): ?>
    <label for=\"ctrl_<?= \$this->id ?>\"<?php if (\$this->class): ?> class=\"<?= \$this->class ?>\"<?php endif; ?>>
      <?php if (\$this->mandatory): ?>
        <span class=\"invisible\"><?= \$this->mandatoryField ?> </span><?= \$this->label ?><span class=\"mandatory\">*</span>
      <?php else: ?>
        <?= \$this->label ?>
      <?php endif; ?>
    </label>
  <?php endif; ?>
<?php \$this->endblock(); ?>

<?php \$this->block('field'); ?>
  <?php if (\$this->hasErrors()): ?>
    <p class=\"error\"><?= \$this->getErrorAsString() ?></p>
  <?php endif; ?>

  <input type=\"<?= \$this->type ?>\" name=\"<?= \$this->name ?>\" id=\"ctrl_<?= \$this->id ?>\" class=\"text<?php if (\$this->hideInput) echo ' password'; ?><?php if (\$this->class) echo ' ' . \$this->class; ?>\" value=\"<?= StringUtil::specialchars(\$this->value) ?>\"<?= \$this->getAttributes() ?> autocomplete=\"on\">
<?php \$this->endblock(); ?>
";
    }

    public function getTemplateName()
    {
        return "form_textfield.html5";
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
        return new Source("", "form_textfield.html5", "/var/www/ullrich-student/templates/form_textfield.html5");
    }
}
