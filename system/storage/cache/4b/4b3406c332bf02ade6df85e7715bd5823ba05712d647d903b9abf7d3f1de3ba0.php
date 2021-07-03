<?php

/* empirehall/template/extension/module/slideshow.twig */
class __TwigTemplate_5175e20fe4bab5b3fa66ecd6e4841d0dec2537e78c7a83fc67352ef551798049 extends Twig_Template
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
        if ((isset($context["banners"]) ? $context["banners"] : null)) {
            // line 2
            echo "\t<div class=\"main-section\"> 
\t\t<div class=\"main-section__slider\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 5
                echo "\t\t\t\t<div class=\"main-section__slide\">
\t\t\t\t\t<div class=\"shadow\"></div>";
                // line 7
                if (($this->getAttribute($context["banner"], "title", array()) || $this->getAttribute($context["banner"], "description", array()))) {
                    // line 8
                    echo "\t\t\t\t\t\t<div class=\"main-section__content\">";
                    // line 9
                    if ($this->getAttribute($context["banner"], "title", array())) {
                        // line 10
                        echo "\t\t\t\t\t\t\t\t<div class=\"main-section__title\">";
                        echo $this->getAttribute($context["banner"], "title", array());
                        echo "</div>";
                    }
                    // line 12
                    if ($this->getAttribute($context["banner"], "description", array())) {
                        // line 13
                        echo "\t\t\t\t\t\t\t\t<div class=\"main-section__text\">";
                        echo $this->getAttribute($context["banner"], "description", array());
                        echo "</div>";
                    }
                    // line 15
                    echo "\t\t\t\t\t\t</div>";
                }
                // line 17
                if ($this->getAttribute($context["banner"], "link", array())) {
                    // line 18
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["banner"], "link", array());
                    echo "\"";
                    if (((isset($context["ee_tracking"]) ? $context["ee_tracking"] : null) && (isset($context["ee_promotion"]) ? $context["ee_promotion"] : null))) {
                        echo "onclick=\"ee_promotion.click('";
                        echo $this->getAttribute($context["banner"], "ee_banner_id", array());
                        echo "', '";
                        echo $this->getAttribute($context["banner"], "ee_position", array());
                        echo "')\"";
                    }
                    echo " class=\"main-section__button\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<svg viewBox=\"0 0 100 100\" style=\"display: block; width: 100%;\">
\t\t\t\t\t\t\t\t\t<path d=\"M 50,50 m 0,-49.5 a 49.5,49.5 0 1 1 0,99 a 49.5,49.5 0 1 1 0,-99\" stroke=\"#fff\" stroke-width=\"1\" fill-opacity=\"0\" ></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>";
                    // line 24
                    echo (isset($context["text_to_catalog"]) ? $context["text_to_catalog"] : null);
                    echo "
\t\t\t\t\t\t</a>";
                }
                // line 27
                echo "\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</div>
\t</div>";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  82 => 29,  76 => 27,  71 => 24,  54 => 18,  52 => 17,  49 => 15,  44 => 13,  42 => 12,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  28 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if banners %}*/
/* 	<div class="main-section"> */
/* 		<div class="main-section__slider">*/
/* 			{% for banner in banners %}*/
/* 				<div class="main-section__slide">*/
/* 					<div class="shadow"></div>*/
/* 					{% if ((banner.title) or (banner.description)) %}*/
/* 						<div class="main-section__content">*/
/* 							{% if banner.title %}*/
/* 								<div class="main-section__title">{{ banner.title }}</div>*/
/* 							{% endif %}*/
/* 							{% if banner.description %}*/
/* 								<div class="main-section__text">{{ banner.description }}</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					{% if banner.link %}*/
/* 						<a href="{{ banner.link }}" {% if ee_tracking and ee_promotion %}onclick="ee_promotion.click('{{ banner.ee_banner_id }}', '{{ banner.ee_position }}')"{% endif %} class="main-section__button">*/
/* 							<span>*/
/* 								<svg viewBox="0 0 100 100" style="display: block; width: 100%;">*/
/* 									<path d="M 50,50 m 0,-49.5 a 49.5,49.5 0 1 1 0,99 a 49.5,49.5 0 1 1 0,-99" stroke="#fff" stroke-width="1" fill-opacity="0" ></path>*/
/* 								</svg>*/
/* 							</span>*/
/* 							{{ text_to_catalog }}*/
/* 						</a>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* */
