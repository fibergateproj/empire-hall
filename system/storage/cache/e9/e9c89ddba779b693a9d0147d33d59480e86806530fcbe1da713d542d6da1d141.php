<?php

/* empirehall/template/extension/module/category_home.twig */
class __TwigTemplate_545444e4d058dcd751c7700694796a204b87f48bb2a34d40469e8b00792fb768 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "\t<div class=\"main-catalog lazyload\" data-bg=\"catalog/view/theme/empirehall/data/main-catalog-bg.webp\">
\t\t<div class=\"main-catalog__inner\">
\t\t\t<div class=\"main-subtitle main-subtitle--silver\">";
            // line 4
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
\t\t\t<div class=\"main-catalog__top\">
\t\t\t\t<div class=\"main-catalog__top-image\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/title-img.svg\" width=\"575\" height=\"51\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<a class=\"show-all\" href=\"";
            // line 9
            echo (isset($context["categories_link"]) ? $context["categories_link"] : null);
            echo "\">";
            echo (isset($context["text_all_categories"]) ? $context["text_all_categories"] : null);
            echo "</a>
\t\t\t</div>
\t\t\t<div class=\"main-catalog__list\">";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"main-catalog__item\">
\t\t\t\t\t\t<div class=\"main-catalog__image\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"";
                // line 15
                echo $this->getAttribute($context["category"], "image", array());
                echo "\" width=\"430\" height=\"524\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#catalog-decore\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main-catalog__title\">";
                // line 18
                echo $this->getAttribute($context["category"], "name", array());
                echo "</div>
\t\t\t\t\t</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t</div>
\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/category_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  56 => 18,  50 => 15,  44 => 13,  40 => 12,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* 	<div class="main-catalog lazyload" data-bg="catalog/view/theme/empirehall/data/main-catalog-bg.webp">*/
/* 		<div class="main-catalog__inner">*/
/* 			<div class="main-subtitle main-subtitle--silver">{{ heading_title }}</div>*/
/* 			<div class="main-catalog__top">*/
/* 				<div class="main-catalog__top-image">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/title-img.svg" width="575" height="51" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<a class="show-all" href="{{ categories_link }}">{{ text_all_categories }}</a>*/
/* 			</div>*/
/* 			<div class="main-catalog__list">*/
/* 				{% for category in categories %}*/
/* 					<a href="{{ category.href }}" class="main-catalog__item">*/
/* 						<div class="main-catalog__image">*/
/* 							<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="{{ category.image }}" width="430" height="524" alt="" class="lazyload">*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#catalog-decore"></use></svg>*/
/* 						</div>*/
/* 						<div class="main-catalog__title">{{ category.name }}</div>*/
/* 					</a>*/
/* 					{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
