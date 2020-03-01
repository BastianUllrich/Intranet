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

/* ContaoInstallationBundle::main.html.twig */
class __TwigTemplate_0933cccad53f38dfb51d56fcfcdf867a3bc6eaec5775b726891069343d757a90 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ContaoInstallation/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoInstallationBundle::main.html.twig"));

        $this->parent = $this->loadTemplate("@ContaoInstallation/layout.html.twig", "ContaoInstallationBundle::main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "  <fieldset class=\"tl_tbox";
        if ((twig_test_empty(($context["sql_form"] ?? $this->getContext($context, "sql_form"))) && twig_test_empty(($context["sql_message"] ?? $this->getContext($context, "sql_message"))))) {
            echo " collapsed";
        }
        echo "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("update_tables"), "html", null, true);
        echo "</legend>
    <div>
      <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("update_tables"), "html", null, true);
        echo "</h3>
      ";
        // line 8
        if (twig_test_empty(($context["sql_form"] ?? $this->getContext($context, "sql_form")))) {
            // line 9
            echo "        <p class=\"tl_confirm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("update_tables_confirm"), "html", null, true);
            echo "</p>
      ";
        }
        // line 11
        echo "      <p>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("update_tables_explain");
        echo "</p>
      ";
        // line 12
        if ( !twig_test_empty(($context["sql_message"] ?? $this->getContext($context, "sql_message")))) {
            // line 13
            echo "        <div id=\"sql_message\">";
            echo ($context["sql_message"] ?? $this->getContext($context, "sql_message"));
            echo "</div>
      ";
        }
        // line 15
        echo "      ";
        if ( !twig_test_empty(($context["sql_form"] ?? $this->getContext($context, "sql_form")))) {
            // line 16
            echo "        <form method=\"post\">
          <div class=\"tl_formbody\">
            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_update\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["request_token"] ?? $this->getContext($context, "request_token")), "html", null, true);
            echo "\">
            <div id=\"sql_wrapper\">
              <table id=\"sql_table\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sql_form"] ?? $this->getContext($context, "sql_form")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["category"] => $context["commands"]) {
                // line 23
                echo "                ";
                if ( !twig_test_empty($context["commands"])) {
                    // line 24
                    echo "                  <tr>
                    <td colspan=\"2\" class=\"tl_col_0\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["category"]), "html", null, true);
                    echo "</td>
                  </tr>
                  <tr>
                    <td class=\"tl_col_1\"><input type=\"checkbox\" id=\"check_all_";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\" class=\"tl_checkbox\" onclick=\"Backend.toggleCheckboxElements(this, '";
                    echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                    echo "')\"></td>
                    <td class=\"tl_col_2\"><label for=\"check_all_";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\" style=\"color:#a6a6a6\"><em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select_all"), "html", null, true);
                    echo "</em></label></td>
                  </tr>
                  ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["commands"]);
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["md5"] => $context["command"]) {
                        // line 32
                        echo "                    <tr>
                      <td class=\"tl_col_1\"><input type=\"checkbox\" name=\"sql[]\" id=\"sql_";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" class=\"tl_checkbox ";
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $context["md5"], "html", null, true);
                        echo "\"";
                        if ((!twig_in_filter("DROP", $context["command"]) || twig_in_filter("DROP INDEX", $context["command"]))) {
                            echo " checked=\"checked\"";
                        }
                        echo "></td>
                      <td class=\"tl_col_2\"><pre><label for=\"sql_";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\">";
                        if (twig_in_filter("CREATE", $context["command"])) {
                            echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($context["command"]);
                        } else {
                            echo twig_escape_filter($this->env, $context["command"], "html", null, true);
                        }
                        echo "</label></pre></td>
                    </tr>
                  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['md5'], $context['command'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['commands'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "              </table>
            </div>
          </div>
          <div class=\"tl_formbody_submit\">
            <div class=\"tl_submit_container\">
              <button type=\"submit\" class=\"tl_submit\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("update_save"), "html", null, true);
            echo "</button>
            </div>
          </div>
        </form>
      ";
        }
        // line 49
        echo "    </div>
  </fieldset>
  <fieldset class=\"tl_box";
        // line 51
        if (($context["has_admin"] ?? $this->getContext($context, "has_admin"))) {
            echo " collapsed";
        }
        echo "\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("template_import"), "html", null, true);
        echo "</legend>
    <div>
      <h3>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("template_import"), "html", null, true);
        echo "</h3>
      ";
        // line 55
        if ((isset($context["import_error"]) || array_key_exists("import_error", $context))) {
            // line 56
            echo "        <p class=\"tl_error\">";
            echo twig_escape_filter($this->env, ($context["import_error"] ?? $this->getContext($context, "import_error")), "html", null, true);
            echo "</p>
      ";
        } elseif (        // line 57
(isset($context["import_date"]) || array_key_exists("import_date", $context))) {
            // line 58
            echo "        <p class=\"tl_confirm\">";
            echo twig_escape_filter($this->env, sprintf($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("imported_on"), ($context["import_date"] ?? $this->getContext($context, "import_date"))), "html", null, true);
            echo "</p>
      ";
        } else {
            // line 60
            echo "        <p class=\"tl_info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import_data_will_be_deleted"), "html", null, true);
            echo "</p>
      ";
        }
        // line 62
        echo "      <p>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("template_import_explain");
        echo "</p>
      <form method=\"post\">
        <div class=\"tl_formbody_submit\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_template_import\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["request_token"] ?? $this->getContext($context, "request_token")), "html", null, true);
        echo "\">
          <h4><label for=\"template\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("templates"), "html", null, true);
        echo "</label></h4>
          <select name=\"template\" id=\"template\" class=\"tl_select\" required>
            <option value=\"\">-</option>
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 71
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "          </select>
          <div class=\"tl_checkbox_container\" style=\"margin-top:3px\">
            <input type=\"checkbox\" name=\"preserve\" id=\"ctrl_preserve\" class=\"tl_checkbox\" value=\"1\"> <label for=\"ctrl_preserve\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("do_not_truncate"), "html", null, true);
        echo "</label>
          </div>
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\" onclick=\"if(!confirm('";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import_confirm"), "html", null, true);
        echo "'))return false;Backend.getScrollOffset()\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("template_save"), "html", null, true);
        echo "</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  ";
        // line 86
        if ( !($context["hide_admin"] ?? $this->getContext($context, "hide_admin"))) {
            // line 87
            echo "    <fieldset class=\"tl_box";
            if (($context["has_admin"] ?? $this->getContext($context, "has_admin"))) {
                echo " collapsed";
            }
            echo "\">
      <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_create"), "html", null, true);
            echo "</legend>
      <div>
        <h3>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_create"), "html", null, true);
            echo "</h3>
        ";
            // line 91
            if ((isset($context["admin_error"]) || array_key_exists("admin_error", $context))) {
                // line 92
                echo "          <p class=\"tl_error\">";
                echo twig_escape_filter($this->env, ($context["admin_error"] ?? $this->getContext($context, "admin_error")), "html", null, true);
                echo "</p>
        ";
            } elseif (            // line 93
($context["has_admin"] ?? $this->getContext($context, "has_admin"))) {
                // line 94
                echo "          <p class=\"tl_confirm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_confirm"), "html", null, true);
                echo "</p>
        ";
            }
            // line 96
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_create_explain"), "html", null, true);
            echo "</p>
        ";
            // line 97
            if ( !($context["has_admin"] ?? $this->getContext($context, "has_admin"))) {
                // line 98
                echo "          <form method=\"post\">
            <div class=\"tl_formbody\">
              <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_admin\">
              <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"";
                // line 101
                echo twig_escape_filter($this->env, ($context["request_token"] ?? $this->getContext($context, "request_token")), "html", null, true);
                echo "\">
              <h4><label for=\"username\">";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_username"), "html", null, true);
                echo "</label></h4>
              ";
                // line 103
                if ((isset($context["admin_username_error"]) || array_key_exists("admin_username_error", $context))) {
                    // line 104
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_username_error"] ?? $this->getContext($context, "admin_username_error")), "html", null, true);
                    echo "</p>
              ";
                }
                // line 106
                echo "              <input type=\"text\" name=\"username\" id=\"username\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_username_value"]) || array_key_exists("admin_username_value", $context))) ? (_twig_default_filter(($context["admin_username_value"] ?? $this->getContext($context, "admin_username_value")))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"name\">";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_name"), "html", null, true);
                echo "</label></h4>
              <input type=\"text\" name=\"name\" id=\"name\" class=\"tl_text\" value=\"";
                // line 108
                echo twig_escape_filter($this->env, (((isset($context["admin_name_value"]) || array_key_exists("admin_name_value", $context))) ? (_twig_default_filter(($context["admin_name_value"] ?? $this->getContext($context, "admin_name_value")))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"email\">";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_email"), "html", null, true);
                echo "</label></h4>
              ";
                // line 110
                if ((isset($context["admin_email_error"]) || array_key_exists("admin_email_error", $context))) {
                    // line 111
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_email_error"] ?? $this->getContext($context, "admin_email_error")), "html", null, true);
                    echo "</p>
              ";
                }
                // line 113
                echo "              <input type=\"email\" name=\"email\" id=\"email\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_email_value"]) || array_key_exists("admin_email_value", $context))) ? (_twig_default_filter(($context["admin_email_value"] ?? $this->getContext($context, "admin_email_value")))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"password\">";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password"), "html", null, true);
                echo "</label></h4>
              ";
                // line 115
                if ((isset($context["admin_password_error"]) || array_key_exists("admin_password_error", $context))) {
                    // line 116
                    echo "                <p class=\"tl_error\">";
                    echo twig_escape_filter($this->env, ($context["admin_password_error"] ?? $this->getContext($context, "admin_password_error")), "html", null, true);
                    echo "</p>
              ";
                }
                // line 118
                echo "              <input type=\"password\" name=\"password\" id=\"password\" class=\"tl_text\" value=\"";
                echo twig_escape_filter($this->env, (((isset($context["admin_password_value"]) || array_key_exists("admin_password_value", $context))) ? (_twig_default_filter(($context["admin_password_value"] ?? $this->getContext($context, "admin_password_value")))) : ("")), "html", null, true);
                echo "\" required>
              <h4><label for=\"confirmation\">";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation"), "html", null, true);
                echo "</label></h4>
              <input type=\"password\" name=\"confirmation\" id=\"confirmation\" class=\"tl_text\" value=\"";
                // line 120
                echo twig_escape_filter($this->env, (((isset($context["admin_confirmation_value"]) || array_key_exists("admin_confirmation_value", $context))) ? (_twig_default_filter(($context["admin_confirmation_value"] ?? $this->getContext($context, "admin_confirmation_value")))) : ("")), "html", null, true);
                echo "\" required>
            </div>
            <div class=\"tl_formbody_submit\">
              <div class=\"tl_submit_container\">
                <button type=\"submit\" class=\"tl_submit\">";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_save"), "html", null, true);
                echo "</button>
              </div>
            </div>
          </form>
        ";
            }
            // line 129
            echo "      </div>
    </fieldset>
    ";
            // line 131
            if (($context["has_admin"] ?? $this->getContext($context, "has_admin"))) {
                // line 132
                echo "      <fieldset class=\"tl_box last\">
        <legend onclick=\"this.getParent().toggleClass('collapsed')\">";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("installation_complete"), "html", null, true);
                echo "</legend>
        <div>
          <h3>";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("congratulations"), "html", null, true);
                echo "</h3>
          <p class=\"tl_confirm\">";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("congratulations_explain"), "html", null, true);
                echo "</p>
          <p>";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("installation_complete_explain"), "html", null, true);
                echo "</p>
        </div>
      </fieldset>
      <p id=\"back_end\"><a href=\"";
                // line 140
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contao_backend", [], true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back_end"), "html", null, true);
                echo " ›</a></p>
    ";
            }
            // line 142
            echo "  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ContaoInstallationBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 142,  486 => 140,  480 => 137,  476 => 136,  472 => 135,  467 => 133,  464 => 132,  462 => 131,  458 => 129,  450 => 124,  443 => 120,  439 => 119,  434 => 118,  428 => 116,  426 => 115,  422 => 114,  417 => 113,  411 => 111,  409 => 110,  405 => 109,  401 => 108,  397 => 107,  392 => 106,  386 => 104,  384 => 103,  380 => 102,  376 => 101,  371 => 98,  369 => 97,  364 => 96,  358 => 94,  356 => 93,  351 => 92,  349 => 91,  345 => 90,  340 => 88,  333 => 87,  331 => 86,  320 => 80,  312 => 75,  308 => 73,  297 => 71,  293 => 70,  287 => 67,  283 => 66,  275 => 62,  269 => 60,  263 => 58,  261 => 57,  256 => 56,  254 => 55,  250 => 54,  245 => 52,  239 => 51,  235 => 49,  227 => 44,  220 => 39,  206 => 38,  203 => 37,  178 => 34,  164 => 33,  161 => 32,  144 => 31,  137 => 29,  131 => 28,  125 => 25,  122 => 24,  119 => 23,  102 => 22,  96 => 19,  91 => 16,  88 => 15,  82 => 13,  80 => 12,  75 => 11,  69 => 9,  67 => 8,  63 => 7,  58 => 5,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ContaoInstallation/layout.html.twig\" %}

{% block main %}
  <fieldset class=\"tl_tbox{% if sql_form is empty and sql_message is empty %} collapsed{% endif %}\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">{{ 'update_tables'|trans }}</legend>
    <div>
      <h3>{{ 'update_tables'|trans }}</h3>
      {% if sql_form is empty %}
        <p class=\"tl_confirm\">{{ 'update_tables_confirm'|trans }}</p>
      {% endif %}
      <p>{{ 'update_tables_explain'|trans|raw }}</p>
      {% if sql_message is not empty %}
        <div id=\"sql_message\">{{ sql_message|raw }}</div>
      {% endif %}
      {% if sql_form is not empty %}
        <form method=\"post\">
          <div class=\"tl_formbody\">
            <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_database_update\">
            <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"{{ request_token }}\">
            <div id=\"sql_wrapper\">
              <table id=\"sql_table\">
              {% for category, commands in sql_form %}
                {% if commands is not empty %}
                  <tr>
                    <td colspan=\"2\" class=\"tl_col_0\">{{ category|trans }}</td>
                  </tr>
                  <tr>
                    <td class=\"tl_col_1\"><input type=\"checkbox\" id=\"check_all_{{ loop.index }}\" class=\"tl_checkbox\" onclick=\"Backend.toggleCheckboxElements(this, '{{ category }}')\"></td>
                    <td class=\"tl_col_2\"><label for=\"check_all_{{ loop.index }}\" style=\"color:#a6a6a6\"><em>{{ 'select_all'|trans }}</em></label></td>
                  </tr>
                  {% for md5, command in commands %}
                    <tr>
                      <td class=\"tl_col_1\"><input type=\"checkbox\" name=\"sql[]\" id=\"sql_{{ loop.parent.loop.index }}_{{ loop.index }}\" class=\"tl_checkbox {{ category }}\" value=\"{{ md5 }}\"{% if 'DROP' not in command or 'DROP INDEX' in command %} checked=\"checked\"{% endif %}></td>
                      <td class=\"tl_col_2\"><pre><label for=\"sql_{{ loop.parent.loop.index }}_{{ loop.index }}\">{% if 'CREATE' in command %}{{ command|doctrine_pretty_query }}{% else %}{{ command }}{% endif %}</label></pre></td>
                    </tr>
                  {% endfor %}
                {% endif %}
              {% endfor %}
              </table>
            </div>
          </div>
          <div class=\"tl_formbody_submit\">
            <div class=\"tl_submit_container\">
              <button type=\"submit\" class=\"tl_submit\">{{ 'update_save'|trans }}</button>
            </div>
          </div>
        </form>
      {% endif %}
    </div>
  </fieldset>
  <fieldset class=\"tl_box{% if has_admin %} collapsed{% endif %}\">
    <legend onclick=\"this.getParent().toggleClass('collapsed')\">{{ 'template_import'|trans }}</legend>
    <div>
      <h3>{{ 'template_import'|trans }}</h3>
      {% if import_error is defined %}
        <p class=\"tl_error\">{{ import_error }}</p>
      {% elseif import_date is defined %}
        <p class=\"tl_confirm\">{{ 'imported_on'|trans|format(import_date) }}</p>
      {% else %}
        <p class=\"tl_info\">{{ 'import_data_will_be_deleted'|trans }}</p>
      {% endif %}
      <p>{{ 'template_import_explain'|trans|raw }}</p>
      <form method=\"post\">
        <div class=\"tl_formbody_submit\">
          <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_template_import\">
          <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"{{ request_token }}\">
          <h4><label for=\"template\">{{ 'templates'|trans }}</label></h4>
          <select name=\"template\" id=\"template\" class=\"tl_select\" required>
            <option value=\"\">-</option>
            {% for template in templates %}
              <option value=\"{{ template }}\">{{ template }}</option>
            {% endfor %}
          </select>
          <div class=\"tl_checkbox_container\" style=\"margin-top:3px\">
            <input type=\"checkbox\" name=\"preserve\" id=\"ctrl_preserve\" class=\"tl_checkbox\" value=\"1\"> <label for=\"ctrl_preserve\">{{ 'do_not_truncate'|trans }}</label>
          </div>
        </div>
        <div class=\"tl_formbody_submit\">
          <div class=\"tl_submit_container\">
            <button type=\"submit\" class=\"tl_submit\" onclick=\"if(!confirm('{{ 'import_confirm'|trans }}'))return false;Backend.getScrollOffset()\">{{ 'template_save'|trans }}</button>
          </div>
        </div>
      </form>
    </div>
  </fieldset>
  {% if not hide_admin %}
    <fieldset class=\"tl_box{% if has_admin %} collapsed{% endif %}\">
      <legend onclick=\"this.getParent().toggleClass('collapsed')\">{{ 'admin_create'|trans }}</legend>
      <div>
        <h3>{{ 'admin_create'|trans }}</h3>
        {% if admin_error is defined %}
          <p class=\"tl_error\">{{ admin_error }}</p>
        {% elseif has_admin %}
          <p class=\"tl_confirm\">{{ 'admin_confirm'|trans }}</p>
        {% endif %}
        <p>{{ 'admin_create_explain'|trans }}</p>
        {% if not has_admin %}
          <form method=\"post\">
            <div class=\"tl_formbody\">
              <input type=\"hidden\" name=\"FORM_SUBMIT\" value=\"tl_admin\">
              <input type=\"hidden\" name=\"REQUEST_TOKEN\" value=\"{{ request_token }}\">
              <h4><label for=\"username\">{{ 'admin_username'|trans }}</label></h4>
              {% if admin_username_error is defined %}
                <p class=\"tl_error\">{{ admin_username_error }}</p>
              {% endif %}
              <input type=\"text\" name=\"username\" id=\"username\" class=\"tl_text\" value=\"{{ admin_username_value|default }}\" required>
              <h4><label for=\"name\">{{ 'admin_name'|trans }}</label></h4>
              <input type=\"text\" name=\"name\" id=\"name\" class=\"tl_text\" value=\"{{ admin_name_value|default }}\" required>
              <h4><label for=\"email\">{{ 'admin_email'|trans }}</label></h4>
              {% if admin_email_error is defined %}
                <p class=\"tl_error\">{{ admin_email_error }}</p>
              {% endif %}
              <input type=\"email\" name=\"email\" id=\"email\" class=\"tl_text\" value=\"{{ admin_email_value|default }}\" required>
              <h4><label for=\"password\">{{ 'password'|trans }}</label></h4>
              {% if admin_password_error is defined %}
                <p class=\"tl_error\">{{ admin_password_error }}</p>
              {% endif %}
              <input type=\"password\" name=\"password\" id=\"password\" class=\"tl_text\" value=\"{{ admin_password_value|default }}\" required>
              <h4><label for=\"confirmation\">{{ 'confirmation'|trans }}</label></h4>
              <input type=\"password\" name=\"confirmation\" id=\"confirmation\" class=\"tl_text\" value=\"{{ admin_confirmation_value|default }}\" required>
            </div>
            <div class=\"tl_formbody_submit\">
              <div class=\"tl_submit_container\">
                <button type=\"submit\" class=\"tl_submit\">{{ 'admin_save'|trans }}</button>
              </div>
            </div>
          </form>
        {% endif %}
      </div>
    </fieldset>
    {% if has_admin %}
      <fieldset class=\"tl_box last\">
        <legend onclick=\"this.getParent().toggleClass('collapsed')\">{{ 'installation_complete'|trans }}</legend>
        <div>
          <h3>{{ 'congratulations'|trans }}</h3>
          <p class=\"tl_confirm\">{{ 'congratulations_explain'|trans }}</p>
          <p>{{ 'installation_complete_explain'|trans }}</p>
        </div>
      </fieldset>
      <p id=\"back_end\"><a href=\"{{ path('contao_backend', [], true) }}\">{{ 'back_end'|trans }} ›</a></p>
    {% endif %}
  {% endif %}
{% endblock %}
", "ContaoInstallationBundle::main.html.twig", "/var/www/ullrich-student/vendor/contao/installation-bundle/src/Resources/views/main.html.twig");
    }
}
