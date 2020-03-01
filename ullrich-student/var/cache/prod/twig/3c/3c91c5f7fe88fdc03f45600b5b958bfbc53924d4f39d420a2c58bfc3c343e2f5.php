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

/* mod_login_mate.html5 */
class __TwigTemplate_1cdf2ca43f103c575d55f97910f7b583eea9bdcb014e097747fec9a6921296ea extends \Twig\Template
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
        echo "<!-- indexer::stop -->
<div class=\"<?= \$this->class ?> <?= \$this->logout ? 'logout' : 'login' ?> block\"<?= \$this->cssID ?><?php if (\$this->style): ?> style=\"<?= \$this->style ?>\"<?php endif; ?>>

    <?php if (\$this->headline): ?>
    <<?= \$this->hl ?>><?= \$this->headline ?></<?= \$this->hl ?>>
<?php endif; ?>

<form<?php if (\$this->action): ?> action=\"<?= \$this->action ?>\"<?php endif; ?> id=\"<?= \$this->formId ?>\" method=\"post\">
    <div class=\"formbody\">
        <?php if (\$this->message): ?>
            <p class=\"error\"><?= \$this->message ?></p>
        <?php endif; ?>
        <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"<?= \$this->formId ?>\">
        <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["request_token"] ?? null), "html", null, true);
        echo "\">
        <?php if (\$this->logout): ?>
            <p class=\"login_info\"><?= \$this->loggedInAs ?><br><?= \$this->lastLogin ?></p>
        <?php else: ?>
            <div class=\"widget widget-text\">
                <label for=\"username\"><?= \$this->username ?></label>
                <input type=\"text\" name=\"username\" id=\"username\" class=\"text\" value=\"<?= \$this->value ?>\" autocomplete=\"username\" >
            </div>
            <div class=\"widget widget-password\">
                <label for=\"password\"><?= \$this->password ?></label>
                <input type=\"password\" name=\"password\" id=\"password\" class=\"text password\" value=\"\" autocomplete=\"current-password\" >
            </div>
            <?php if (\$this->autologin): ?>
                <div class=\"widget widget-checkbox\">
                    <fieldset class=\"checkbox_container\">
                        <span><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" value=\"1\" class=\"checkbox\"> <label for=\"autologin\"><?= \$this->autoLabel ?></label></span>
                    </fieldset>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class=\"widget widget-submit\">
            <button type=\"submit\" class=\"submit\"><?= \$this->slabel ?></button>
        </div>
        
    </div>
</form>

</div>
<!-- indexer::continue -->
";
    }

    public function getTemplateName()
    {
        return "mod_login_mate.html5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod_login_mate.html5", "/var/www/ullrich-student/templates/mod_login_mate.html5");
    }
}
