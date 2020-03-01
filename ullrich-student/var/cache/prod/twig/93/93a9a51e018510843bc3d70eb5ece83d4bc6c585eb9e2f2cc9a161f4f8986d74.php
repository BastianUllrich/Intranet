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

/* mod_breadcrumb.html5 */
class __TwigTemplate_a26723d9ad09a069f9c888ed530cc117fdbca1c3ce8f34bbd1129bfe570463b3 extends \Twig\Template
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

  <ul aria-label=\"breadcrumb-navigation\" itemprop=\"breadcrumb\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
  \t<li>Sie befinden sich hier:</li>
    <?php 
    
    \$i = 0;
    
    foreach (\$this->items as \$item): 
    \t
    if(\$i>0) 
    {
    ?>
      <?php if (\$item['isActive']): ?>
        <li class=\"active<?php if (\$item['class']): ?> <?php echo \$item['class']; ?><?php endif; ?> last\"><?php echo \$item['title']; ?></li>
      <?php else: ?>
        <li<?php if (\$item['class']): ?> class=\"<?php echo \$item['class']; ?>\"<?php endif; ?>><a href=\"<?php echo \$item['href']; ?>\" title=\"<?php echo \$item['title']; ?>\"><?php echo \$item['link']; ?></a></li>
      <?php endif; ?>
    <?php 
      
    }
    \$i++;
      
    endforeach; ?>
  </ul>

<?php \$this->endblock(); ?>
";
    }

    public function getTemplateName()
    {
        return "mod_breadcrumb.html5";
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
        return new Source("", "mod_breadcrumb.html5", "/var/www/ullrich-student/templates/mod_breadcrumb.html5");
    }
}
