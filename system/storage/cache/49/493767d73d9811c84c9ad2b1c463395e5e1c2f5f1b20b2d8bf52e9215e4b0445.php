<?php

/* empirehall/template/common/language.twig */
class __TwigTemplate_4b9d182676a5fccb5885d1c6a7ed8d0b055d1b52ef72cd3ed2bca46c5257a601 extends Twig_Template
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
        // line 20
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 21
            echo "  <form class=\"language\" action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 23
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 24
                    echo "        <div class=\"language__current\">";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      <ul class=\"language__list\">";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 29
                if (($this->getAttribute($context["language"], "code", array()) != (isset($context["code"]) ? $context["code"] : null))) {
                    // line 30
                    echo "              <li class=\"language__item\">
                <a href=\"#\" class=\"language-select\" id=\"";
                    // line 31
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</a>
              </li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "      </ul>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 37
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>";
        }
    }

    public function getTemplateName()
    {
        return "empirehall/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 37,  62 => 35,  51 => 31,  48 => 30,  46 => 29,  42 => 28,  40 => 27,  31 => 24,  29 => 23,  25 => 22,  21 => 21,  19 => 20,);
    }
}
/* {# {% if languages|length > 1 %}*/
/* 	<form action="{{ action }}" class="language" id="form-language">*/
/* 		{% for language in languages %}*/
/* 			{% if language.code == code %}*/
/* 				<div class="language__current">{{ language.name }}</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		<ul class="language__list">*/
/* 			{% for language in languages %}*/
/* 				<li class="language__item">*/
/* 					<a href="#" class="language-select" id="{{ language.code }}">{{ language.name }}</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		<input type="hidden" name="code" value="" />*/
/* 		<input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* 	</form>*/
/* {% endif %} #}*/
/* */
/* {% if languages|length > 1 %}*/
/*   <form class="language" action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*     {% for language in languages %}*/
/*       {% if language.code == code %}*/
/*         <div class="language__current">{{ language.name }}</div>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*       <ul class="language__list">*/
/*         {% for language in languages %}*/
/*             {% if language.code != code %}*/
/*               <li class="language__item">*/
/*                 <a href="#" class="language-select" id="{{ language.code }}">{{ language.name }}</a>*/
/*               </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* {% endif %}*/
