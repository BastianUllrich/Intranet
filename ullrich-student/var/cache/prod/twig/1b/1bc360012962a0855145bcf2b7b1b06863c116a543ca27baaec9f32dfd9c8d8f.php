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

/* ContaoCoreBundle:Error:layout.html.twig */
class __TwigTemplate_269373a029eb03974cb2b9e91bb0fc71117f82a7dee9d1fccffae127891246e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'message' => [$this, 'block_message'],
            'main' => [$this, 'block_main'],
            'hint' => [$this, 'block_hint'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 92
        echo "</head>
<body>
    <div id=\"header\">
        <div class=\"wrap\">
            <div class=\"header-logo\">
                <img width=\"200\" height=\"54\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1NzQuMDIiIGhlaWdodD0iMTU1LjkxIiB2aWV3Qm94PSIwIDAgNTc0LjAyIDE1NS45MSI+PHBhdGggZD0iTTI3MS4wMSAxMjEuNDRhMzEuNDUgMzEuNDUgMCAwIDEtMjMuMDctOS4zOGMtOC42NC04LjY1LTguNDItMTkuMzQtOC40Mi0zNC4xcy0uMjMtMjUuNDYgOC40Mi0zNC4xMmEzMS41IDMxLjUgMCAwIDEgMjMuMDctOS4zOGMxNiAwIDI4LjQ3IDkuMTMgMzEuNDggMjdoLTE3Yy0xLjY4LTYuODUtNi0xMi4xMi0xNC40MS0xMi4xMmExMy44NCAxMy44NCAwIDAgMC0xMC42OCA0LjQxYy0zLjI1IDMuNjQtNC4yMiA3LjctNC4yMiAyNC4xN3MxIDIwLjUxIDQuMjIgMjQuMTRhMTMuODMgMTMuODMgMCAwIDAgMTAuNjggNC40M2M4LjQxIDAgMTIuNzMtNS4yOCAxNC40MS0xMi4xMmgxN2MtMy4wMSAxNy45My0xNS42MiAyNy4wNy0zMS40OCAyNy4wN3ptODIuMjgtNy42OWMtMy44NCA0LjA5LTEwLjIxIDcuNjktMTkuNDYgNy42OXMtMTUuNS0zLjYxLTE5LjM1LTcuNjljLTUuNjQtNS44OC03LjA4LTEzLTcuMDgtMjQuMzhzMS40NC0xOC4zOCA3LjA4LTI0LjI4YzMuODUtNC4wOCAxMC4xLTcuNjYgMTkuMzUtNy42NnMxNS42MSAzLjU4IDE5LjQ2IDcuNjZjNS42NSA1Ljg5IDcuMDkgMTMgNy4wOSAyNC4yOHMtMS40MyAxOC40OS03LjA4IDI0LjM3em0tMTIuMTQtMzkuNTJhOS44NiA5Ljg2IDAgMCAwLTcuMzItMi43NiA5LjYzIDkuNjMgMCAwIDAtNy4yMiAyLjc2Yy0zLjIzIDMuMjUtMy42IDguNjQtMy42IDE1LjE0cy4zNyAxMiAzLjYgMTUuMjNhOS42IDkuNiAwIDAgMCA3LjIyIDIuNzkgOS44MyA5LjgzIDAgMCAwIDcuMzItMi43OWMzLjI1LTMuMjQgMy42MS04Ljc2IDMuNjEtMTUuMjNzLS4zNS0xMS44OS0zLjYtMTUuMTR6bTYzLjQxIDQ2LjQ5VjgyLjg3YzAtOC41My01LjQtMTEuNC0xMC4zMy0xMS40cy0xMC40NCAyLjg3LTEwLjQ0IDExLjR2MzcuODRoLTE1LjYzVjU4LjEyaDE1LjI4djUuNzhhMjEuMzMgMjEuMzMgMCAwIDEgMTUuNi02LjQ4YzYuMjYgMCAxMS4zIDIgMTQuNzggNS41MyA1LjA2IDUgNi4zNyAxMC45IDYuMzcgMTcuNzZ2NDB6bTQ1LjE2IDBjLTEyLjczIDAtMTguMTUtOS0xOC4xNS0xNy45MXYtMzFoLTYuNTZWNTkuOTVoNi42di0xOC41YzYuNTMgMCAxNS42My0zLjQzIDE1LjYzLTMuNDN2MjEuOTNoMTF2MTEuODloLTExdjMwYzAgMy42IDEuNjkgNS42NSA1LjQyIDUuNjVoNS42M3YxMy4yMXptNDkgMHYtNS40Yy00LjIgNC4yMi04LjE2IDYtMTUuMzcgNnMtMTIuMjUtMS43OS0xNi01LjU0YTIwLjA4IDIwLjA4IDAgMCAxLTUuMTYtMTQuMDZjMC0xMCA2Ljg0LTE4LjEyIDIxLjM4LTE4LjEyaDE0Ljc2di0zLjEzYzAtNi44My0zLjM0LTkuODYtMTEuNjMtOS44Ni02IDAtOC43NyAxLjQ1LTEyIDUuMThsLTEwLTkuNzNjNi4xMy02LjczIDEyLjE0LTguNjMgMjIuNTktOC42MyAxNy41NCAwIDI2LjY2IDcuNDMgMjYuNjYgMjIuMDl2NDEuMnptLS4zNy0yNi40MWgtMTIuMzRjLTUuNjUgMC04Ljc3IDIuNjMtOC43NyA3LjA2czIuODggNy4yMSA5IDcuMjFjNC4zMSAwIDcuMDktLjM0IDkuODQtMyAxLjY3LTEuNTcgMi4yNy00LjA3IDIuMjctNy45M3ptNjguNjMgMTkuNDVjLTMuODQgNC4wOS0xMC4yMSA3LjY5LTE5LjQ3IDcuNjlzLTE1LjUtMy42MS0xOS4zNC03LjY5Yy01LjY1LTUuODgtNy4wOC0xMy03LjA4LTI0LjM4czEuNDMtMTguMzggNy4wOC0yNC4yOGMzLjg0LTQuMDggMTAuMDktNy42NiAxOS4zNC03LjY2czE1LjYzIDMuNTggMTkuNDcgNy42NmM1LjY0IDUuODkgNy4wNyAxMyA3LjA3IDI0LjI4cy0xLjQ2IDE4LjQ4LTcuMSAyNC4zNnptLTEyLjEzLTM5LjUyYTkuOTEgOS45MSAwIDAgMC03LjM0LTIuNzYgOS41NiA5LjU2IDAgMCAwLTcuMiAyLjc2Yy0zLjI1IDMuMjUtMy42MiA4LjY0LTMuNjIgMTUuMTRzLjM3IDEyIDMuNjIgMTUuMjNhOS41MyA5LjUzIDAgMCAwIDcuMiAyLjc5IDkuODggOS44OCAwIDAgMCA3LjM0LTIuNzljMy4yMy0zLjI0IDMuNTktOC43NiAzLjU5LTE1LjIzcy0uNDMtMTEuOS0zLjYyLTE1LjE1eiIgZmlsbD0iI2Y0N2MwMCIvPjxwYXRoIGQ9Ik0xMS44Mi0uMDVBMTEuODEgMTEuODEgMCAwIDAgLjAxIDExLjc0djEzMi40MmExMS44MSAxMS44MSAwIDAgMCAxMS44MSAxMS43OWgxNTQuOTVhMTEuODEgMTEuODEgMCAwIDAgMTEuODItMTEuNzRWMTEuNzRBMTEuODEgMTEuODEgMCAwIDAgMTY2Ljc3LS4wNXoiIGZpbGw9IiNmZmYiLz48cGF0aCBkPSJNMTUuODggOTQuNTVjNSAyMy4yNiA5LjE2IDQ1LjQxIDIzLjczIDYxLjM1SDExLjgyQTExLjgxIDExLjgxIDAgMCAxIC4wMSAxNDQuMTZWMTEuNzRBMTEuODEgMTEuODEgMCAwIDEgMTEuODItLjA1SDMxLjlhNzYuOCA3Ni44IDAgMCAwLTEyLjc4IDE1LjFjLTE1Ljg5IDI0LjM1LTkuMzYgNTAuOS0zLjI0IDc5LjV6TTE2Ni43Ny0uMDVoLTMxLjUxYzcuNDYgNy40NiAxMy43NSAxNy4xMiAxOC41IDI5LjEzbC00Ny45IDEwLjExYy01LjI1LTEwLjA2LTEzLjIzLTE4LjQzLTI4Ljg0LTE1LjE0LTguNjEgMS44Mi0xNC4zMiA2LjY1LTE2Ljg1IDExLjk0LTMuMTEgNi41Mi00LjY0IDEzLjgzIDIuOCA0OC41N3MxMS44MiA0MC44IDE3LjMyIDQ1LjVjNC40NyAzLjggMTEuNjggNS45MSAyMC4yOSA0LjA5IDE1LjYyLTMuMjkgMTkuNDctMTQuMTYgMjAuMTUtMjUuNDdsNDcuOS0xMC4xMmMxLjEzIDI0Ljc4LTYuNTQgNDQtMjAuMDggNTcuMjloMTguMjJhMTEuODEgMTEuODEgMCAwIDAgMTEuODItMTEuNzRWMTEuNzRBMTEuODEgMTEuODEgMCAwIDAgMTY2Ljc3LS4wNXoiIGZpbGw9IiNmNDdjMDAiLz48L3N2Zz4K\" alt=\"Contao Open source CMS\"/>
            </div>
        </div>
    </div>
    <div id=\"content\">
        <div class=\"wrap\">
            <div class=\"error\">
                ";
        // line 104
        $this->displayBlock('message', $context, $blocks);
        // line 105
        echo "                <div class=\"block-error\">
                    <div class=\"inner\">
                        <div class=\"text-error\">
                            ";
        // line 108
        $this->displayBlock('main', $context, $blocks);
        // line 125
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"footer\">
        <div class=\"wrap\">
            ";
        // line 133
        $this->displayBlock('hint', $context, $blocks);
        // line 134
        echo "        </div>
    </div>
</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"generator\" content=\"Contao Open Source CMS\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("system/themes/flexible/fonts.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 91
        echo "    ";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["statusCode"] ?? null), "html", null, true);
        echo " Error";
    }

    // line 11
    public function block_style($context, array $blocks = [])
    {
        // line 12
        echo "            <style>
                html {
                    background: #fff;
                }
                body {
                    margin: 0;
                    padding: 0;
                    font: 1rem/1.25 Lato,sans-serif;
                    font-weight: 300;
                    color: #222;
                }
                @media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi) {
                    body {
                        font-family: \"Lato Retina\", Lato, sans-serif;
                    }
                }
                a, a:visited {
                    text-decoration: none;
                    color: #e4790f;
                }
                a:hover {
                    text-decoration: underline;
                }
                h1, h2, h3 {
                    font-weight: 300;
                }
                h1 {
                    margin: 0;
                    padding-bottom: 2%;
                    font-size: 3em;
                }
                h2, h3 {
                    font-size: 1.5em;
                }
                pre, code {
                    font: 300 .75rem/1.25 \"Roboto Mono\", monospace;
                }
                #header {
                    padding: 12px 0 10px;
                }
                #content {
                    padding: 3% 0;
                    background-color: #eee;
                }
                #footer {
                    font-size: 0.75em;
                    text-align: center;
                    padding: .5em 0;
                    color: #808080;
                }
                .wrap {
                    width: 60%;
                    margin: 0 auto;
                    padding: 1em;
                    overflow: hidden;
                }
                .header-logo {
                    display: inline-block;
                }
                .block-error {
                    margin-bottom: 20px;
                    background-color: #fff;
                    border: 1px solid #dfdfdf;
                    border-radius: 16px;
                    padding: 15px 30px 24px;
                    word-wrap: break-word;
                    overflow: hidden;
                }
                .block-error:before {
                    float: left;
                    content: \"</\";
                    font-size: 5em;
                    color: #ccc;
                }
                .block-error .inner {
                    padding-left: 13%;
                }
            </style>
       ";
    }

    // line 104
    public function block_message($context, array $blocks = [])
    {
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>";
    }

    // line 108
    public function block_main($context, array $blocks = [])
    {
        // line 109
        echo "                                ";
        $context["_block"] =         $this->renderBlock("matter", $context, $blocks);
        // line 110
        echo "                                ";
        if ( !twig_test_empty(twig_trim_filter(($context["_block"] ?? null)))) {
            // line 111
            echo "                                    <h2>";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["error"] ?? null), "matter", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "matter", []), "What's the matter?")) : ("What's the matter?")), "html", null, true);
            echo "</h2>
                                    ";
            // line 112
            echo ($context["_block"] ?? null);
            echo "
                                ";
        }
        // line 114
        echo "                                ";
        $context["_block"] =         $this->renderBlock("howToFix", $context, $blocks);
        // line 115
        echo "                                ";
        if ( !twig_test_empty(twig_trim_filter(($context["_block"] ?? null)))) {
            // line 116
            echo "                                    <h2>";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["error"] ?? null), "howToFix", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "howToFix", []), "How can I fix the issue?")) : ("How can I fix the issue?")), "html", null, true);
            echo "</h2>
                                    ";
            // line 117
            echo ($context["_block"] ?? null);
            echo "
                                ";
        }
        // line 119
        echo "                                ";
        $context["_block"] =         $this->renderBlock("explain", $context, $blocks);
        // line 120
        echo "                                ";
        if ( !twig_test_empty(twig_trim_filter(($context["_block"] ?? null)))) {
            // line 121
            echo "                                    <h3>";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["error"] ?? null), "more", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "more", []), "Tell me more, please")) : ("Tell me more, please")), "html", null, true);
            echo "</h3>
                                    ";
            // line 122
            echo ($context["_block"] ?? null);
            echo "
                                ";
        }
        // line 124
        echo "                            ";
    }

    // line 133
    public function block_hint($context, array $blocks = [])
    {
        echo sprintf((($this->getAttribute(($context["error"] ?? null), "hint", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["error"] ?? null), "hint", []), "To customize this notice, create a custom Twig template overriding @ContaoCore/Error/error.html.twig.")) : ("To customize this notice, create a custom Twig template overriding @ContaoCore/Error/error.html.twig.")), ($context["template"] ?? null));
    }

    public function getTemplateName()
    {
        return "ContaoCoreBundle:Error:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 133,  262 => 124,  257 => 122,  252 => 121,  249 => 120,  246 => 119,  241 => 117,  236 => 116,  233 => 115,  230 => 114,  225 => 112,  220 => 111,  217 => 110,  214 => 109,  211 => 108,  203 => 104,  121 => 12,  118 => 11,  111 => 7,  107 => 91,  105 => 11,  101 => 10,  95 => 7,  92 => 6,  89 => 5,  80 => 134,  78 => 133,  68 => 125,  66 => 108,  61 => 105,  59 => 104,  45 => 92,  43 => 5,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ContaoCoreBundle:Error:layout.html.twig", "/var/www/ullrich-student/vendor/contao/core-bundle/src/Resources/views/Error/layout.html.twig");
    }
}
