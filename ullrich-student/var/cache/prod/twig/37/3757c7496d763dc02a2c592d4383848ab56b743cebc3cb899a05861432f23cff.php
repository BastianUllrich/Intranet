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

/* be_login.html5 */
class __TwigTemplate_39c5e52b871a9d5ac87779e8462431effa50bc99ce0e9e4ca0a239b45628fdf1 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"<?= \$this->language ?>\">
<head>

  <meta charset=\"<?= \$this->charset ?>\">
  <title><?= \$this->title ?> - Contao Open Source CMS</title>
  <base href=\"<?= \$this->base ?>\">
  <meta name=\"generator\" content=\"Contao Open Source CMS\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
  <meta name=\"referrer\" content=\"origin\">
  <meta name=\"robots\" content=\"noindex,follow\">

  <link rel=\"stylesheet\" href=\"<?= TL_ASSETS_URL ?>system/themes/<?= \$this->theme ?>/fonts.css\">
  <link rel=\"stylesheet\" href=\"<?= TL_ASSETS_URL ?>system/themes/<?= \$this->theme ?>/basic.css\">
  <link rel=\"stylesheet\" href=\"<?= TL_ASSETS_URL ?>system/themes/<?= \$this->theme ?>/login.css\">
  <?= \$this->stylesheets ?>

  <script><?= \$this->getLocaleString() ?></script>
  <script src=\"<?= TL_ASSETS_URL ?>assets/mootools/js/mootools.min.js\"></script>
  <script src=\"<?= TL_ASSETS_URL ?>bundles/contaocore/mootao.min.js\"></script>
  <script src=\"<?= TL_ASSETS_URL ?>bundles/contaocore/core.min.js\"></script>
  <script><?= \$this->getDateString() ?></script>
  <?= \$this->javascripts ?>

</head>
<body class=\"<?= \$this->ua ?>\">

  <div id=\"container\" class=\"cf\">
    <div id=\"main\">
      <form action=\"<?= \$this->action ?>\" class=\"tl_login_form\" method=\"post\">
        <div class=\"formbody\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_login\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"<?= REQUEST_TOKEN ?>\">
          <h1><?= \$this->headline ?></h1>
          <div class=\"widget\">
            <label for=\"username\"><?= \$this->username ?></label>
            <input type=\"text\" autocapitalize=\"off\" name=\"username\" id=\"username\" class=\"tl_text\" value=\"<?= \$this->curUsername ?>\" placeholder=\"<?= \$this->username ?>\" required>
          </div>
          <div class=\"widget\">
            <label for=\"password\"><?= \$this->password ?></label>
            <input type=\"password\" name=\"password\" id=\"password\" class=\"tl_text\" value=\"\" placeholder=\"<?= \$this->password ?>\" required>
          </div>
          <div class=\"submit_container cf\">
            <button type=\"submit\" name=\"login\" id=\"login\" class=\"tl_submit\"><?= \$this->loginButton ?></button>
            <a href=\"<?= \$this->route('contao_root') ?>\" class=\"footer_preview\"><?= \$this->feLink ?> ›</a>
          </div>
        </div>
      </form>
    </div>
    <?= \$this->messages ?>
  </div>

  <div class=\"tl_info\" id=\"javascript\">
    <?= \$this->jsDisabled ?>
  </div>

  <script>
    window.addEvent('domready', function() {
      if (parent.frames[0] && parent.frames[0].name == 'switch') {
        parent.location.reload();
      }
      \$('username').focus();
    });
  </script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "be_login.html5";
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
        return new Source("", "be_login.html5", "/var/www/ullrich-student/templates/be_login.html5");
    }
}
