<?php

/* empirehall/template/extension/module/account.twig */
class __TwigTemplate_8feb8a1d0fa5d235b7e2da4ecab18f8322300755b981ae15bf086bf6af3564fb extends Twig_Template
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
        echo "<div class=\"area__sidebar\">
  <div class=\"area__box\">
    <div class=\"area__userinfo\">
      <div class=\"area__userinfo-avatar\">
        <img decoding=\"async\" src=\"front/dist/images/no-avatar.svg\" width=\"29\" height=\"29\" alt=\"";
        // line 5
        echo (isset($context["fullname"]) ? $context["fullname"] : null);
        echo "\">
      </div>
      <div class=\"area__userinfo-name\">";
        // line 7
        echo (isset($context["fullname"]) ? $context["fullname"] : null);
        echo "</div>
    </div>
  </div>
  <nav class=\"area__nav\">
    <ul class=\"area__nav-list\">
      <li class=\"area__nav-item";
        // line 12
        if (((isset($context["current_url"]) ? $context["current_url"] : null) == (isset($context["account"]) ? $context["account"] : null))) {
            echo " active";
        }
        echo "\">
        <a href=\"";
        // line 13
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
      </li>
      <li class=\"area__nav-item";
        // line 15
        if (((isset($context["current_url"]) ? $context["current_url"] : null) == (isset($context["order"]) ? $context["order"] : null))) {
            echo " active";
        }
        echo "\">
        <a href=\"";
        // line 16
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a>
      </li>
      <li class=\"area__nav-item";
        // line 18
        if (((isset($context["current_url"]) ? $context["current_url"] : null) == (isset($context["wishlist"]) ? $context["wishlist"] : null))) {
            echo " active";
        }
        echo "\">
        <a href=\"";
        // line 19
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a>
      </li>
      <li class=\"area__nav-item";
        // line 21
        if (((isset($context["current_url"]) ? $context["current_url"] : null) == (isset($context["password"]) ? $context["password"] : null))) {
            echo " active";
        }
        echo "\">
        <a href=\"";
        // line 22
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a>
      </li>
      <li class=\"area__nav-item";
        // line 24
        if (((isset($context["current_url"]) ? $context["current_url"] : null) == (isset($context["pdf"]) ? $context["pdf"] : null))) {
            echo " active";
        }
        echo "\">
        <a href=\"";
        // line 25
        echo (isset($context["pdf"]) ? $context["pdf"] : null);
        echo "\">";
        echo (isset($context["text_pdf"]) ? $context["text_pdf"] : null);
        echo "</a>
      </li>
      <li class=\"area__nav-item\">
        <a href=\"";
        // line 28
        echo (isset($context["logout"]) ? $context["logout"] : null);
        echo "\">";
        echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
        echo "</a>
      </li>
    </ul>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  96 => 25,  90 => 24,  83 => 22,  77 => 21,  70 => 19,  64 => 18,  57 => 16,  51 => 15,  44 => 13,  38 => 12,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div class="area__sidebar">*/
/*   <div class="area__box">*/
/*     <div class="area__userinfo">*/
/*       <div class="area__userinfo-avatar">*/
/*         <img decoding="async" src="front/dist/images/no-avatar.svg" width="29" height="29" alt="{{ fullname }}">*/
/*       </div>*/
/*       <div class="area__userinfo-name">{{ fullname }}</div>*/
/*     </div>*/
/*   </div>*/
/*   <nav class="area__nav">*/
/*     <ul class="area__nav-list">*/
/*       <li class="area__nav-item{% if current_url == account %} active{% endif %}">*/
/*         <a href="{{ account }}">{{ text_account }}</a>*/
/*       </li>*/
/*       <li class="area__nav-item{% if current_url == order %} active{% endif %}">*/
/*         <a href="{{ order }}">{{ text_order }}</a>*/
/*       </li>*/
/*       <li class="area__nav-item{% if current_url == wishlist %} active{% endif %}">*/
/*         <a href="{{ wishlist }}">{{ text_wishlist }}</a>*/
/*       </li>*/
/*       <li class="area__nav-item{% if current_url == password %} active{% endif %}">*/
/*         <a href="{{ password }}">{{ text_password }}</a>*/
/*       </li>*/
/*       <li class="area__nav-item{% if current_url == pdf %} active{% endif %}">*/
/*         <a href="{{ pdf }}">{{ text_pdf }}</a>*/
/*       </li>*/
/*       <li class="area__nav-item">*/
/*         <a href="{{ logout }}">{{ text_logout }}</a>*/
/*       </li>*/
/*     </ul>*/
/*   </nav>*/
/* </div>*/
