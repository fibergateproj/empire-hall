<?php

/* empirehall/template/extension/module/inspiration.twig */
class __TwigTemplate_b18ab61b9ea76ad9ad1c2a62578bdfb77509cef12d7262c204febaa5af0d561c extends Twig_Template
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
        if ((isset($context["inspirations"]) ? $context["inspirations"] : null)) {
            // line 2
            echo "\t<div class=\"main-inspiration\">
\t\t<div class=\"main-inspiration__subtitle\">";
            // line 3
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
\t\t<ul class=\"main-inspiration__nav-list\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inspirations"]) ? $context["inspirations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inspiration"]) {
                // line 6
                echo "\t\t\t\t<li class=\"main-inspiration__nav-item\">";
                echo $this->getAttribute($context["inspiration"], "name", array());
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspiration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t\t</ul>
\t\t<div class=\"main-inspiration__slider\">";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inspirations"]) ? $context["inspirations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inspiration"]) {
                // line 11
                echo "\t\t\t\t<div class=\"main-inspiration__slide\">
\t\t\t\t\t<div class=\"main-inspiration__slide-image\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"";
                // line 13
                echo $this->getAttribute($context["inspiration"], "image", array());
                echo "\" width=\"895\" height=\"604\" alt=\"";
                echo $this->getAttribute($context["inspiration"], "name", array());
                echo "\" class=\"lazyload\">
\t\t\t\t\t</div>";
                // line 15
                if ($this->getAttribute($context["inspiration"], "products", array())) {
                    // line 16
                    echo "\t\t\t\t\t\t<div class=\"main-inspiration__products\">";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["inspiration"], "products", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t<div class=\"product__item\">
\t\t\t\t\t\t\t\t\t<div class=\"product__title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 20
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 23
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"";
                        // line 24
                        echo $this->getAttribute($context["product"], "image", array());
                        echo "\" width=\"370\" height=\"370\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product__box\">";
                        // line 28
                        if (($this->getAttribute($context["product"], "price", array()) > 0)) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__price\">";
                            // line 30
                            if ($this->getAttribute($context["product"], "special", array())) {
                                // line 31
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__price-old\">";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__price-new\">";
                                // line 32
                                echo $this->getAttribute($context["product"], "special", array());
                                echo "</div>";
                            } else {
                                // line 34
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__price-new\">";
                                echo $this->getAttribute($context["product"], "price", array());
                                echo "</div>";
                            }
                            // line 36
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>";
                        } else {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__price\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__no-price-text\">";
                            // line 39
                            echo (isset($context["text_no_price"]) ? $context["text_no_price"] : null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__no-price-btm popup-open\" data-for=\"popup-callback\">";
                            // line 40
                            echo (isset($context["text_get_price"]) ? $context["text_get_price"] : null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"product__link\" href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#link-arrow\"></use></svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t\t\t\t\t\t</div>";
                }
                // line 51
                echo "\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspiration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t</div>
\t\t<a class=\"show-all\" href=\"";
            // line 54
            echo (isset($context["inspiration_link"]) ? $context["inspiration_link"] : null);
            echo "\">";
            echo (isset($context["text_all_combinations"]) ? $context["text_all_combinations"] : null);
            echo "</a>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/inspiration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 54,  145 => 53,  139 => 51,  136 => 49,  124 => 43,  119 => 40,  115 => 39,  112 => 38,  109 => 36,  104 => 34,  100 => 32,  95 => 31,  93 => 30,  91 => 29,  89 => 28,  81 => 24,  77 => 23,  69 => 20,  65 => 18,  61 => 17,  59 => 16,  57 => 15,  51 => 13,  47 => 11,  43 => 10,  40 => 8,  32 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if inspirations %}*/
/* 	<div class="main-inspiration">*/
/* 		<div class="main-inspiration__subtitle">{{ heading_title }}</div>*/
/* 		<ul class="main-inspiration__nav-list">*/
/* 			{% for inspiration in inspirations %}*/
/* 				<li class="main-inspiration__nav-item">{{ inspiration.name }}</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		<div class="main-inspiration__slider">*/
/* 			{% for inspiration in inspirations %}*/
/* 				<div class="main-inspiration__slide">*/
/* 					<div class="main-inspiration__slide-image">*/
/* 						<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="{{ inspiration.image }}" width="895" height="604" alt="{{ inspiration.name }}" class="lazyload">*/
/* 					</div>*/
/* 					{% if inspiration.products %}*/
/* 						<div class="main-inspiration__products">*/
/* 							{% for product in inspiration.products %}*/
/* 								<div class="product__item">*/
/* 									<div class="product__title">*/
/* 										<a href="{{ product.href }}">{{ product.name }}</a>*/
/* 									</div>*/
/* 									<div class="product__image">*/
/* 										<a href="{{ product.href }}">*/
/* 											<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="{{ product.image }}" width="370" height="370" alt="{{ product.name }}" class="lazyload">*/
/* 										</a>*/
/* 									</div>*/
/* 									<div class="product__box">*/
/* 										{% if product.price > 0 %}*/
/* 												<div class="product__price">*/
/* 													{% if product.special %}*/
/* 														<div class="product__price-old">{{ product.price }}</div>*/
/* 														<div class="product__price-new">{{ product.special }}</div>*/
/* 													{% else %}*/
/* 														<div class="product__price-new">{{ product.price }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 										{% else %}*/
/* 											<div class="product__price">*/
/* 												<div class="product__no-price-text">{{ text_no_price }}</div>*/
/* 												<div class="product__no-price-btm popup-open" data-for="popup-callback">{{ text_get_price }}</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										<a class="product__link" href="{{ product.href }}">*/
/* 											<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#link-arrow"></use></svg>*/
/* 										</a>*/
/* 									</div>*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 		</div>*/
/* 		<a class="show-all" href="{{ inspiration_link }}">{{ text_all_combinations }}</a>*/
/* 	</div>*/
/* {% endif %}*/
