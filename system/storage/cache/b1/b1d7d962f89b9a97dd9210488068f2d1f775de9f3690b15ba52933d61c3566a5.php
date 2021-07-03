<?php

/* empirehall/template/common/cart.twig */
class __TwigTemplate_e7b2a64a92642d17c19bebd98448e3e91928742c342d77b6ade970a80cceaa7a extends Twig_Template
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
        echo "<div class=\"basket-popup\">
\t<div class=\"basket-popup__close\">
\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t</div>
\t<div class=\"basket-popup__top\">
\t\t<div class=\"basket-popup__top-title\">";
        // line 6
        echo (isset($context["text_cart_list"]) ? $context["text_cart_list"] : null);
        echo "</div>
\t\t<div class=\"basket-popup__top-text\">";
        // line 7
        echo (isset($context["header_items"]) ? $context["header_items"] : null);
        echo "</div>
\t</div>
\t<div class=\"basket-popup__content\">
\t\t<div class=\"basket-block__list scroll-text mCustomScrollbar\">";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "\t\t\t\t<div class=\"basket-block__item\">
\t\t\t\t\t<div class=\"basket-block__delete\" onclick=\"cart.remove('";
            // line 13
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\">
\t\t\t\t\t\t<svg width=\"8\" height=\"8\" viewBox=\"0 0 8 8\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<rect width=\"0.905089\" height=\"10.4085\" transform=\"matrix(0.707104 -0.707109 0.707104 0.707109 0 0.640045)\"/>
\t\t\t\t\t\t\t<rect width=\"0.905089\" height=\"10.4085\" transform=\"matrix(0.707104 0.707109 -0.707104 0.707109 7.35938 0)\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"basket-block__image\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"";
            // line 20
            echo $this->getAttribute($context["product"], "image", array());
            echo "\" width=\"170\" height=\"170\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"lazyload\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"basket-block__main\">
\t\t\t\t\t\t<div class=\"basket-block__info\">
\t\t\t\t\t\t\t<div class=\"basket-block__title\"><a href=\"";
            // line 24
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>
\t\t\t\t\t\t\t<div class=\"basket-block__article\">";
            // line 26
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 28
                    echo $this->getAttribute($context["option"], "value", array());
                    echo " /";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 31
            echo (isset($context["text_cart_model"]) ? $context["text_cart_model"] : null);
            echo ":";
            echo $this->getAttribute($context["product"], "model", array());
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__minus incart_dec\" data-prod-id=\"";
            // line 34
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "\" data-quant=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"1\" viewBox=\"0 0 7 1\"><rect  class=\"cls-1\" width=\"7\" height=\"1\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<input class=\"product-quantity__input\" type=\"number\" name=\"quantity\" value=\"";
            // line 37
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" min=\"0\" max=\"999\" readonly>
\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__plus incart_inc\" data-prod-id=\"";
            // line 38
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "\" data-quant=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"7\" viewBox=\"0 0 7 7\"><path d=\"M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z\" transform=\"translate(-1308 -347)\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
            // line 43
            if (($this->getAttribute($context["product"], "total", array()) > 0)) {
                // line 44
                echo "\t\t\t\t\t\t\t<div class=\"basket-block__price\">";
                echo $this->getAttribute($context["product"], "total", array());
                echo "</div>";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t<div class=\"basket-block__price no-price\">";
                echo (isset($context["text_no_price"]) ? $context["text_no_price"] : null);
                echo "</div>";
            }
            // line 48
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t</div>
\t</div>
\t
\t<div class=\"basket-popup__bottom\">
\t\t<div class=\"basket-popup__bottom-inner\">";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 57
            echo "\t\t\t\t<div class=\"basket-popup__total\">
\t\t\t\t\t<div class=\"basket-popup__total-text\">";
            // line 58
            echo (isset($context["text_cart_total"]) ? $context["text_cart_total"] : null);
            echo ":</div>
\t\t\t\t\t<div class=\"basket-popup__total-price\">";
            // line 59
            echo $this->getAttribute($context["total"], "text", array());
            echo "</div>
\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        if ((isset($context["show_no_price"]) ? $context["show_no_price"] : null)) {
            // line 63
            echo "\t\t\t\t<div class=\"basket-popup__alert\">
\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#info-svg\"></use></svg>";
            // line 65
            echo (isset($context["text_manager"]) ? $context["text_manager"] : null);
            echo "
\t\t\t\t</div>";
        }
        // line 68
        echo "\t\t</div>
\t\t<a";
        // line 69
        if ( !(isset($context["products"]) ? $context["products"] : null)) {
            echo " style=\"display: none;\"";
        }
        echo "href=\"";
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"main-button main-button--black \">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a>
\t</div>
\t
</div>

<div id=\"basket_popup\" class=\"popup popup-add-basket\">
  <div class=\"popup__overlay\"></div>
  <div class=\"popup__holder\">
    <div class=\"popup__close\">
      <svg><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"/front/dist/images/sprite.svg#close\"></use></svg>
    </div>
    <div class=\"popup__content\">
      <div class=\"success-popup__title\">
        <svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"https://www.w3.org/2000/svg\">
          <path d=\"M6.66066 9.03769C6.35664 8.70605 5.83154 8.67838 5.49985 8.9824C5.16821 9.28643 5.14054 9.81152 5.44457 10.1432L9.61794 14.6759C9.78378 14.8417 9.97724 14.9522 10.1983 14.9522C10.1983 14.9522 10.1983 14.9522 10.2259 14.9522C10.4471 14.9522 10.6681 14.8693 10.8063 14.7035L21.3642 4.17337C21.6958 3.84174 21.6958 3.31659 21.3642 3.01256C21.0325 2.68093 20.5074 2.68093 20.2033 3.01256L10.2537 12.9346L6.66066 9.03769Z\" fill=\"url(#paint0_linear)\"/>
          <path d=\"M21.1708 10.1708C20.701 10.1708 20.3417 10.5301 20.3417 10.9999C20.3417 16.1406 16.1407 20.3417 11 20.3417C5.85928 20.3417 1.65829 16.1407 1.65829 11C1.65829 5.85933 5.85928 1.65829 11 1.65829C11.4699 1.65829 11.8291 1.29899 11.8291 0.829173C11.8291 0.359358 11.4698 0 11 0C4.94721 0 0 4.94721 0 11C0 17.0528 4.94721 22 11 22C17.0528 22 22 17.0528 22 11C21.9999 10.5301 21.6407 10.1708 21.1708 10.1708Z\" fill=\"url(#paint1_linear)\"/>
          <defs>
            <linearGradient id=\"paint0_linear\" x1=\"0.415094\" y1=\"11.8705\" x2=\"21.4472\" y2=\"11.8537\" gradientUnits=\"userSpaceOnUse\">
              <stop stop-color=\"#8F6D55\"/>
              <stop offset=\"1\" stop-color=\"#4D4444\"/>
            </linearGradient>
            <linearGradient id=\"paint1_linear\" x1=\"0.415094\" y1=\"11.8705\" x2=\"21.4472\" y2=\"11.8537\" gradientUnits=\"userSpaceOnUse\">
              <stop stop-color=\"#8F6D55\"/>
              <stop offset=\"1\" stop-color=\"#4D4444\"/>
            </linearGradient>
          </defs>
        </svg>
        <span class=\"span-mb-4 color-brown sans\">Товар добавлен в корзину</span>
      </div>
      <div class=\"success-popup__image\">
        <img src=\"/front/dist/images/logo.svg\" data-src=\"/front/dist/images/basket01-01.svg\" width=\"405\" height=\"315\" alt=\"\" class=\"lazyload\">
      </div>";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 103
            echo "          <div class=\"success-popup__text color-brown sans\">";
            echo (isset($context["text_cart_total"]) ? $context["text_cart_total"] : null);
            echo ":";
            echo $this->getAttribute($context["total"], "text", array());
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "      <br>
      <div class=\"success-popup__buttons\">
        <a class=\"submit-button-link sans popup__close\" style=\"position: inherit;\">
          <svg width=\"5\" height=\"8\" viewBox=\"0 0 5 8\" fill=\"none\" xmlns=\"https://www.w3.org/2000/svg\">
            <path d=\"M4.85353 3.64642L1.67155 0.46444C1.47628 0.269178 1.1597 0.269178 0.96444 0.46444C0.769177 0.659702 0.769177 0.976284 0.96444 1.17155L3.75231 4.00381L0.96444 6.8284C0.769177 7.02366 0.769177 7.34025 0.96444 7.53551C1.1597 7.73077 1.47628 7.73077 1.67155 7.53551L4.85353 4.35353C5.04879 4.15826 5.04879 3.84168 4.85353 3.64642Z\" fill=\"#525252\"/>
          </svg>
          Продолжить покупки
        </a>
        <a href=\"/index.php?route=checkout/step2checkout\" class=\"submit-button sans\">Оформить заказ</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "empirehall/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 105,  212 => 103,  208 => 102,  168 => 69,  165 => 68,  160 => 65,  157 => 63,  155 => 62,  147 => 59,  143 => 58,  140 => 57,  136 => 56,  130 => 51,  123 => 48,  118 => 46,  113 => 44,  111 => 43,  102 => 38,  98 => 37,  90 => 34,  82 => 31,  74 => 28,  70 => 27,  68 => 26,  62 => 24,  53 => 20,  43 => 13,  40 => 12,  36 => 11,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="basket-popup">*/
/* 	<div class="basket-popup__close">*/
/* 		<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 	</div>*/
/* 	<div class="basket-popup__top">*/
/* 		<div class="basket-popup__top-title">{{ text_cart_list }}</div>*/
/* 		<div class="basket-popup__top-text">{{ header_items }}</div>*/
/* 	</div>*/
/* 	<div class="basket-popup__content">*/
/* 		<div class="basket-block__list scroll-text mCustomScrollbar">*/
/* 			{% for product in products %}*/
/* 				<div class="basket-block__item">*/
/* 					<div class="basket-block__delete" onclick="cart.remove('{{ product.cart_id }}');">*/
/* 						<svg width="8" height="8" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">*/
/* 							<rect width="0.905089" height="10.4085" transform="matrix(0.707104 -0.707109 0.707104 0.707109 0 0.640045)"/>*/
/* 							<rect width="0.905089" height="10.4085" transform="matrix(0.707104 0.707109 -0.707104 0.707109 7.35938 0)"/>*/
/* 						</svg>*/
/* 					</div>*/
/* 					<div class="basket-block__image">*/
/* 						<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="{{ product.image }}" width="170" height="170" alt="{{ product.name }}" class="lazyload">*/
/* 					</div>*/
/* 					<div class="basket-block__main">*/
/* 						<div class="basket-block__info">*/
/* 							<div class="basket-block__title"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/* 							<div class="basket-block__article">*/
/* 								{% if product.option %}*/
/* 									{% for option in product.option %}*/
/* 										{{ option.value }} /*/
/* 									{% endfor %}*/
/* 								{% endif %}*/
/* 								{{ text_cart_model }}: {{ product.model }}*/
/* 							</div>*/
/* 							<div class="product-quantity">*/
/* 								<button class="product-quantity__button product-quantity__minus incart_dec" data-prod-id="{{ product.cart_id }}" data-quant="{{ product.quantity }}">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="7" height="1" viewBox="0 0 7 1"><rect  class="cls-1" width="7" height="1"/></svg>*/
/* 								</button>*/
/* 								<input class="product-quantity__input" type="number" name="quantity" value="{{ product.quantity }}" min="0" max="999" readonly>*/
/* 								<button class="product-quantity__button product-quantity__plus incart_inc" data-prod-id="{{ product.cart_id }}" data-quant="{{ product.quantity }}">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7"><path d="M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z" transform="translate(-1308 -347)"/></svg>*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% if product.total > 0 %}*/
/* 							<div class="basket-block__price">{{ product.total }}</div>*/
/* 						{% else %}*/
/* 							<div class="basket-block__price no-price">{{ text_no_price }}</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="basket-popup__bottom">*/
/* 		<div class="basket-popup__bottom-inner">*/
/* 			{% for total in totals %}*/
/* 				<div class="basket-popup__total">*/
/* 					<div class="basket-popup__total-text">{{ text_cart_total }}:</div>*/
/* 					<div class="basket-popup__total-price">{{ total.text }}</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 			{% if show_no_price %}*/
/* 				<div class="basket-popup__alert">*/
/* 					<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#info-svg"></use></svg>*/
/* 					{{ text_manager }}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		<a {% if not products %} style="display: none;" {% endif %}href="{{ checkout }}" class="main-button main-button--black ">{{ text_checkout }}</a>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* */
/* <div id="basket_popup" class="popup popup-add-basket">*/
/*   <div class="popup__overlay"></div>*/
/*   <div class="popup__holder">*/
/*     <div class="popup__close">*/
/*       <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/front/dist/images/sprite.svg#close"></use></svg>*/
/*     </div>*/
/*     <div class="popup__content">*/
/*       <div class="success-popup__title">*/
/*         <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="https://www.w3.org/2000/svg">*/
/*           <path d="M6.66066 9.03769C6.35664 8.70605 5.83154 8.67838 5.49985 8.9824C5.16821 9.28643 5.14054 9.81152 5.44457 10.1432L9.61794 14.6759C9.78378 14.8417 9.97724 14.9522 10.1983 14.9522C10.1983 14.9522 10.1983 14.9522 10.2259 14.9522C10.4471 14.9522 10.6681 14.8693 10.8063 14.7035L21.3642 4.17337C21.6958 3.84174 21.6958 3.31659 21.3642 3.01256C21.0325 2.68093 20.5074 2.68093 20.2033 3.01256L10.2537 12.9346L6.66066 9.03769Z" fill="url(#paint0_linear)"/>*/
/*           <path d="M21.1708 10.1708C20.701 10.1708 20.3417 10.5301 20.3417 10.9999C20.3417 16.1406 16.1407 20.3417 11 20.3417C5.85928 20.3417 1.65829 16.1407 1.65829 11C1.65829 5.85933 5.85928 1.65829 11 1.65829C11.4699 1.65829 11.8291 1.29899 11.8291 0.829173C11.8291 0.359358 11.4698 0 11 0C4.94721 0 0 4.94721 0 11C0 17.0528 4.94721 22 11 22C17.0528 22 22 17.0528 22 11C21.9999 10.5301 21.6407 10.1708 21.1708 10.1708Z" fill="url(#paint1_linear)"/>*/
/*           <defs>*/
/*             <linearGradient id="paint0_linear" x1="0.415094" y1="11.8705" x2="21.4472" y2="11.8537" gradientUnits="userSpaceOnUse">*/
/*               <stop stop-color="#8F6D55"/>*/
/*               <stop offset="1" stop-color="#4D4444"/>*/
/*             </linearGradient>*/
/*             <linearGradient id="paint1_linear" x1="0.415094" y1="11.8705" x2="21.4472" y2="11.8537" gradientUnits="userSpaceOnUse">*/
/*               <stop stop-color="#8F6D55"/>*/
/*               <stop offset="1" stop-color="#4D4444"/>*/
/*             </linearGradient>*/
/*           </defs>*/
/*         </svg>*/
/*         <span class="span-mb-4 color-brown sans">Товар добавлен в корзину</span>*/
/*       </div>*/
/*       <div class="success-popup__image">*/
/*         <img src="/front/dist/images/logo.svg" data-src="/front/dist/images/basket01-01.svg" width="405" height="315" alt="" class="lazyload">*/
/*       </div>*/
/*       {# <div class="success-popup__text color-brown sans">Общая сумма: 1200 UAH</div> #}*/
/*       {% for total in totals %}*/
/*           <div class="success-popup__text color-brown sans">{{ text_cart_total }}: {{ total.text }}</div>*/
/*       {% endfor %}*/
/*       <br>*/
/*       <div class="success-popup__buttons">*/
/*         <a class="submit-button-link sans popup__close" style="position: inherit;">*/
/*           <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="https://www.w3.org/2000/svg">*/
/*             <path d="M4.85353 3.64642L1.67155 0.46444C1.47628 0.269178 1.1597 0.269178 0.96444 0.46444C0.769177 0.659702 0.769177 0.976284 0.96444 1.17155L3.75231 4.00381L0.96444 6.8284C0.769177 7.02366 0.769177 7.34025 0.96444 7.53551C1.1597 7.73077 1.47628 7.73077 1.67155 7.53551L4.85353 4.35353C5.04879 4.15826 5.04879 3.84168 4.85353 3.64642Z" fill="#525252"/>*/
/*           </svg>*/
/*           Продолжить покупки*/
/*         </a>*/
/*         <a href="/index.php?route=checkout/step2checkout" class="submit-button sans">Оформить заказ</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
