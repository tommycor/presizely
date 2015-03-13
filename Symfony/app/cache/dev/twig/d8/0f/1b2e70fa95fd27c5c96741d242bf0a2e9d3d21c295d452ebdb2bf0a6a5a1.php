<?php

/* ::layout.html.twig */
class __TwigTemplate_d80f1b2e70fa95fd27c5c96741d242bf0a2e9d3d21c295d452ebdb2bf0a6a5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "


";
        // line 29
        echo "<!DOCTYPE html>
<html class=\"no-js\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Presizely - ";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Presizely\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.png\">
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/vendor.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
    ";
        // line 42
        $this->displayBlock('styles', $context, $blocks);
        // line 43
        echo "    <link id=\"primary_color_scheme\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/theme_presizely.css"), "html", null, true);
        echo "\">
    <noscript>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"bower_components/SlitSlider/css/styleNoJs.css\">
    </noscript>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/vendor/plugin.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/vendor/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/vendor/bootstrap-extend.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "        <div class=\"flash-notice\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"scripts/vendor/easybox/distrib.min.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/vendor/easybox/easybox.min.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/vendor/easybox/handlers.min.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/vendor/easybox/autoload.min.js\"></script>
    <script>
    \$(document).ready(function(\$) {
      \$('.gogoslide').click(function(){
        \$('.fake.s1').slider('setValue', 35);
        \$('.fake.s2').slider('setValue', 47);
        \$('.fake.s3').slider('setValue', 55);
        \$('.fake.s4').slider('setValue', 73);
        \$('.fake.s1').parent().next().children('.size_current').text('35 cm');
        \$('.fake.s2').parent().next().children('.size_current').text('47 cm');
        \$('.fake.s3').parent().next().children('.size_current').text('55 cm');
        \$('.fake.s4').parent().next().children('.size_current').text('73 cm');
        \$('.fake-svg').attr('src', 'img/svg/check.svg');
        \$('.search_button').trigger('click');
      });
    });
    </script>
  </body>
</html>";
    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
    }

    // line 42
    public function block_styles($context, array $blocks = array())
    {
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 58,  134 => 42,  129 => 34,  101 => 59,  98 => 58,  89 => 55,  86 => 54,  82 => 53,  76 => 50,  72 => 49,  68 => 48,  64 => 47,  56 => 43,  54 => 42,  50 => 41,  46 => 40,  42 => 39,  34 => 34,  27 => 29,  22 => 25,);
    }
}
