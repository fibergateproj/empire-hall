<?php

/* empirehall/template/account/register.twig */
class __TwigTemplate_c4065350b80687af07259b82a26c1b301449c26a052e66e03add8ba40986966b extends Twig_Template
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
<div class=\"head-block head-block--center\">
    <ol class=\"breadcrumb\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["counter"] => $context["breadcrumb"]) {
            // line 5
            echo "            ";
            if ((($context["counter"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) {
                // line 6
                echo "                <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <a itemprop=\"item\" href=\"";
                // line 7
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\"><span itemprop=\"name\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span></a>
                    <meta itemprop=\"position\" content=\"";
                // line 8
                echo ($context["counter"] + 1);
                echo "\" />
                </li>
            ";
            } else {
                // line 11
                echo "                <li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    <span itemprop=\"name\">";
                // line 12
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span>
                    <meta itemprop=\"position\" content=\"";
                // line 13
                echo ($context["counter"] + 1);
                echo "\" />
                </li>
            ";
            }
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ol>
    <div class=\"head-title\">";
        // line 18
        echo (isset($context["heading_title_reg"]) ? $context["heading_title_reg"] : null);
        echo "</div>
</div>
<div class=\"form-box\">
      ";
        // line 21
        echo (isset($context["social_login"]) ? $context["social_login"] : null);
        echo " 322
    <form action=\"";
        // line 22
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\">
        <div class=\"form-block\">
            <input class=\"main-input";
        // line 24
        if ((isset($context["error_full_name"]) ? $context["error_full_name"] : null)) {
            echo " error";
        }
        echo "\" type=\"text\" name=\"firstname\" value=\"";
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\">
            <div class=\"form-label\">";
        // line 25
        echo (isset($context["entry_full_name"]) ? $context["entry_full_name"] : null);
        echo "</div>
            ";
        // line 26
        if ((isset($context["error_full_name"]) ? $context["error_full_name"] : null)) {
            // line 27
            echo "                <p class=\"error\">";
            echo (isset($context["error_full_name"]) ? $context["error_full_name"] : null);
            echo "</p>
            ";
        }
        // line 29
        echo "        </div>
        <div class=\"form-block hidden\">
            <input class=\"main-input";
        // line 31
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            echo " error";
        }
        echo "\" type=\"text\" name=\"lastname\" value=\"";
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\">
            <div class=\"form-label\">";
        // line 32
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</div>
            ";
        // line 33
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 34
            echo "                <p class=\"error\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</p>
            ";
        }
        // line 36
        echo "        </div>
        <div class=\"form-block\">
            <input class=\"main-input";
        // line 38
        if (((isset($context["error_email"]) ? $context["error_email"] : null) || (isset($context["error_warning"]) ? $context["error_warning"] : null))) {
            echo " error";
        }
        echo "\" type=\"email\" name=\"email\" value=\"";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">
            <div class=\"form-label\">";
        // line 39
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</div>
            ";
        // line 40
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 41
            echo "                <p class=\"error\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</p>
            ";
        }
        // line 43
        echo "            ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 44
            echo "                <p class=\"error\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</p>
            ";
        }
        // line 46
        echo "        </div>
        <div class=\"form-block telephone-block\">
            <input class=\"main-input";
        // line 48
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            echo " error";
        }
        echo "\" type=\"tel\" name=\"telephone\" value=\"";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\">
            <div class=\"form-label\">";
        // line 49
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</div>
            ";
        // line 50
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 51
            echo "                <p class=\"error\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</p>
            ";
        }
        // line 53
        echo "        </div>
        <div class=\"form-block\">
            <input class=\"main-input";
        // line 55
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            echo " error";
        }
        echo "\" type=\"password\" name=\"password\" value=\"";
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">
            <div class=\"form-label\">";
        // line 56
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</div>
            ";
        // line 57
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 58
            echo "                <p class=\"error\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</p>
            ";
        }
        // line 60
        echo "        </div>
        <div class=\"form-block hidden\">
            <input class=\"main-input";
        // line 62
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            echo " error";
        }
        echo "\" type=\"password\" name=\"confirm\" value=\"";
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\">
            <div class=\"form-label\">";
        // line 63
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</div>
            <input type=\"hidden\" name=\"newsletter\" value=\"0\" />
            <input type=\"hidden\" name=\"agree\" value=\"1\" />
            ";
        // line 66
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 67
            echo "                <p class=\"error\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</p>
            ";
        }
        // line 69
        echo "        </div>
        <button type=\"submit\" class=\"main-button\">";
        // line 70
        echo (isset($context["entry_register_btn"]) ? $context["entry_register_btn"] : null);
        echo "</button>
        <a class=\"show-all\" id=\"open-login\" href=\"";
        // line 71
        echo (isset($context["login_page"]) ? $context["login_page"] : null);
        echo "\">";
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "</a>
    </form>
</div>

";
        // line 75
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "empirehall/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 75,  242 => 71,  238 => 70,  235 => 69,  229 => 67,  227 => 66,  221 => 63,  213 => 62,  209 => 60,  203 => 58,  201 => 57,  197 => 56,  189 => 55,  185 => 53,  179 => 51,  177 => 50,  173 => 49,  165 => 48,  161 => 46,  155 => 44,  152 => 43,  146 => 41,  144 => 40,  140 => 39,  132 => 38,  128 => 36,  122 => 34,  120 => 33,  116 => 32,  108 => 31,  104 => 29,  98 => 27,  96 => 26,  92 => 25,  84 => 24,  79 => 22,  75 => 21,  69 => 18,  66 => 17,  60 => 16,  54 => 13,  50 => 12,  47 => 11,  41 => 8,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="head-block head-block--center">*/
/*     <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">*/
/*         {% for counter, breadcrumb in breadcrumbs %}*/
/*             {% if counter + 1 < breadcrumbs|length %}*/
/*                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">*/
/*                     <a itemprop="item" href="{{ breadcrumb.href }}"><span itemprop="name">{{ breadcrumb.text }}</span></a>*/
/*                     <meta itemprop="position" content="{{ counter+1 }}" />*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">*/
/*                     <span itemprop="name">{{ breadcrumb.text }}</span>*/
/*                     <meta itemprop="position" content="{{ counter+1 }}" />*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ol>*/
/*     <div class="head-title">{{ heading_title_reg }}</div>*/
/* </div>*/
/* <div class="form-box">*/
/*       {{ social_login }} 322*/
/*     <form action="{{ action }}" method="post">*/
/*         <div class="form-block">*/
/*             <input class="main-input{% if error_full_name %} error{% endif %}" type="text" name="firstname" value="{{ firstname }}">*/
/*             <div class="form-label">{{ entry_full_name }}</div>*/
/*             {% if error_full_name %}*/
/*                 <p class="error">{{ error_full_name }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="form-block hidden">*/
/*             <input class="main-input{% if error_lastname %} error{% endif %}" type="text" name="lastname" value="{{ lastname }}">*/
/*             <div class="form-label">{{ entry_lastname }}</div>*/
/*             {% if error_lastname %}*/
/*                 <p class="error">{{ error_lastname }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="form-block">*/
/*             <input class="main-input{% if error_email or error_warning %} error{% endif %}" type="email" name="email" value="{{ email }}">*/
/*             <div class="form-label">{{ entry_email }}</div>*/
/*             {% if error_email %}*/
/*                 <p class="error">{{ error_email }}</p>*/
/*             {% endif %}*/
/*             {% if error_warning %}*/
/*                 <p class="error">{{ error_warning }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="form-block telephone-block">*/
/*             <input class="main-input{% if error_telephone %} error{% endif %}" type="tel" name="telephone" value="{{ telephone }}">*/
/*             <div class="form-label">{{ entry_telephone }}</div>*/
/*             {% if error_telephone %}*/
/*                 <p class="error">{{ error_telephone }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="form-block">*/
/*             <input class="main-input{% if error_password %} error{% endif %}" type="password" name="password" value="{{ password }}">*/
/*             <div class="form-label">{{ entry_password }}</div>*/
/*             {% if error_password %}*/
/*                 <p class="error">{{ error_password }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="form-block hidden">*/
/*             <input class="main-input{% if error_confirm %} error{% endif %}" type="password" name="confirm" value="{{ confirm }}">*/
/*             <div class="form-label">{{ entry_confirm }}</div>*/
/*             <input type="hidden" name="newsletter" value="0" />*/
/*             <input type="hidden" name="agree" value="1" />*/
/*             {% if error_confirm %}*/
/*                 <p class="error">{{ error_confirm }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*         <button type="submit" class="main-button">{{ entry_register_btn }}</button>*/
/*         <a class="show-all" id="open-login" href="{{ login_page }}">{{ entry_login }}</a>*/
/*     </form>*/
/* </div>*/
/* */
/* {{ footer }}*/
/* */
