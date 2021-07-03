<?php

/* empirehall/template/extension/module/manufacturer.twig */
class __TwigTemplate_6e7f61184dbee1740cfae095c7c534a9677a79de49d87f4f7489ea1071f32931 extends Twig_Template
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
        if ((isset($context["brands"]) ? $context["brands"] : null)) {
            // line 2
            echo "\t<div class=\"main-brands\">
\t\t<div class=\"main-brands__list\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 5
                echo "\t\t\t\t<div class=\"main-brands__item\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"";
                // line 6
                echo $this->getAttribute($context["brand"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["brand"], "name", array());
                echo "\" class=\"lazyload\">
\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/manufacturer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  31 => 6,  28 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if brands %}*/
/* 	<div class="main-brands">*/
/* 		<div class="main-brands__list">*/
/* 			{% for brand in brands %}*/
/* 				<div class="main-brands__item">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="{{ brand.image }}" alt="{{ brand.name }}" class="lazyload">*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
