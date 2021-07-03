<?php

/* empirehall/template/extension/module/home_benefits.twig */
class __TwigTemplate_5b8f07f81961932b68e0ff0d80a3e5954535032e75eb79221a7d12d9ba6bda4c extends Twig_Template
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
        if ((isset($context["triggers"]) ? $context["triggers"] : null)) {
            // line 2
            echo "\t<div class=\"main-catalog m-top lazyload\" data-bg=\"catalog/view/theme/empirehall/data/main-catalog-bg.webp\">
\t\t<div class=\"main-advantages__inner\">
\t\t\t<div class=\"main-subtitle main-subtitle--silver\">";
            // line 4
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
\t\t\t<div class=\"main-advantages__top\">
\t\t\t\t<div class=\"main-advantages__main-image\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/title-img.svg\" width=\"575\" height=\"51\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"main-advantages__navigation\">
\t\t\t\t\t<div class=\"prev-arrow slick-arrow\"><div class=\"popular-products__arrow popular-products__prev-arrow\"><svg viewBox=\"0 0 100 100\" style=\"display: block; width: 100%;\"><path d=\"M 50,50 m 0,-49.5 a 49.5,49.5 0 1 1 0,99 a 49.5,49.5 0 1 1 0,-99\" stroke=\"#C4C4C4\" stroke-width=\"1\" fill-opacity=\"0\"></path></svg></div></div>
\t\t\t\t\t<div class=\"next-arrow slick-arrow\"><div class=\"popular-products__arrow popular-products__next-arrow\"><svg viewBox=\"0 0 100 100\" style=\"display: block; width: 100%;\"><path d=\"M 50,50 m 0,-49.5 a 49.5,49.5 0 1 1 0,99 a 49.5,49.5 0 1 1 0,-99\" stroke=\"#C4C4C4\" stroke-width=\"1\" fill-opacity=\"0\"></path></svg></div></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"main-advantages__list\">";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["triggers"]) ? $context["triggers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["trigger"]) {
                // line 16
                echo "\t\t\t\t\t<div class=\"main-advantages__item\" style=\"background-image: url('data/advantages-bg.webp');\">
\t\t\t\t\t\t<div class=\"main-advantages__box\">
\t\t\t\t\t\t\t<div class=\"main-advantages__image\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"image/";
                // line 19
                echo $this->getAttribute($context["trigger"], "image", array());
                echo "\" width=\"80\" height=\"109\" alt=\"\" class=\"lazyload\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"main-advantages__title\">";
                // line 21
                echo $this->getAttribute($context["trigger"], "title", array());
                echo "</div>";
                // line 22
                if ($this->getAttribute($context["trigger"], "description", array())) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t<div class=\"main-advantages__text\">";
                    echo $this->getAttribute($context["trigger"], "description", array());
                    echo "</div>";
                }
                // line 25
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trigger'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t</div>
\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/home_benefits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  62 => 25,  57 => 23,  55 => 22,  52 => 21,  47 => 19,  42 => 16,  38 => 15,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if triggers %}*/
/* 	<div class="main-catalog m-top lazyload" data-bg="catalog/view/theme/empirehall/data/main-catalog-bg.webp">*/
/* 		<div class="main-advantages__inner">*/
/* 			<div class="main-subtitle main-subtitle--silver">{{ heading_title }}</div>*/
/* 			<div class="main-advantages__top">*/
/* 				<div class="main-advantages__main-image">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/title-img.svg" width="575" height="51" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="main-advantages__navigation">*/
/* 					<div class="prev-arrow slick-arrow"><div class="popular-products__arrow popular-products__prev-arrow"><svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-49.5 a 49.5,49.5 0 1 1 0,99 a 49.5,49.5 0 1 1 0,-99" stroke="#C4C4C4" stroke-width="1" fill-opacity="0"></path></svg></div></div>*/
/* 					<div class="next-arrow slick-arrow"><div class="popular-products__arrow popular-products__next-arrow"><svg viewBox="0 0 100 100" style="display: block; width: 100%;"><path d="M 50,50 m 0,-49.5 a 49.5,49.5 0 1 1 0,99 a 49.5,49.5 0 1 1 0,-99" stroke="#C4C4C4" stroke-width="1" fill-opacity="0"></path></svg></div></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="main-advantages__list">*/
/* 				{% for trigger in triggers %}*/
/* 					<div class="main-advantages__item" style="background-image: url('data/advantages-bg.webp');">*/
/* 						<div class="main-advantages__box">*/
/* 							<div class="main-advantages__image">*/
/* 								<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="image/{{ trigger.image }}" width="80" height="109" alt="" class="lazyload">*/
/* 							</div>*/
/* 							<div class="main-advantages__title">{{ trigger.title }}</div>*/
/* 							{% if trigger.description %}*/
/* 								<div class="main-advantages__text">{{ trigger.description }}</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
