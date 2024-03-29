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
class __TwigTemplate_4831e351dcfdb1bd4cd0d1d8e1d2625ceb9223b814410da4106c7e2645c369d9 extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoCoreBundle:Error:layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ContaoCoreBundle:Error:layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["language"] ?? $this->getContext($context, "language")), "html", null, true);
        echo "\">
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
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"200\" height=\"54.32\" viewBox=\"0 0 574.02 155.91\">
                    <path d=\"M271.01 121.44a31.45 31.45 0 0 1-23.07-9.38c-8.64-8.65-8.42-19.34-8.42-34.1s-.23-25.46 8.42-34.12a31.5 31.5 0 0 1 23.07-9.38c16 0 28.47 9.13 31.48 27h-17c-1.68-6.85-6-12.12-14.41-12.12a13.84 13.84 0 0 0-10.68 4.41c-3.25 3.64-4.22 7.7-4.22 24.17s1 20.51 4.22 24.14a13.83 13.83 0 0 0 10.68 4.43c8.41 0 12.73-5.28 14.41-12.12h17c-3.01 17.93-15.62 27.07-31.48 27.07zm82.28-7.69c-3.84 4.09-10.21 7.69-19.46 7.69s-15.5-3.61-19.35-7.69c-5.64-5.88-7.08-13-7.08-24.38s1.44-18.38 7.08-24.28c3.85-4.08 10.1-7.66 19.35-7.66s15.61 3.58 19.46 7.66c5.65 5.89 7.09 13 7.09 24.28s-1.43 18.49-7.08 24.37zm-12.14-39.52a9.86 9.86 0 0 0-7.32-2.76 9.63 9.63 0 0 0-7.22 2.76c-3.23 3.25-3.6 8.64-3.6 15.14s.37 12 3.6 15.23a9.6 9.6 0 0 0 7.22 2.79 9.83 9.83 0 0 0 7.32-2.79c3.25-3.24 3.61-8.76 3.61-15.23s-.35-11.89-3.6-15.14zm63.41 46.49V82.87c0-8.53-5.4-11.4-10.33-11.4s-10.44 2.87-10.44 11.4v37.84h-15.63V58.12h15.28v5.78a21.33 21.33 0 0 1 15.6-6.48c6.26 0 11.3 2 14.78 5.53 5.06 5 6.37 10.9 6.37 17.76v40zm45.16 0c-12.73 0-18.15-9-18.15-17.91v-31h-6.56V59.95h6.6v-18.5c6.53 0 15.63-3.43 15.63-3.43v21.93h11v11.89h-11v30c0 3.6 1.69 5.65 5.42 5.65h5.63v13.21zm49 0v-5.4c-4.2 4.22-8.16 6-15.37 6s-12.25-1.79-16-5.54a20.08 20.08 0 0 1-5.16-14.06c0-10 6.84-18.12 21.38-18.12h14.76v-3.13c0-6.83-3.34-9.86-11.63-9.86-6 0-8.77 1.45-12 5.18l-10-9.73c6.13-6.73 12.14-8.63 22.59-8.63 17.54 0 26.66 7.43 26.66 22.09v41.2zm-.37-26.41h-12.34c-5.65 0-8.77 2.63-8.77 7.06s2.88 7.21 9 7.21c4.31 0 7.09-.34 9.84-3 1.67-1.57 2.27-4.07 2.27-7.93zm68.63 19.45c-3.84 4.09-10.21 7.69-19.47 7.69s-15.5-3.61-19.34-7.69c-5.65-5.88-7.08-13-7.08-24.38s1.43-18.38 7.08-24.28c3.84-4.08 10.09-7.66 19.34-7.66s15.63 3.58 19.47 7.66c5.64 5.89 7.07 13 7.07 24.28s-1.46 18.48-7.1 24.36zm-12.13-39.52a9.91 9.91 0 0 0-7.34-2.76 9.56 9.56 0 0 0-7.2 2.76c-3.25 3.25-3.62 8.64-3.62 15.14s.37 12 3.62 15.23a9.53 9.53 0 0 0 7.2 2.79 9.88 9.88 0 0 0 7.34-2.79c3.23-3.24 3.59-8.76 3.59-15.23s-.43-11.9-3.62-15.15z\" fill=\"#f47c00\"/>
                    <path d=\"M11.82-.05A11.81 11.81 0 0 0 .01 11.74v132.42a11.81 11.81 0 0 0 11.81 11.79h154.95a11.81 11.81 0 0 0 11.82-11.74V11.74A11.81 11.81 0 0 0 166.77-.05z\" fill=\"#fff\"/>
                    <path d=\"M15.88 94.55c5 23.26 9.16 45.41 23.73 61.35H11.82A11.81 11.81 0 0 1 .01 144.16V11.74A11.81 11.81 0 0 1 11.82-.05H31.9a76.8 76.8 0 0 0-12.78 15.1c-15.89 24.35-9.36 50.9-3.24 79.5zM166.77-.05h-31.51c7.46 7.46 13.75 17.12 18.5 29.13l-47.9 10.11c-5.25-10.06-13.23-18.43-28.84-15.14-8.61 1.82-14.32 6.65-16.85 11.94-3.11 6.52-4.64 13.83 2.8 48.57s11.82 40.8 17.32 45.5c4.47 3.8 11.68 5.91 20.29 4.09 15.62-3.29 19.47-14.16 20.15-25.47l47.9-10.12c1.13 24.78-6.54 44-20.08 57.29h18.22a11.81 11.81 0 0 0 11.82-11.74V11.74A11.81 11.81 0 0 0 166.77-.05z\" fill=\"#f47c00\"/>
                </svg>
            </div>
        </div>
    </div>
    <div id=\"content\">
        <div class=\"wrap\">
            <div class=\"error\">
                ";
        // line 108
        $this->displayBlock('message', $context, $blocks);
        // line 109
        echo "                <div class=\"block-error\">
                    <div class=\"inner\">
                        <div class=\"text-error\">
                            ";
        // line 112
        $this->displayBlock('main', $context, $blocks);
        // line 135
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"footer\">
        <div class=\"wrap\">     
\t</div>
    </div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("system/themes/flexible/fonts.min.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 91
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["statusCode"] ?? $this->getContext($context, "statusCode")), "html", null, true);
        echo " Error";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

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
                    color: #000;
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_message($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 113
        echo "                                ";
        if (        $this->hasBlock("matter", $context, $blocks)) {
            // line 114
            echo "                                    ";
            $context["_block"] =             $this->renderBlock("matter", $context, $blocks);
            // line 115
            echo "                                    ";
            if ( !twig_test_empty(twig_trim_filter(($context["_block"] ?? $this->getContext($context, "_block"))))) {
                // line 116
                echo "                                        <h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("XPT.matter", [], "contao_exception"), "html", null, true);
                echo "</h2>
                                        ";
                // line 117
                echo ($context["_block"] ?? $this->getContext($context, "_block"));
                echo "
                                    ";
            }
            // line 119
            echo "                                ";
        }
        // line 120
        echo "                                ";
        if (        $this->hasBlock("howToFix", $context, $blocks)) {
            // line 121
            echo "                                    ";
            $context["_block"] =             $this->renderBlock("howToFix", $context, $blocks);
            // line 122
            echo "                                    ";
            if ( !twig_test_empty(twig_trim_filter(($context["_block"] ?? $this->getContext($context, "_block"))))) {
                // line 123
                echo "                                        <h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("XPT.howToFix", [], "contao_exception"), "html", null, true);
                echo "</h2>
                                        ";
                // line 124
                echo ($context["_block"] ?? $this->getContext($context, "_block"));
                echo "
                                    ";
            }
            // line 126
            echo "                                ";
        }
        // line 127
        echo "                                ";
        if (        $this->hasBlock("explain", $context, $blocks)) {
            // line 128
            echo "                                    ";
            $context["_block"] =             $this->renderBlock("explain", $context, $blocks);
            // line 129
            echo "                                    ";
            if ( !twig_test_empty(twig_trim_filter(($context["_block"] ?? $this->getContext($context, "_block"))))) {
                // line 130
                echo "                                        <h3>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("XPT.more", [], "contao_exception"), "html", null, true);
                echo "</h3>
                                        ";
                // line 131
                echo ($context["_block"] ?? $this->getContext($context, "_block"));
                echo "
                                    ";
            }
            // line 133
            echo "                                ";
        }
        // line 134
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  345 => 134,  342 => 133,  337 => 131,  332 => 130,  329 => 129,  326 => 128,  323 => 127,  320 => 126,  315 => 124,  310 => 123,  307 => 122,  304 => 121,  301 => 120,  298 => 119,  293 => 117,  288 => 116,  285 => 115,  282 => 114,  279 => 113,  270 => 112,  250 => 108,  162 => 12,  153 => 11,  134 => 7,  124 => 91,  122 => 11,  118 => 10,  112 => 7,  109 => 6,  100 => 5,  78 => 135,  76 => 112,  71 => 109,  69 => 108,  51 => 92,  49 => 5,  44 => 3,  41 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'contao_exception' %}
<!DOCTYPE html>
<html lang=\"{{ language }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <title>{% block title %}{{ statusCode }} Error{% endblock %}</title>
        <meta name=\"generator\" content=\"Contao Open Source CMS\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"{{ asset('system/themes/flexible/fonts.min.css') }}\">
        {% block style %}
            <style>
                html {
                    background: #fff;
                }
                body {
                    margin: 0;
                    padding: 0;
                    font: 1rem/1.25 Lato,sans-serif;
                    font-weight: 300;
                    color: #000;
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
       {% endblock %}
    {% endblock %}
</head>
<body>
    <div id=\"header\">
        <div class=\"wrap\">
            <div class=\"header-logo\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"200\" height=\"54.32\" viewBox=\"0 0 574.02 155.91\">
                    <path d=\"M271.01 121.44a31.45 31.45 0 0 1-23.07-9.38c-8.64-8.65-8.42-19.34-8.42-34.1s-.23-25.46 8.42-34.12a31.5 31.5 0 0 1 23.07-9.38c16 0 28.47 9.13 31.48 27h-17c-1.68-6.85-6-12.12-14.41-12.12a13.84 13.84 0 0 0-10.68 4.41c-3.25 3.64-4.22 7.7-4.22 24.17s1 20.51 4.22 24.14a13.83 13.83 0 0 0 10.68 4.43c8.41 0 12.73-5.28 14.41-12.12h17c-3.01 17.93-15.62 27.07-31.48 27.07zm82.28-7.69c-3.84 4.09-10.21 7.69-19.46 7.69s-15.5-3.61-19.35-7.69c-5.64-5.88-7.08-13-7.08-24.38s1.44-18.38 7.08-24.28c3.85-4.08 10.1-7.66 19.35-7.66s15.61 3.58 19.46 7.66c5.65 5.89 7.09 13 7.09 24.28s-1.43 18.49-7.08 24.37zm-12.14-39.52a9.86 9.86 0 0 0-7.32-2.76 9.63 9.63 0 0 0-7.22 2.76c-3.23 3.25-3.6 8.64-3.6 15.14s.37 12 3.6 15.23a9.6 9.6 0 0 0 7.22 2.79 9.83 9.83 0 0 0 7.32-2.79c3.25-3.24 3.61-8.76 3.61-15.23s-.35-11.89-3.6-15.14zm63.41 46.49V82.87c0-8.53-5.4-11.4-10.33-11.4s-10.44 2.87-10.44 11.4v37.84h-15.63V58.12h15.28v5.78a21.33 21.33 0 0 1 15.6-6.48c6.26 0 11.3 2 14.78 5.53 5.06 5 6.37 10.9 6.37 17.76v40zm45.16 0c-12.73 0-18.15-9-18.15-17.91v-31h-6.56V59.95h6.6v-18.5c6.53 0 15.63-3.43 15.63-3.43v21.93h11v11.89h-11v30c0 3.6 1.69 5.65 5.42 5.65h5.63v13.21zm49 0v-5.4c-4.2 4.22-8.16 6-15.37 6s-12.25-1.79-16-5.54a20.08 20.08 0 0 1-5.16-14.06c0-10 6.84-18.12 21.38-18.12h14.76v-3.13c0-6.83-3.34-9.86-11.63-9.86-6 0-8.77 1.45-12 5.18l-10-9.73c6.13-6.73 12.14-8.63 22.59-8.63 17.54 0 26.66 7.43 26.66 22.09v41.2zm-.37-26.41h-12.34c-5.65 0-8.77 2.63-8.77 7.06s2.88 7.21 9 7.21c4.31 0 7.09-.34 9.84-3 1.67-1.57 2.27-4.07 2.27-7.93zm68.63 19.45c-3.84 4.09-10.21 7.69-19.47 7.69s-15.5-3.61-19.34-7.69c-5.65-5.88-7.08-13-7.08-24.38s1.43-18.38 7.08-24.28c3.84-4.08 10.09-7.66 19.34-7.66s15.63 3.58 19.47 7.66c5.64 5.89 7.07 13 7.07 24.28s-1.46 18.48-7.1 24.36zm-12.13-39.52a9.91 9.91 0 0 0-7.34-2.76 9.56 9.56 0 0 0-7.2 2.76c-3.25 3.25-3.62 8.64-3.62 15.14s.37 12 3.62 15.23a9.53 9.53 0 0 0 7.2 2.79 9.88 9.88 0 0 0 7.34-2.79c3.23-3.24 3.59-8.76 3.59-15.23s-.43-11.9-3.62-15.15z\" fill=\"#f47c00\"/>
                    <path d=\"M11.82-.05A11.81 11.81 0 0 0 .01 11.74v132.42a11.81 11.81 0 0 0 11.81 11.79h154.95a11.81 11.81 0 0 0 11.82-11.74V11.74A11.81 11.81 0 0 0 166.77-.05z\" fill=\"#fff\"/>
                    <path d=\"M15.88 94.55c5 23.26 9.16 45.41 23.73 61.35H11.82A11.81 11.81 0 0 1 .01 144.16V11.74A11.81 11.81 0 0 1 11.82-.05H31.9a76.8 76.8 0 0 0-12.78 15.1c-15.89 24.35-9.36 50.9-3.24 79.5zM166.77-.05h-31.51c7.46 7.46 13.75 17.12 18.5 29.13l-47.9 10.11c-5.25-10.06-13.23-18.43-28.84-15.14-8.61 1.82-14.32 6.65-16.85 11.94-3.11 6.52-4.64 13.83 2.8 48.57s11.82 40.8 17.32 45.5c4.47 3.8 11.68 5.91 20.29 4.09 15.62-3.29 19.47-14.16 20.15-25.47l47.9-10.12c1.13 24.78-6.54 44-20.08 57.29h18.22a11.81 11.81 0 0 0 11.82-11.74V11.74A11.81 11.81 0 0 0 166.77-.05z\" fill=\"#f47c00\"/>
                </svg>
            </div>
        </div>
    </div>
    <div id=\"content\">
        <div class=\"wrap\">
            <div class=\"error\">
                {% block message %}<h1>{{ block('title') }}</h1>{% endblock %}
                <div class=\"block-error\">
                    <div class=\"inner\">
                        <div class=\"text-error\">
                            {% block main %}
                                {% if block('matter') is defined %}
                                    {% set _block = block('matter') %}
                                    {% if _block|trim is not empty %}
                                        <h2>{{ 'XPT.matter'|trans }}</h2>
                                        {{ _block|raw }}
                                    {% endif %}
                                {% endif %}
                                {% if block('howToFix') is defined %}
                                    {% set _block = block('howToFix') %}
                                    {% if _block|trim is not empty %}
                                        <h2>{{ 'XPT.howToFix'|trans }}</h2>
                                        {{ _block|raw }}
                                    {% endif %}
                                {% endif %}
                                {% if block('explain') is defined %}
                                    {% set _block = block('explain') %}
                                    {% if _block|trim is not empty %}
                                        <h3>{{ 'XPT.more'|trans }}</h3>
                                        {{ _block|raw }}
                                    {% endif %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"footer\">
        <div class=\"wrap\">     
\t</div>
    </div>
</body>
</html>
", "ContaoCoreBundle:Error:layout.html.twig", "/var/www/ullrich-student/app/Resources/ContaoCoreBundle/views/Error/layout.html.twig");
    }
}
