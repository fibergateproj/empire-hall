<?php

/* empirehall/template/product/gift_ajax.twig */
class __TwigTemplate_eec700d18c19c3a436baf14c21cd47e2782bccd029017d6311568bd3e26cc4ce extends Twig_Template
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
<div class=\"gift-card__inner\">

    <ul class=\"gift-card__tabs\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "
            <li class=\"gift-card__tabs-item\">
                <a href=\"#\" data-id=\"";
            // line 8
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\"
                   class=\"";
            // line 9
            if (((isset($context["category_id_child"]) ? $context["category_id_child"] : null) == $this->getAttribute($context["category"], "category_id", array()))) {
                echo "active";
            }
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a>
            </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    </ul>

    <div class=\"gift-card__box\">
        <div class=\"gift-card__slider\">";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gift_banners"]) ? $context["gift_banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gift_banner"]) {
            // line 19
            echo "
            <div class=\"gift-card__slide\">
                <img decoding=\"async\" data-src=\"";
            // line 21
            echo $this->getAttribute($context["gift_banner"], "image", array());
            echo "\" width=\"1200\" height=\"600\" alt=\"";
            echo (isset($context["h1_child"]) ? $context["h1_child"] : null);
            echo "\" class=\"lazyload\">
            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
        <div class=\"gift-card__item\">
            <div class=\"gift-card__content\">
                <div class=\"main-subtitle\">";
        // line 27
        echo (isset($context["h12"]) ? $context["h12"] : null);
        echo "</div>
                <div class=\"gift-card__title\">";
        // line 28
        echo (isset($context["h1_child"]) ? $context["h1_child"] : null);
        echo "</div>";
        // line 29
        echo (isset($context["description_child"]) ? $context["description_child"] : null);
        echo "
            </div>
            <div class=\"gift-card__form\" style=\"background-image: url('/front/dist/data/gift-card-form-bg.png');\">
                <div class=\"gift-card__form-inner\">
                    <div class=\"gift-card__form-title\">";
        // line 33
        echo (isset($context["text_gift_cart_buy"]) ? $context["text_gift_cart_buy"] : null);
        echo "</div>";
        // line 34
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 35
            echo "                        <select name=\"select-sum\">
                            <option value=\"0\" selected disabled>";
            // line 36
            echo (isset($context["text_gift_summ"]) ? $context["text_gift_summ"] : null);
            echo "</option>";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                echo "                                <option value=\"";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        </select>
                        <div class=\"gift-card__quantity\">
                            <div class=\"gift-card__quantity-title\">";
            // line 42
            echo (isset($context["text_quantity"]) ? $context["text_quantity"] : null);
            echo "</div>
                            <div class=\"product-quantity\">
                                <button class=\"product-quantity__button product-quantity__minus\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"1\" viewBox=\"0 0 7 1\">
                                        <rect class=\"cls-1\" width=\"7\" height=\"1\"/>
                                    </svg>
                                </button>
                                <input class=\"product-quantity__input\" type=\"number\" name=\"product-quantity\" value=\"1\"
                                       min=\"1\" max=\"999\" readonly>
                                <button class=\"product-quantity__button product-quantity__plus\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"7\" viewBox=\"0 0 7 7\">
                                        <path d=\"M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z\"
                                              transform=\"translate(-1308 -347)\"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <a class=\"main-button buy_gift\" onclick=\"return false;\" href=\"#\">";
            // line 59
            echo (isset($context["text_gift_buy"]) ? $context["text_gift_buy"] : null);
            echo " </a>";
        } else {
            // line 62
            echo (isset($context["text_empty_gift"]) ? $context["text_empty_gift"] : null);
        }
        // line 65
        echo "
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    \$(document).ready(function () {
        \$('.product-quantity').numberPicker();
    })
</script>";
        // line 79
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "empirehall/template/product/gift_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  148 => 65,  145 => 62,  141 => 59,  121 => 42,  117 => 40,  107 => 38,  103 => 37,  100 => 36,  97 => 35,  95 => 34,  92 => 33,  85 => 29,  82 => 28,  78 => 27,  73 => 24,  63 => 21,  59 => 19,  55 => 18,  49 => 13,  37 => 9,  33 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="gift-card__inner">*/
/* */
/*     <ul class="gift-card__tabs">*/
/*         {% for category in categories %}*/
/* */
/*             <li class="gift-card__tabs-item">*/
/*                 <a href="#" data-id="{{ category.category_id }}"*/
/*                    class="{% if category_id_child == category.category_id %}active{% endif %}">{{ category.name }}</a>*/
/*             </li>*/
/* */
/*         {% endfor %}*/
/* */
/*     </ul>*/
/* */
/*     <div class="gift-card__box">*/
/*         <div class="gift-card__slider">*/
/*             {% for gift_banner in gift_banners %}*/
/* */
/*             <div class="gift-card__slide">*/
/*                 <img decoding="async" data-src="{{ gift_banner.image }}" width="1200" height="600" alt="{{ h1_child }}" class="lazyload">*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div class="gift-card__item">*/
/*             <div class="gift-card__content">*/
/*                 <div class="main-subtitle">{{ h12 }}</div>*/
/*                 <div class="gift-card__title">{{ h1_child }}</div>*/
/*                 {{ description_child }}*/
/*             </div>*/
/*             <div class="gift-card__form" style="background-image: url('/front/dist/data/gift-card-form-bg.png');">*/
/*                 <div class="gift-card__form-inner">*/
/*                     <div class="gift-card__form-title">{{ text_gift_cart_buy }}</div>*/
/*                     {% if products %}*/
/*                         <select name="select-sum">*/
/*                             <option value="0" selected disabled>{{ text_gift_summ }}</option>*/
/*                             {% for product in products %}*/
/*                                 <option value="{{ product.product_id }}">{{ product.price }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                         <div class="gift-card__quantity">*/
/*                             <div class="gift-card__quantity-title">{{ text_quantity }}</div>*/
/*                             <div class="product-quantity">*/
/*                                 <button class="product-quantity__button product-quantity__minus">*/
/*                                     <svg xmlns="http://www.w3.org/2000/svg" width="7" height="1" viewBox="0 0 7 1">*/
/*                                         <rect class="cls-1" width="7" height="1"/>*/
/*                                     </svg>*/
/*                                 </button>*/
/*                                 <input class="product-quantity__input" type="number" name="product-quantity" value="1"*/
/*                                        min="1" max="999" readonly>*/
/*                                 <button class="product-quantity__button product-quantity__plus">*/
/*                                     <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7">*/
/*                                         <path d="M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z"*/
/*                                               transform="translate(-1308 -347)"/>*/
/*                                     </svg>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <a class="main-button buy_gift" onclick="return false;" href="#">{{ text_gift_buy }} </a>*/
/*                     {% else %}*/
/* */
/*                         {{ text_empty_gift }}*/
/* */
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <script>*/
/*     $(document).ready(function () {*/
/*         $('.product-quantity').numberPicker();*/
/*     })*/
/* </script>*/
/* */
/* {{ footer }}*/
