<?php

/* empirehall/template/error/not_found.twig */
class __TwigTemplate_68ef9422323dec0a56615ba659fa3925fdf9eb0793a94912a0e7eea29db3fa25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"page-error\">
  <div class=\"page-error__image\">
    <img decoding=\"async\" src=\"front/dist/data/error-image.png\" width=\"1016\" height=\"510\" alt=\"";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\">
  </div>
  <div class=\"page-error__title\">";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"page-error__text\">";
        // line 7
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</div>
  <a class=\"main-button\" href=\"";
        // line 8
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a>
</div>";
        // line 10
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "empirehall/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 8,  34 => 7,  30 => 6,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="page-error">*/
/*   <div class="page-error__image">*/
/*     <img decoding="async" src="front/dist/data/error-image.png" width="1016" height="510" alt="{{ heading_title }}">*/
/*   </div>*/
/*   <div class="page-error__title">{{ heading_title }}</div>*/
/*   <div class="page-error__text">{{ text_error }}</div>*/
/*   <a class="main-button" href="{{ continue }}">{{ button_continue }}</a>*/
/* </div>*/
/* {{ footer }}*/
