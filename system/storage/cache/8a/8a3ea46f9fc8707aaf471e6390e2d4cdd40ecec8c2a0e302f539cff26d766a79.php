<?php

/* empirehall/template/common/home.twig */
class __TwigTemplate_0871b8adc3f31c6a5427df2b9096e7c15c7ce3d66b132c08cbb2cd97f15fe930 extends Twig_Template
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
        // line 2
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        // line 3
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 4
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "

\t<div class=\"gift-card\">
\t\t<div class=\"gift-card__inner\">
\t\t\t<ul class=\"gift-card__tabs tabs-list\">
\t\t\t\t<li class=\"gift-card__tabs-item tabs-list__item\">
\t\t\t\t\t<a href=\"#gift-card-1\" class=\"tabs-list__link\">Мужская карта</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"gift-card__tabs-item tabs-list__item\">
\t\t\t\t\t<a href=\"#gift-card-2\" class=\"tabs-list__link\">Женская карта</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"gift-card__tabs-item tabs-list__item\">
\t\t\t\t\t<a href=\"#gift-card-3\" class=\"tabs-list__link\">Свадебный сертификат</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"gift-card__holder\">
\t\t\t\t<div id=\"gift-card-1\" class=\"gift-card__box tab\">
\t\t\t\t\t<div class=\"gift-card__slider\">
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-1.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-1.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-1.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-1.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gift-card__item\">
\t\t\t\t\t\t<div class=\"gift-card__content\">
\t\t\t\t\t\t\t<div class=\"main-subtitle\">номиналом от 0 до 50000 грн</div>
\t\t\t\t\t\t\t<div class=\"gift-card__title\">Подарочная карта для него</div>
\t\t\t\t\t\t\t<div class=\"gift-card__description\">Подарочная карта даёт право её владельцу единоразово приобрести товар на сумму номинала.</div>
\t\t\t\t\t\t\t<div class=\"gift-card__text\">При выборе товара на сумму меньше номинала - остаток не компенсируется, если сумма превышает номинал - требуется дополнительная оплата разницы.</div>
\t\t\t\t\t\t\t<ul class=\"gift-card__content-list\">
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта не подлежит обмену на денежный эквивалент.</li>
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта обмену и возврату не подлежит.</li>
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта бессрочная.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__form lazyload\" data-bg=\"catalog/view/theme/empirehall/data/gift-card-form-bg.webp\">
\t\t\t\t\t\t\t<div class=\"gift-card__form-inner\">
\t\t\t\t\t\t\t\t<div class=\"gift-card__form-title\">Приобрести карту</div>
\t\t\t\t\t\t\t\t<select name=\"select-sum\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>-- Сумма на карте --</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"gift-card__quantity\">
\t\t\t\t\t\t\t\t\t<div class=\"gift-card__quantity-title\">Количество:</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__minus\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"1\" viewBox=\"0 0 7 1\"><rect  class=\"cls-1\" width=\"7\" height=\"1\"/></svg></button>
\t\t\t\t\t\t\t\t\t\t<input class=\"product-quantity__input\" type=\"number\" name=\"product-quantity\" value=\"1\" min=\"1\" max=\"999\" readonly>
\t\t\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__plus\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"7\" viewBox=\"0 0 7 7\"><path d=\"M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z\" transform=\"translate(-1308 -347)\"/></svg></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"main-button\" href=\"#\">Добавить в список покупок </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"gift-card-2\" class=\"gift-card__box tab\">
\t\t\t\t\t<div class=\"gift-card__slider\">
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-2.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-2.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-2.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-2.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gift-card__item\">
\t\t\t\t\t\t<div class=\"gift-card__content\">
\t\t\t\t\t\t\t<div class=\"main-subtitle\">номиналом от 0 до 50000 грн</div>
\t\t\t\t\t\t\t<div class=\"gift-card__title\">Подарочная карта для нее</div>
\t\t\t\t\t\t\t<div class=\"gift-card__description\">Подарочная карта даёт право её владельцу единоразово приобрести товар на сумму номинала.</div>
\t\t\t\t\t\t\t<div class=\"gift-card__text\">При выборе товара на сумму меньше номинала - остаток не компенсируется, если сумма превышает номинал - требуется дополнительная оплата разницы.</div>
\t\t\t\t\t\t\t<ul class=\"gift-card__content-list\">
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта не подлежит обмену на денежный эквивалент.</li>
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта обмену и возврату не подлежит.</li>
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта бессрочная.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__form lazyload\" data-bg=\"catalog/view/theme/empirehall/data/gift-card-form-bg.webp\">
\t\t\t\t\t\t\t<div class=\"gift-card__form-inner\">
\t\t\t\t\t\t\t\t<div class=\"gift-card__form-title\">Приобрести карту</div>
\t\t\t\t\t\t\t\t<select name=\"select-sum\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>-- Сумма на карте --</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"gift-card__quantity\">
\t\t\t\t\t\t\t\t\t<div class=\"gift-card__quantity-title\">Количество:</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__minus\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"1\" viewBox=\"0 0 7 1\"><rect  class=\"cls-1\" width=\"7\" height=\"1\"/></svg></button>
\t\t\t\t\t\t\t\t\t\t<input class=\"product-quantity__input\" type=\"number\" name=\"product-quantity\" value=\"1\" min=\"1\" max=\"999\" readonly>
\t\t\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__plus\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"7\" viewBox=\"0 0 7 7\"><path d=\"M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z\" transform=\"translate(-1308 -347)\"/></svg></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"main-button\" href=\"#\">Добавить в список покупок </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"gift-card-3\" class=\"gift-card__box tab\">
\t\t\t\t\t<div class=\"gift-card__slider\">
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-3.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-3.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-3.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__slide\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/gift-card-img-3.webp\" width=\"1200\" height=\"600\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gift-card__item\">
\t\t\t\t\t\t<div class=\"gift-card__content\">
\t\t\t\t\t\t\t<div class=\"main-subtitle\">номиналом от 0 до 50000 грн</div>
\t\t\t\t\t\t\t<div class=\"gift-card__title\">Подарочная карта для них</div>
\t\t\t\t\t\t\t<div class=\"gift-card__description\">Подарочная карта даёт право её владельцу единоразово приобрести товар на сумму номинала.</div>
\t\t\t\t\t\t\t<div class=\"gift-card__text\">При выборе товара на сумму меньше номинала - остаток не компенсируется, если сумма превышает номинал - требуется дополнительная оплата разницы.</div>
\t\t\t\t\t\t\t<ul class=\"gift-card__content-list\">
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта не подлежит обмену на денежный эквивалент.</li>
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта обмену и возврату не подлежит.</li>
\t\t\t\t\t\t\t\t<li class=\"gift-card__content-item\">Подарочная карта бессрочная.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gift-card__form lazyload\" data-bg=\"catalog/view/theme/empirehall/data/gift-card-form-bg.webp\">
\t\t\t\t\t\t\t<div class=\"gift-card__form-inner\">
\t\t\t\t\t\t\t\t<div class=\"gift-card__form-title\">Приобрести карту</div>
\t\t\t\t\t\t\t\t<select name=\"select-sum\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected disabled>-- Сумма на карте --</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">1000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">100000</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">500000</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"gift-card__quantity\">
\t\t\t\t\t\t\t\t\t<div class=\"gift-card__quantity-title\">Количество:</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-quantity\">
\t\t\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__minus\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"1\" viewBox=\"0 0 7 1\"><rect  class=\"cls-1\" width=\"7\" height=\"1\"/></svg></button>
\t\t\t\t\t\t\t\t\t\t<input class=\"product-quantity__input\" type=\"number\" name=\"product-quantity\" value=\"1\" min=\"1\" max=\"999\" readonly>
\t\t\t\t\t\t\t\t\t\t<button class=\"product-quantity__button product-quantity__plus\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"7\" height=\"7\" viewBox=\"0 0 7 7\"><path d=\"M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z\" transform=\"translate(-1308 -347)\"/></svg></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"main-button\" href=\"#\">Добавить в список покупок </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
        // line 193
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        // line 194
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "empirehall/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 194,  214 => 193,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ content_top }}*/
/* {{ column_left }}*/
/* {{ column_right }}*/
/* */
/* 	<div class="gift-card">*/
/* 		<div class="gift-card__inner">*/
/* 			<ul class="gift-card__tabs tabs-list">*/
/* 				<li class="gift-card__tabs-item tabs-list__item">*/
/* 					<a href="#gift-card-1" class="tabs-list__link">Мужская карта</a>*/
/* 				</li>*/
/* 				<li class="gift-card__tabs-item tabs-list__item">*/
/* 					<a href="#gift-card-2" class="tabs-list__link">Женская карта</a>*/
/* 				</li>*/
/* 				<li class="gift-card__tabs-item tabs-list__item">*/
/* 					<a href="#gift-card-3" class="tabs-list__link">Свадебный сертификат</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<div class="gift-card__holder">*/
/* 				<div id="gift-card-1" class="gift-card__box tab">*/
/* 					<div class="gift-card__slider">*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-1.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-1.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-1.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-1.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="gift-card__item">*/
/* 						<div class="gift-card__content">*/
/* 							<div class="main-subtitle">номиналом от 0 до 50000 грн</div>*/
/* 							<div class="gift-card__title">Подарочная карта для него</div>*/
/* 							<div class="gift-card__description">Подарочная карта даёт право её владельцу единоразово приобрести товар на сумму номинала.</div>*/
/* 							<div class="gift-card__text">При выборе товара на сумму меньше номинала - остаток не компенсируется, если сумма превышает номинал - требуется дополнительная оплата разницы.</div>*/
/* 							<ul class="gift-card__content-list">*/
/* 								<li class="gift-card__content-item">Подарочная карта не подлежит обмену на денежный эквивалент.</li>*/
/* 								<li class="gift-card__content-item">Подарочная карта обмену и возврату не подлежит.</li>*/
/* 								<li class="gift-card__content-item">Подарочная карта бессрочная.</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="gift-card__form lazyload" data-bg="catalog/view/theme/empirehall/data/gift-card-form-bg.webp">*/
/* 							<div class="gift-card__form-inner">*/
/* 								<div class="gift-card__form-title">Приобрести карту</div>*/
/* 								<select name="select-sum">*/
/* 									<option value="" selected disabled>-- Сумма на карте --</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 								</select>*/
/* 								<div class="gift-card__quantity">*/
/* 									<div class="gift-card__quantity-title">Количество:</div>*/
/* 									<div class="product-quantity">*/
/* 										<button class="product-quantity__button product-quantity__minus"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="1" viewBox="0 0 7 1"><rect  class="cls-1" width="7" height="1"/></svg></button>*/
/* 										<input class="product-quantity__input" type="number" name="product-quantity" value="1" min="1" max="999" readonly>*/
/* 										<button class="product-quantity__button product-quantity__plus"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7"><path d="M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z" transform="translate(-1308 -347)"/></svg></button>*/
/* 									</div>*/
/* 								</div>*/
/* 								<a class="main-button" href="#">Добавить в список покупок </a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="gift-card-2" class="gift-card__box tab">*/
/* 					<div class="gift-card__slider">*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-2.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-2.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-2.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-2.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="gift-card__item">*/
/* 						<div class="gift-card__content">*/
/* 							<div class="main-subtitle">номиналом от 0 до 50000 грн</div>*/
/* 							<div class="gift-card__title">Подарочная карта для нее</div>*/
/* 							<div class="gift-card__description">Подарочная карта даёт право её владельцу единоразово приобрести товар на сумму номинала.</div>*/
/* 							<div class="gift-card__text">При выборе товара на сумму меньше номинала - остаток не компенсируется, если сумма превышает номинал - требуется дополнительная оплата разницы.</div>*/
/* 							<ul class="gift-card__content-list">*/
/* 								<li class="gift-card__content-item">Подарочная карта не подлежит обмену на денежный эквивалент.</li>*/
/* 								<li class="gift-card__content-item">Подарочная карта обмену и возврату не подлежит.</li>*/
/* 								<li class="gift-card__content-item">Подарочная карта бессрочная.</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="gift-card__form lazyload" data-bg="catalog/view/theme/empirehall/data/gift-card-form-bg.webp">*/
/* 							<div class="gift-card__form-inner">*/
/* 								<div class="gift-card__form-title">Приобрести карту</div>*/
/* 								<select name="select-sum">*/
/* 									<option value="" selected disabled>-- Сумма на карте --</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 								</select>*/
/* 								<div class="gift-card__quantity">*/
/* 									<div class="gift-card__quantity-title">Количество:</div>*/
/* 									<div class="product-quantity">*/
/* 										<button class="product-quantity__button product-quantity__minus"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="1" viewBox="0 0 7 1"><rect  class="cls-1" width="7" height="1"/></svg></button>*/
/* 										<input class="product-quantity__input" type="number" name="product-quantity" value="1" min="1" max="999" readonly>*/
/* 										<button class="product-quantity__button product-quantity__plus"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7"><path d="M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z" transform="translate(-1308 -347)"/></svg></button>*/
/* 									</div>*/
/* 								</div>*/
/* 								<a class="main-button" href="#">Добавить в список покупок </a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="gift-card-3" class="gift-card__box tab">*/
/* 					<div class="gift-card__slider">*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-3.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-3.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-3.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 						<div class="gift-card__slide">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/gift-card-img-3.webp" width="1200" height="600" alt="" class="lazyload">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="gift-card__item">*/
/* 						<div class="gift-card__content">*/
/* 							<div class="main-subtitle">номиналом от 0 до 50000 грн</div>*/
/* 							<div class="gift-card__title">Подарочная карта для них</div>*/
/* 							<div class="gift-card__description">Подарочная карта даёт право её владельцу единоразово приобрести товар на сумму номинала.</div>*/
/* 							<div class="gift-card__text">При выборе товара на сумму меньше номинала - остаток не компенсируется, если сумма превышает номинал - требуется дополнительная оплата разницы.</div>*/
/* 							<ul class="gift-card__content-list">*/
/* 								<li class="gift-card__content-item">Подарочная карта не подлежит обмену на денежный эквивалент.</li>*/
/* 								<li class="gift-card__content-item">Подарочная карта обмену и возврату не подлежит.</li>*/
/* 								<li class="gift-card__content-item">Подарочная карта бессрочная.</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="gift-card__form lazyload" data-bg="catalog/view/theme/empirehall/data/gift-card-form-bg.webp">*/
/* 							<div class="gift-card__form-inner">*/
/* 								<div class="gift-card__form-title">Приобрести карту</div>*/
/* 								<select name="select-sum">*/
/* 									<option value="" selected disabled>-- Сумма на карте --</option>*/
/* 									<option value="">1000</option>*/
/* 									<option value="">100000</option>*/
/* 									<option value="">500000</option>*/
/* 								</select>*/
/* 								<div class="gift-card__quantity">*/
/* 									<div class="gift-card__quantity-title">Количество:</div>*/
/* 									<div class="product-quantity">*/
/* 										<button class="product-quantity__button product-quantity__minus"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="1" viewBox="0 0 7 1"><rect  class="cls-1" width="7" height="1"/></svg></button>*/
/* 										<input class="product-quantity__input" type="number" name="product-quantity" value="1" min="1" max="999" readonly>*/
/* 										<button class="product-quantity__button product-quantity__plus"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7"><path d="M1308,350h7v1h-7v-1Zm3-3h1v7h-1v-7Z" transform="translate(-1308 -347)"/></svg></button>*/
/* 									</div>*/
/* 								</div>*/
/* 								<a class="main-button" href="#">Добавить в список покупок </a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* {{ content_bottom }}*/
/* {{ footer }}*/
