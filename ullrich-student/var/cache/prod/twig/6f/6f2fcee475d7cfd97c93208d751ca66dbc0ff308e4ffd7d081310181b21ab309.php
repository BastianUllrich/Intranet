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

/* knp_menu.html.twig */
class __TwigTemplate_6cec9b37d6ee4ac0b0587cb150c3f6b7294ef097189bd3dec9c8b42e893c5585 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'compressed_root' => [$this, 'block_compressed_root'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = [])
    {
        // line 12
        ob_start(function () { return ''; });
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        $___internal_0c6c115a4b244fe90173b08414f07d7e32f0f52cd033e95ebd560804e0e3a6d5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_0c6c115a4b244fe90173b08414f07d7e32f0f52cd033e95ebd560804e0e3a6d5_);
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? null), "childrenAttributes", []);
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = [])
    {
        // line 23
        if ((($this->getAttribute(($context["item"] ?? null), "hasChildren", []) &&  !($this->getAttribute(($context["options"] ?? null), "depth", []) === 0)) && $this->getAttribute(($context["item"] ?? null), "displayChildren", []))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = [])
    {
        // line 33
        $context["currentOptions"] = ($context["options"] ?? null);
        // line 34
        $context["currentItem"] = ($context["item"] ?? null);
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? null), "depth", []))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["depth" => ($this->getAttribute(($context["currentOptions"] ?? null), "depth", []) - 1)]);
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? null), "matchingDepth", [])) && ($this->getAttribute(($context["options"] ?? null), "matchingDepth", []) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? null), "matchingDepth", []) - 1)]);
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? null), "children", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? null);
        // line 48
        $context["options"] = ($context["currentOptions"] ?? null);
    }

    // line 51
    public function block_item($context, array $blocks = [])
    {
        // line 52
        if ($this->getAttribute(($context["item"] ?? null), "displayed", [])) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "attribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute(($context["item"] ?? null), "attribute", [0 => "class"], "method")]) : ([]));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => $this->getAttribute(($context["options"] ?? null), "currentClass", [])]);
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => $this->getAttribute(($context["options"] ?? null), "matchingDepth", [])], "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", [])]);
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeFirst", [])) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => $this->getAttribute(($context["options"] ?? null), "firstClass", [])]);
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeLast", [])) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => $this->getAttribute(($context["options"] ?? null), "lastClass", [])]);
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? null), "hasChildren", []) &&  !($this->getAttribute(($context["options"] ?? null), "depth", []) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? null), "branch_class", [])) && $this->getAttribute(($context["item"] ?? null), "displayChildren", []))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => $this->getAttribute(($context["options"] ?? null), "branch_class", [])]);
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? null), "leaf_class", []))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => $this->getAttribute(($context["options"] ?? null), "leaf_class", [])]);
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? null), "attributes", []);
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? null));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "uri", [])) && ( !$this->getAttribute(($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method") || $this->getAttribute(($context["options"] ?? null), "currentAsLink", [])))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute(($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method")]) : ([]));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? null), "level", []))]);
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "childrenAttributes", []), ["class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")]);
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "uri", []), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? null), "linkAttributes", []));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? null), "labelAttributes", []));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = [])
    {
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", []) && $this->getAttribute(($context["item"] ?? null), "getExtra", [0 => "safe_label", 1 => false], "method"))) {
            echo $this->getAttribute(($context["item"] ?? null), "label", []);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "label", []), "html", null, true);
        }
    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 6,  282 => 5,  278 => 4,  266 => 3,  256 => 101,  245 => 99,  232 => 97,  223 => 92,  221 => 91,  219 => 90,  217 => 89,  213 => 86,  209 => 84,  207 => 83,  203 => 82,  200 => 81,  197 => 78,  195 => 77,  193 => 76,  190 => 73,  187 => 72,  184 => 71,  182 => 70,  179 => 69,  176 => 68,  173 => 66,  170 => 64,  168 => 63,  165 => 61,  163 => 60,  160 => 58,  158 => 57,  156 => 56,  154 => 55,  152 => 54,  150 => 52,  147 => 51,  143 => 48,  141 => 47,  124 => 44,  107 => 43,  104 => 41,  102 => 40,  99 => 37,  97 => 36,  95 => 34,  93 => 33,  90 => 31,  82 => 26,  77 => 25,  74 => 24,  72 => 23,  69 => 22,  65 => 19,  63 => 18,  60 => 17,  56 => 12,  51 => 13,  49 => 12,  46 => 11,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "knp_menu.html.twig", "/var/www/ullrich-student/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
