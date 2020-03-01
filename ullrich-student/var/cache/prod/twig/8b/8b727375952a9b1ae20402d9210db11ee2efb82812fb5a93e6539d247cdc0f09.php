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

/* nav_mate_root.html5 */
class __TwigTemplate_1094d1c58e225695273a0def69bfb0d84820d48c057d98f2dbc4a0654b93d29a extends \Twig\Template
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
        echo "
    <?php if(is_array(\$this->items)): ?>
        <?php foreach (\$this->items as \$item): ?>
        <li class=\"<?php if (\$item['class']) echo \$item['class']; ?> valign-wrapper\">
          <a class=\"<?php if (!empty(\$item['subitems'])): ?>dropdown-button<?php endif; ?>
            <?php if(\$item['isActive']): ?> active <?php endif; ?><?php if (\$item['class']) echo \$item['class']; ?> valign\"
            <?php if (!empty(\$item['subitems'])): ?> data-target=\"nav<?= \$this->id ?>dropdown<?= \$item['id'] ?>\"<?php endif; ?>
            href=\"<?= \$item['href'] ?: './' ?>\"
            title=\"<?= \$item['pageTitle'] ?: \$item['title'] ?>\"
            <?php if (\$item['accesskey']) echo ' accesskey=\"' . \$item['accesskey'] . '\"'; ?>
            <?php if (\$item['tabindex']) echo ' tabindex=\"' . \$item['tabindex'] . '\"'; ?>
            <?php if (\$item['nofollow']) echo ' rel=\"nofollow\"'; ?><?= \$item['target'] ?>
            <?php if (!empty(\$item['subitems'])) echo ' aria-haspopup=\"true\"' ; ?>>
          </a>
        </li>
        <?php endforeach; ?>
    <?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "nav_mate_root.html5";
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
        return new Source("", "nav_mate_root.html5", "/var/www/ullrich-student/templates/nav_mate_root.html5");
    }
}
