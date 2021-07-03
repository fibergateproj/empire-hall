<?php

/* empirehall/template/common/search.twig */
class __TwigTemplate_b4d491cfdd1eb38aac114cbe6fee9e9f9ea3316665c7fedaf391ac85209628bb extends Twig_Template
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
        echo "<div id=\"search\" class=\"header-search\">
\t<div class=\"header-search__container\">
\t\t<label for=\"header-search-input\"  class=\"header-search__content\">
\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 4
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" id=\"header-search-input\">
\t\t\t<span class=\"search-btn\">
\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#search\"></use></svg>
\t\t\t</span>
\t\t\t<span class=\"search-text\">";
        // line 8
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</span>
\t\t</label>
\t\t<span class=\"icon-close\">
\t\t\t<svg class=\"\">
\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use>
\t\t\t</svg>
\t\t</span>
\t</div>
\t<div class=\"header-search__found\">
\t\t<div class=\"found-content mCustomScrollbar\">
\t\t\t<a href=\"/\" class=\"found-content__card\">
\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/order-image-1.webp\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"text\">набор столовый, 2 тарелки, пиала и чашка</div>
\t\t\t</a>
\t\t\t<a href=\"/\" class=\"found-content__card\">
\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/order-image-1.webp\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"text\">набор столовый, 2 тарелки, пиала и чашка</div>
\t\t\t</a>
\t\t\t<a href=\"/\" class=\"found-content__card\">
\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/order-image-1.webp\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"text\">набор столовый, 2 тарелки, пиала и чашка</div>
\t\t\t</a>
\t\t\t<a href=\"/\" class=\"found-content__card\">
\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/order-image-1.webp\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"text\">набор столовый, 2 тарелки, пиала и чашка</div>
\t\t\t</a>
\t\t</div>
\t\t<a href=\"/\" class=\"main-button\">Показать все результаты <svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#link-arrow\"></use></svg>
\t\t</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "empirehall/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div id="search" class="header-search">*/
/* 	<div class="header-search__container">*/
/* 		<label for="header-search-input"  class="header-search__content">*/
/* 			<input type="text" name="search" value="{{ search }}" id="header-search-input">*/
/* 			<span class="search-btn">*/
/* 				<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#search"></use></svg>*/
/* 			</span>*/
/* 			<span class="search-text">{{ text_search }}</span>*/
/* 		</label>*/
/* 		<span class="icon-close">*/
/* 			<svg class="">*/
/* 				<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use>*/
/* 			</svg>*/
/* 		</span>*/
/* 	</div>*/
/* 	<div class="header-search__found">*/
/* 		<div class="found-content mCustomScrollbar">*/
/* 			<a href="/" class="found-content__card">*/
/* 				<div class="img">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/order-image-1.webp" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="text">набор столовый, 2 тарелки, пиала и чашка</div>*/
/* 			</a>*/
/* 			<a href="/" class="found-content__card">*/
/* 				<div class="img">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/order-image-1.webp" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="text">набор столовый, 2 тарелки, пиала и чашка</div>*/
/* 			</a>*/
/* 			<a href="/" class="found-content__card">*/
/* 				<div class="img">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/order-image-1.webp" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="text">набор столовый, 2 тарелки, пиала и чашка</div>*/
/* 			</a>*/
/* 			<a href="/" class="found-content__card">*/
/* 				<div class="img">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/order-image-1.webp" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="text">набор столовый, 2 тарелки, пиала и чашка</div>*/
/* 			</a>*/
/* 		</div>*/
/* 		<a href="/" class="main-button">Показать все результаты <svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#link-arrow"></use></svg>*/
/* 		</a>*/
/* 	</div>*/
/* </div>*/
