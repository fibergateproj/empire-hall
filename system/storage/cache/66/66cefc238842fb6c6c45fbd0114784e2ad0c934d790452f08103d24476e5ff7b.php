<?php

/* empirehall/template/common/language.twig */
class __TwigTemplate_1fc66f449a54bd56a23c671fe4b384bd3cf818423ed3b11dc58478d9295a8872 extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 21
            echo "  <form class=\"language\" action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 23
                echo "      ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 24
                    echo "        <div class=\"language__current\">";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</div>
      ";
                }
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      <ul class=\"language__list\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 29
                echo "            ";
                if (($this->getAttribute($context["language"], "code", array()) != (isset($context["code"]) ? $context["code"] : null))) {
                    // line 30
                    echo "              <li class=\"language__item\">
                <a href=\"#\" class=\"language-select\" id=\"";
                    // line 31
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</a>
              </li>
            ";
                }
                // line 34
                echo "        ";
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
  </form>
";
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
        return array (  79 => 37,  75 => 35,  69 => 34,  61 => 31,  58 => 30,  55 => 29,  51 => 28,  48 => 27,  42 => 26,  36 => 24,  33 => 23,  29 => 22,  24 => 21,  22 => 20,  19 => 19,);
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
