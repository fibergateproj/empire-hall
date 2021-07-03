<?php

/* empirehall/template/extension/module/featured.twig */
class __TwigTemplate_a5f3e58bb1abf9754b3face3879282ab8b6ad32eb4007082e106f922975e7f24 extends Twig_Template
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
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 2
            echo "\t<div class=\"popular-products\">
\t\t<div class=\"main-subtitle\">";
            // line 3
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>";
            // line 5
            if (((isset($context["ee_tracking"]) ? $context["ee_tracking"] : null) && (isset($context["ee_impression"]) ? $context["ee_impression"] : null))) {
                // line 6
                echo "  <script type=\"text/javascript\"><!--
    \$(document).ready(function() {
      setIntervalEE(function() {
        var ee_data = JSON.parse('";
                // line 9
                echo (isset($context["ee_impression_data"]) ? $context["ee_impression_data"] : null);
                echo "');
        ee_data['url'] = window.location.href;
        ee_data['title'] = document.title;
        \$.ajax({
          url: 'index.php?route=extension/module/ee_tracking/listview',
          type: 'post',
          data: ee_data,
          dataType: 'json',
          success: function(json) {
            if (json) {
              console.log(json);
            }
          },";
                // line 22
                if ((isset($context["ee_impression_log"]) ? $context["ee_impression_log"] : null)) {
                    // line 23
                    echo "          error: function(xhr, exc, error) {
            \$.post('index.php?route=extension/module/ee_tracking/listviewlog', { 'error': error + ' (exc: ' + exc + ' status: ' + xhr.statusText + ')', 'url': window.location.href }, function( logs ) {
              console.log(logs);
            });
          }";
                }
                // line 29
                echo "        });
      },";
                // line 30
                if ((isset($context["ee_ga_callback"]) ? $context["ee_ga_callback"] : null)) {
                    echo (isset($context["ee_ga_callback"]) ? $context["ee_ga_callback"] : null);
                } else {
                    echo "0";
                }
                echo ",";
                if ((isset($context["ee_generate_cid"]) ? $context["ee_generate_cid"] : null)) {
                    echo (isset($context["ee_generate_cid"]) ? $context["ee_generate_cid"] : null);
                } else {
                    echo "0";
                }
                echo ");
    });
    //--></script>";
            }
            // line 34
            echo "            
\t\t<div class=\"popular-products__top\">
\t\t\t<div class=\"popular-products__title\">";
            // line 36
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</div>
\t\t\t<div class=\"popular-products__navigation\">
\t\t\t\t<div class=\"prev-arrow\"></div>
\t\t\t\t<div class=\"next-arrow\"></div>
\t\t\t\t<span class=\"popular-products__progress\"></span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"popular-products__slider\">";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 45
                echo "\t\t\t\t<div class=\"product__item\">
\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t<a href=\"";
                // line 47
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if (((isset($context["ee_tracking"]) ? $context["ee_tracking"] : null) && (isset($context["ee_click"]) ? $context["ee_click"] : null))) {
                    echo "onclick=\"ee_product.click('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "ee_position", array());
                    echo "', '";
                    echo (isset($context["ee_type"]) ? $context["ee_type"] : null);
                    echo "')\"";
                }
                echo ">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t<a href=\"";
                // line 50
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if (((isset($context["ee_tracking"]) ? $context["ee_tracking"] : null) && (isset($context["ee_click"]) ? $context["ee_click"] : null))) {
                    echo "onclick=\"ee_product.click('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "ee_position", array());
                    echo "', '";
                    echo (isset($context["ee_type"]) ? $context["ee_type"] : null);
                    echo "')\"";
                }
                echo ">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"";
                // line 51
                echo $this->getAttribute($context["product"], "image", array());
                echo "\" width=\"370\" height=\"370\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__box\">";
                // line 55
                if (($this->getAttribute($context["product"], "price", array()) > 0)) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t<div class=\"product__price\">";
                    // line 57
                    if ($this->getAttribute($context["product"], "special", array())) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product__price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product__price-new\">";
                        // line 59
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</div>";
                    } else {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product__price-new\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</div>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t\t\t</div>";
                } else {
                    // line 65
                    echo "\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t<div class=\"product__no-price-text\">";
                    // line 66
                    echo (isset($context["text_no_price"]) ? $context["text_no_price"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t<div class=\"product__no-price-btm popup-open\" data-for=\"popup-callback\">";
                    // line 67
                    echo (isset($context["text_get_price"]) ? $context["text_get_price"] : null);
                    echo "</div>
\t\t\t\t\t\t\t</div>";
                }
                // line 70
                echo "\t\t\t\t\t\t<a class=\"product__link\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"";
                if (((isset($context["ee_tracking"]) ? $context["ee_tracking"] : null) && (isset($context["ee_click"]) ? $context["ee_click"] : null))) {
                    echo "onclick=\"ee_product.click('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "ee_position", array());
                    echo "', '";
                    echo (isset($context["ee_type"]) ? $context["ee_type"] : null);
                    echo "')\"";
                }
                echo ">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#link-arrow\"></use></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t</div>
\t\t<a class=\"show-all\" href=\"";
            // line 77
            echo (isset($context["all_offers"]) ? $context["all_offers"] : null);
            echo "\">";
            echo (isset($context["text_all_prods"]) ? $context["text_all_prods"] : null);
            echo "</a>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 77,  194 => 76,  172 => 70,  167 => 67,  163 => 66,  160 => 65,  157 => 63,  152 => 61,  148 => 59,  143 => 58,  141 => 57,  139 => 56,  137 => 55,  131 => 51,  117 => 50,  99 => 47,  95 => 45,  91 => 44,  81 => 36,  77 => 34,  61 => 30,  58 => 29,  51 => 23,  49 => 22,  34 => 9,  29 => 6,  27 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if products %}*/
/* 	<div class="popular-products">*/
/* 		<div class="main-subtitle">{{ heading_title }}</div>*/
/* */
/* {% if ee_tracking and ee_impression %}*/
/*   <script type="text/javascript"><!--*/
/*     $(document).ready(function() {*/
/*       setIntervalEE(function() {*/
/*         var ee_data = JSON.parse('{{ ee_impression_data }}');*/
/*         ee_data['url'] = window.location.href;*/
/*         ee_data['title'] = document.title;*/
/*         $.ajax({*/
/*           url: 'index.php?route=extension/module/ee_tracking/listview',*/
/*           type: 'post',*/
/*           data: ee_data,*/
/*           dataType: 'json',*/
/*           success: function(json) {*/
/*             if (json) {*/
/*               console.log(json);*/
/*             }*/
/*           },*/
/*           {% if ee_impression_log %}*/
/*           error: function(xhr, exc, error) {*/
/*             $.post('index.php?route=extension/module/ee_tracking/listviewlog', { 'error': error + ' (exc: ' + exc + ' status: ' + xhr.statusText + ')', 'url': window.location.href }, function( logs ) {*/
/*               console.log(logs);*/
/*             });*/
/*           }*/
/*           {% endif %}*/
/*         });*/
/*       }, {% if ee_ga_callback %}{{ ee_ga_callback }}{% else %}0{% endif %}, {% if ee_generate_cid %}{{ ee_generate_cid }}{% else %}0{% endif %});*/
/*     });*/
/*     //--></script>*/
/* {% endif %}*/
/*             */
/* 		<div class="popular-products__top">*/
/* 			<div class="popular-products__title">{{ text_store }}</div>*/
/* 			<div class="popular-products__navigation">*/
/* 				<div class="prev-arrow"></div>*/
/* 				<div class="next-arrow"></div>*/
/* 				<span class="popular-products__progress"></span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="popular-products__slider">*/
/* 			{% for product in products %}*/
/* 				<div class="product__item">*/
/* 					<div class="product__title">*/
/* 						<a href="{{ product.href }}" {% if ee_tracking and ee_click %}onclick="ee_product.click('{{ product.product_id }}', '{{ product.ee_position }}', '{{ ee_type }}')"{% endif %}>{{ product.name }}</a>*/
/* 					</div>*/
/* 					<div class="product__image">*/
/* 						<a href="{{ product.href }}" {% if ee_tracking and ee_click %}onclick="ee_product.click('{{ product.product_id }}', '{{ product.ee_position }}', '{{ ee_type }}')"{% endif %}>*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="{{ product.image }}" width="370" height="370" alt="" class="lazyload">*/
/* 						</a>*/
/* 					</div>*/
/* 					<div class="product__box">*/
/* 						{% if product.price > 0 %}*/
/* 								<div class="product__price">*/
/* 									{% if product.special %}*/
/* 										<div class="product__price-old">{{ product.price }}</div>*/
/* 										<div class="product__price-new">{{ product.special }}</div>*/
/* 									{% else %}*/
/* 										<div class="product__price-new">{{ product.price }}</div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 						{% else %}*/
/* 							<div class="product__price">*/
/* 								<div class="product__no-price-text">{{ text_no_price }}</div>*/
/* 								<div class="product__no-price-btm popup-open" data-for="popup-callback">{{ text_get_price }}</div>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						<a class="product__link" href="{{ product.href }}" {% if ee_tracking and ee_click %}onclick="ee_product.click('{{ product.product_id }}', '{{ product.ee_position }}', '{{ ee_type }}')"{% endif %}>*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#link-arrow"></use></svg>*/
/* 						</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 		<a class="show-all" href="{{ all_offers }}">{{ text_all_prods }}</a>*/
/* 	</div>*/
/* {% endif %}*/
