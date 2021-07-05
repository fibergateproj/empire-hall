<?php

/* empirehall/template/common/footer.twig */
class __TwigTemplate_870c2fe73129526349995bfeb1a778d28a3cf113c7cf0f3792f6a626e5448f4a extends Twig_Template
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
        echo "﻿<footer class=\"footer\">
\t";
        // line 2
        if ((isset($context["menus"]) ? $context["menus"] : null)) {
            // line 3
            echo "\t\t<nav class=\"footer-nav\">
\t\t\t<ul class=\"footer-nav__list\">
\t\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "\t\t\t\t\t<li class=\"footer-nav__item\">
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo $this->getAttribute($context["item"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "name", array());
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t\t</ul>
\t\t</nav>
\t";
        }
        // line 13
        echo "\t<div class=\"footer-info\">
\t\t<div class=\"footer-info__inner\">
\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"";
        // line 16
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/logo-white.svg\" width=\"157\" height=\"28\" alt=\"\" class=\"lazyload\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"copyright\">";
        // line 20
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</div>
\t\t\t<ul class=\"socials\">
\t\t\t\t";
        // line 22
        if ((isset($context["instagram"]) ? $context["instagram"] : null)) {
            // line 23
            echo "\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo (isset($context["instagram"]) ? $context["instagram"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#instagram\"></use></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t";
        if ((isset($context["pinterest"]) ? $context["pinterest"] : null)) {
            // line 30
            echo "\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a href=\"";
            // line 31
            echo (isset($context["pinterest"]) ? $context["pinterest"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#pinterest\"></use></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t";
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            // line 37
            echo "\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a href=\"";
            // line 38
            echo (isset($context["facebook"]) ? $context["facebook"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#facebook\"></use></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t";
        if ((isset($context["youtube"]) ? $context["youtube"] : null)) {
            // line 44
            echo "\t\t\t\t\t<li class=\"socials__item\">
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo (isset($context["youtube"]) ? $context["youtube"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#youtube\"></use></svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</ul>
\t\t\t<div class=\"devs\">
\t\t\t\t<a  href=\"https://art-lemon.com/\" target=\"_blank\" class=\"devs\">Разработка:
\t\t\t\t\t<div class=\"devs__icon-box\">
\t\t\t\t\t\t<div class=\"devs__icon\">
\t\t\t\t\t\t\t<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 201.582 31.427\" style=\"enable-background:new 0 0 201.582 31.427;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<path d=\"M59.329,7.896v17.165h-5.15v-1.614c-1.133,1.304-2.815,2.094-5.115,2.094c-4.497,0-8.205-3.948-8.205-9.063
\t\t\t\t\t\t\t\t\t\tc0-5.115,3.708-9.063,8.205-9.063c2.3,0,3.982,0.79,5.115,2.094V7.896H59.329z M54.179,16.478c0-2.575-1.716-4.188-4.085-4.188
\t\t\t\t\t\t\t\t\t\tc-2.369,0-4.085,1.614-4.085,4.188c0,2.575,1.716,4.188,4.085,4.188C52.463,20.667,54.179,19.053,54.179,16.478z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M74.466,7.553v5.836c-2.128-0.343-5.15,0.515-5.15,3.914v7.759h-5.149V7.896h5.149v3.055
\t\t\t\t\t\t\t\t\t\tC70.004,8.651,72.304,7.553,74.466,7.553z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M84.97,12.839v6.076c0,1.476,1.27,1.614,3.536,1.476v4.669c-6.729,0.687-8.685-1.339-8.685-6.145v-6.076h-2.747V7.896
\t\t\t\t\t\t\t\t\t\th2.747V4.635l5.15-1.545v4.806h3.536v4.944H84.97z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M102.477,0h5.149v25.061h-5.149V0z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M121.186,20.941c1.407,0,2.609-0.549,3.296-1.304l4.119,2.369c-1.682,2.335-4.222,3.536-7.484,3.536
\t\t\t\t\t\t\t\t\t\tc-5.871,0-9.509-3.948-9.509-9.063c0-5.115,3.708-9.063,9.132-9.063c5.012,0,8.72,3.879,8.72,9.063
\t\t\t\t\t\t\t\t\t\tc0,0.721-0.069,1.408-0.206,2.06h-12.187C117.719,20.323,119.298,20.941,121.186,20.941z M124.344,14.693
\t\t\t\t\t\t\t\t\t\tc-0.549-1.991-2.094-2.712-3.639-2.712c-1.957,0-3.261,0.961-3.742,2.712H124.344z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M159.187,14.522v10.539h-5.15V14.968c0-1.717-0.824-2.815-2.472-2.815c-1.716,0-2.678,1.202-2.678,3.227v9.681h-5.15
\t\t\t\t\t\t\t\t\t\tV14.968c0-1.717-0.824-2.815-2.472-2.815c-1.717,0-2.678,1.202-2.678,3.227v9.681h-5.149V7.896h5.149v1.579
\t\t\t\t\t\t\t\t\t\tc0.79-1.167,2.3-2.06,4.6-2.06c2.025,0,3.536,0.824,4.497,2.266c0.961-1.373,2.54-2.266,4.978-2.266
\t\t\t\t\t\t\t\t\t\tC156.613,7.415,159.187,10.23,159.187,14.522z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M162.927,16.478c0-5.115,4.051-9.063,9.097-9.063c5.047,0,9.098,3.948,9.098,9.063c0,5.115-4.051,9.063-9.098,9.063
\t\t\t\t\t\t\t\t\t\tC166.979,25.541,162.927,21.594,162.927,16.478z M175.973,16.478c0-2.437-1.717-4.051-3.948-4.051
\t\t\t\t\t\t\t\t\t\tc-2.231,0-3.948,1.614-3.948,4.051c0,2.437,1.716,4.051,3.948,4.051C174.256,20.529,175.973,18.916,175.973,16.478z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M201.582,14.522v10.539h-5.15v-9.784c0-2.128-1.339-3.124-2.987-3.124c-1.888,0-3.193,1.099-3.193,3.536v9.372h-5.149
\t\t\t\t\t\t\t\t\t\tV7.896h5.149v1.614c0.927-1.27,2.644-2.094,4.909-2.094C198.629,7.415,201.582,9.887,201.582,14.522z\"></path>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#A9A9A9;\" d=\"M25.19,1.958H14.734C6.597,1.958,0,8.555,0,16.693v10.456c0,2.353,1.925,4.278,4.278,4.278h10.456
\t\t\t\t\t\t\t\t\tc8.138,0,14.734-6.597,14.734-14.734V6.237C29.469,3.884,27.543,1.958,25.19,1.958z\"></path>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"devs__icon-hover\">
\t\t\t\t\t\t\t<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 201.582 31.427\" style=\"enable-background:new 0 0 201.582 31.427;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<path d=\"M59.329,7.896v17.165h-5.15v-1.614c-1.133,1.304-2.815,2.094-5.115,2.094c-4.497,0-8.205-3.948-8.205-9.063
\t\t\t\t\t\t\t\t\t\tc0-5.115,3.708-9.063,8.205-9.063c2.3,0,3.982,0.79,5.115,2.094V7.896H59.329z M54.179,16.478c0-2.575-1.716-4.188-4.085-4.188
\t\t\t\t\t\t\t\t\t\tc-2.369,0-4.085,1.614-4.085,4.188c0,2.575,1.716,4.188,4.085,4.188C52.463,20.667,54.179,19.053,54.179,16.478z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M74.466,7.553v5.836c-2.128-0.343-5.15,0.515-5.15,3.914v7.759h-5.149V7.896h5.149v3.055
\t\t\t\t\t\t\t\t\t\tC70.004,8.651,72.304,7.553,74.466,7.553z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M84.97,12.839v6.076c0,1.476,1.27,1.614,3.536,1.476v4.669c-6.729,0.687-8.685-1.339-8.685-6.145v-6.076h-2.747V7.896
\t\t\t\t\t\t\t\t\t\th2.747V4.635l5.15-1.545v4.806h3.536v4.944H84.97z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M102.477,0h5.149v25.061h-5.149V0z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M121.186,20.941c1.407,0,2.609-0.549,3.296-1.304l4.119,2.369c-1.682,2.335-4.222,3.536-7.484,3.536
\t\t\t\t\t\t\t\t\t\tc-5.871,0-9.509-3.948-9.509-9.063c0-5.115,3.708-9.063,9.132-9.063c5.012,0,8.72,3.879,8.72,9.063
\t\t\t\t\t\t\t\t\t\tc0,0.721-0.069,1.408-0.206,2.06h-12.187C117.719,20.323,119.298,20.941,121.186,20.941z M124.344,14.693
\t\t\t\t\t\t\t\t\t\tc-0.549-1.991-2.094-2.712-3.639-2.712c-1.957,0-3.261,0.961-3.742,2.712H124.344z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M159.187,14.522v10.539h-5.15V14.968c0-1.717-0.824-2.815-2.472-2.815c-1.716,0-2.678,1.202-2.678,3.227v9.681h-5.15
\t\t\t\t\t\t\t\t\t\tV14.968c0-1.717-0.824-2.815-2.472-2.815c-1.717,0-2.678,1.202-2.678,3.227v9.681h-5.149V7.896h5.149v1.579
\t\t\t\t\t\t\t\t\t\tc0.79-1.167,2.3-2.06,4.6-2.06c2.025,0,3.536,0.824,4.497,2.266c0.961-1.373,2.54-2.266,4.978-2.266
\t\t\t\t\t\t\t\t\t\tC156.613,7.415,159.187,10.23,159.187,14.522z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M162.927,16.478c0-5.115,4.051-9.063,9.097-9.063c5.047,0,9.098,3.948,9.098,9.063c0,5.115-4.051,9.063-9.098,9.063
\t\t\t\t\t\t\t\t\t\tC166.979,25.541,162.927,21.594,162.927,16.478z M175.973,16.478c0-2.437-1.717-4.051-3.948-4.051
\t\t\t\t\t\t\t\t\t\tc-2.231,0-3.948,1.614-3.948,4.051c0,2.437,1.716,4.051,3.948,4.051C174.256,20.529,175.973,18.916,175.973,16.478z\"></path>
\t\t\t\t\t\t\t\t\t\t<path d=\"M201.582,14.522v10.539h-5.15v-9.784c0-2.128-1.339-3.124-2.987-3.124c-1.888,0-3.193,1.099-3.193,3.536v9.372h-5.149
\t\t\t\t\t\t\t\t\t\tV7.896h5.149v1.614c0.927-1.27,2.644-2.094,4.909-2.094C198.629,7.415,201.582,9.887,201.582,14.522z\"></path>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<path style=\"fill:#A9A9A9;\" d=\"M25.19,1.958H14.734C6.597,1.958,0,8.555,0,16.693v10.456c0,2.353,1.925,4.278,4.278,4.278h10.456
\t\t\t\t\t\t\t\t\tc8.138,0,14.734-6.597,14.734-14.734V6.237C29.469,3.884,27.543,1.958,25.19,1.958z\"></path>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"footer-subscribe\">
\t\t<form class=\"footer-subscribe__form\" id=\"subscribe-form\">
\t\t\t<div class=\"form-block\">
\t\t\t\t<input class=\"footer-subscribe__input\" type=\"email\" name=\"subscribe_email\" placeholder=\"";
        // line 125
        echo (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null);
        echo "\">
\t\t\t</div>
\t\t\t<button class=\"footer-subscribe__button\" type=\"submit\" id=\"subscribe-send\">
\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#subscribe-button\"></use></svg>
\t\t\t</button>
\t\t</form>
\t</div>
\t
</footer>
";
        // line 134
        if (((isset($context["ee_js_position"]) ? $context["ee_js_position"] : null) == 2)) {
            // line 135
            echo "<script src=\"catalog/view/javascript/ee_tracking.min.js?eetv=2.2.1";
            if ((isset($context["ee_js_version"]) ? $context["ee_js_version"] : null)) {
                echo ".";
                echo (isset($context["ee_js_version"]) ? $context["ee_js_version"] : null);
            }
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 137
        echo "<div class=\"popup popup-callback\">
\t<div class=\"popup__overlay\"></div>
\t<div class=\"popup__holder\">
\t\t<div class=\"popup__close\">
\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t</div>
\t\t<div class=\"popup__content\">
\t\t\t<div class=\"popup__title\">";
        // line 144
        echo (isset($context["text_callback_title"]) ? $context["text_callback_title"] : null);
        echo "</div>
\t\t\t<form class=\"popup__form\" id=\"callback-form\">
\t\t\t\t<div class=\"form-block\">
\t\t\t\t\t<input class=\"main-input\" type=\"text\" name=\"callback_name\">
\t\t\t\t\t<div class=\"form-label\">";
        // line 148
        echo (isset($context["text_form_name"]) ? $context["text_form_name"] : null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-block\">
\t\t\t\t\t<input class=\"main-input\" type=\"tel\" name=\"callback_phone\">
\t\t\t\t\t<div class=\"form-label\">";
        // line 152
        echo (isset($context["text_form_phone"]) ? $context["text_form_phone"] : null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"submit-button\" type=\"submit\" id=\"callback-send\">";
        // line 154
        echo (isset($context["text_callback_btn"]) ? $context["text_callback_btn"] : null);
        echo "</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<div class=\"popup popup-success\">
\t<div class=\"popup__overlay\"></div>
\t<div class=\"popup__holder\">
\t\t<div class=\"popup__close\">
\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t</div>
\t\t<div class=\"popup__content\">
\t\t\t<div class=\"success-popup\">
\t\t\t\t<div class=\"success-popup__image\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/success-popup-img.svg\" width=\"100\" height=\"100\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"success-popup__title\">";
        // line 171
        echo (isset($context["text_success_text"]) ? $context["text_success_text"] : null);
        echo "</div>
\t\t\t\t<div class=\"success-popup__text\">";
        // line 172
        echo (isset($context["text_subscribe_success2"]) ? $context["text_subscribe_success2"] : null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"popup popup-subscribe\">
\t<div class=\"popup__overlay\"></div>
\t<div class=\"popup__holder\">
\t\t<div class=\"popup__close\">
\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t</div>
\t\t<div class=\"popup__content\">
\t\t\t<div class=\"success-popup\">
\t\t\t\t<div class=\"success-popup__image\">
\t\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/data/subscribe-popup-img.svg\" width=\"116\" height=\"140\" alt=\"\" class=\"lazyload\">
\t\t\t\t</div>
\t\t\t\t<div class=\"success-popup__title\">";
        // line 189
        echo (isset($context["text_subscribe_success"]) ? $context["text_subscribe_success"] : null);
        echo "</div>
\t\t\t\t<div class=\"success-popup__text\">";
        // line 190
        echo (isset($context["text_subscribe_success2"]) ? $context["text_subscribe_success2"] : null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"popup popup-about\">
\t<div class=\"popup__overlay\"></div>
\t<div class=\"popup__holder popup__holder--about\">
\t\t<div class=\"popup__close\">
\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t</div>
\t\t<div class=\"about-popup\" style=\"background-image: url('data/about-popup-image.webp')\">
\t\t\t<div class=\"about-popup__inner\">
\t\t\t\t<div class=\"about-popup__box\">
\t\t\t\t\t<div class=\"about-popup__title\">Empire Hall collections 2019</div>
\t\t\t\t\t<div class=\"about-popup__text\">Мы создаем украшения для тех, кто не боится быть собой и умеет действовать решительно.</div>
\t\t\t\t\t<a class=\"main-button\" href=\"#\">В каталог</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 214
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "


<div class=\"popup popup-video\">
\t<div class=\"popup__overlay\"></div>
\t<div class=\"popup__holder popup__holder--video\">
\t\t<div class=\"popup__close\">
\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t</div>
\t\t<div class=\"popup__content\">
\t\t\t<div class=\"video-popup\">
\t\t\t\t<lite-youtube videoid=\"IY16RdmgT_g\"></lite-youtube>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"modal-banner\" data-time=\"300000\"><!-- Задержка в секундах до появления блока ( должно указываться в админке) -->
\t<div class=\"banner-content\">
\t\t<div class=\"banner-content__image lazyload\" data-bg=\"catalog/view/theme/empirehall/data/image.webp\">
\t\t\t<div class=\"close-banner\">
\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t\t</div>
\t\t\t<div class=\"banner-content__holder\">
\t\t\t\t
\t\t\t\t<div class=\"title\">";
        // line 240
        echo (isset($context["text_emp_coll"]) ? $context["text_emp_coll"] : null);
        echo "</div>
\t\t\t\t<div class=\"text\">";
        // line 241
        echo (isset($context["text_emp_coll_text"]) ? $context["text_emp_coll_text"] : null);
        echo "</div>
\t\t\t\t<a href=\"";
        // line 242
        echo (isset($context["shopping"]) ? $context["shopping"] : null);
        echo "\" class=\"main-button\">";
        echo (isset($context["text_to_catalog"]) ? $context["text_to_catalog"] : null);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>

<script>
var width = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

if ( width > 768) {
\tdocument.write('<script src=\"catalog/view/theme/empirehall/js/app.js\"><\\/script>');
\t} else {
\tdocument.write('<script src=\"catalog/view/theme/empirehall/js/mobile.js\"><\\/script>');
}
</script>
";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 261
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "
";
        // line 265
        if (((isset($context["ee_js_position"]) ? $context["ee_js_position"] : null) == 3)) {
            // line 266
            echo "<script src=\"catalog/view/javascript/ee_tracking.min.js?eetv=2.2.1";
            if ((isset($context["ee_js_version"]) ? $context["ee_js_version"] : null)) {
                echo ".";
                echo (isset($context["ee_js_version"]) ? $context["ee_js_version"] : null);
            }
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 268
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "empirehall/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 268,  404 => 266,  402 => 265,  399 => 264,  390 => 261,  386 => 260,  363 => 242,  359 => 241,  355 => 240,  326 => 214,  299 => 190,  295 => 189,  275 => 172,  271 => 171,  251 => 154,  246 => 152,  239 => 148,  232 => 144,  223 => 137,  214 => 135,  212 => 134,  200 => 125,  123 => 50,  115 => 45,  112 => 44,  109 => 43,  101 => 38,  98 => 37,  95 => 36,  87 => 31,  84 => 30,  81 => 29,  73 => 24,  70 => 23,  68 => 22,  63 => 20,  56 => 16,  51 => 13,  46 => 10,  35 => 7,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* ﻿<footer class="footer">*/
/* 	{% if menus %}*/
/* 		<nav class="footer-nav">*/
/* 			<ul class="footer-nav__list">*/
/* 				{% for item in menus %}*/
/* 					<li class="footer-nav__item">*/
/* 						<a href="{{ item.href }}">{{ item.name }}</a>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</nav>*/
/* 	{% endif %}*/
/* 	<div class="footer-info">*/
/* 		<div class="footer-info__inner">*/
/* 			<div class="logo">*/
/* 				<a href="{{ home }}">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/logo-white.svg" width="157" height="28" alt="" class="lazyload">*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="copyright">{{ powered }}</div>*/
/* 			<ul class="socials">*/
/* 				{% if instagram %}*/
/* 					<li class="socials__item">*/
/* 						<a href="{{ instagram }}" target="_blank">*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#instagram"></use></svg>*/
/* 						</a>*/
/* 					</li>*/
/* 				{% endif %}*/
/* 				{% if pinterest %}*/
/* 					<li class="socials__item">*/
/* 						<a href="{{ pinterest }}" target="_blank">*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#pinterest"></use></svg>*/
/* 						</a>*/
/* 					</li>*/
/* 				{% endif %}*/
/* 				{% if facebook %}*/
/* 					<li class="socials__item">*/
/* 						<a href="{{ facebook }}" target="_blank">*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#facebook"></use></svg>*/
/* 						</a>*/
/* 					</li>*/
/* 				{% endif %}*/
/* 				{% if youtube %}*/
/* 					<li class="socials__item">*/
/* 						<a href="{{ youtube }}" target="_blank">*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#youtube"></use></svg>*/
/* 						</a>*/
/* 					</li>*/
/* 				{% endif %}*/
/* 			</ul>*/
/* 			<div class="devs">*/
/* 				<a  href="https://art-lemon.com/" target="_blank" class="devs">Разработка:*/
/* 					<div class="devs__icon-box">*/
/* 						<div class="devs__icon">*/
/* 							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 201.582 31.427" style="enable-background:new 0 0 201.582 31.427;" xml:space="preserve">*/
/* 								<g>*/
/* 									<g>*/
/* 										<path d="M59.329,7.896v17.165h-5.15v-1.614c-1.133,1.304-2.815,2.094-5.115,2.094c-4.497,0-8.205-3.948-8.205-9.063*/
/* 										c0-5.115,3.708-9.063,8.205-9.063c2.3,0,3.982,0.79,5.115,2.094V7.896H59.329z M54.179,16.478c0-2.575-1.716-4.188-4.085-4.188*/
/* 										c-2.369,0-4.085,1.614-4.085,4.188c0,2.575,1.716,4.188,4.085,4.188C52.463,20.667,54.179,19.053,54.179,16.478z"></path>*/
/* 										<path d="M74.466,7.553v5.836c-2.128-0.343-5.15,0.515-5.15,3.914v7.759h-5.149V7.896h5.149v3.055*/
/* 										C70.004,8.651,72.304,7.553,74.466,7.553z"></path>*/
/* 										<path d="M84.97,12.839v6.076c0,1.476,1.27,1.614,3.536,1.476v4.669c-6.729,0.687-8.685-1.339-8.685-6.145v-6.076h-2.747V7.896*/
/* 										h2.747V4.635l5.15-1.545v4.806h3.536v4.944H84.97z"></path>*/
/* 										<path d="M102.477,0h5.149v25.061h-5.149V0z"></path>*/
/* 										<path d="M121.186,20.941c1.407,0,2.609-0.549,3.296-1.304l4.119,2.369c-1.682,2.335-4.222,3.536-7.484,3.536*/
/* 										c-5.871,0-9.509-3.948-9.509-9.063c0-5.115,3.708-9.063,9.132-9.063c5.012,0,8.72,3.879,8.72,9.063*/
/* 										c0,0.721-0.069,1.408-0.206,2.06h-12.187C117.719,20.323,119.298,20.941,121.186,20.941z M124.344,14.693*/
/* 										c-0.549-1.991-2.094-2.712-3.639-2.712c-1.957,0-3.261,0.961-3.742,2.712H124.344z"></path>*/
/* 										<path d="M159.187,14.522v10.539h-5.15V14.968c0-1.717-0.824-2.815-2.472-2.815c-1.716,0-2.678,1.202-2.678,3.227v9.681h-5.15*/
/* 										V14.968c0-1.717-0.824-2.815-2.472-2.815c-1.717,0-2.678,1.202-2.678,3.227v9.681h-5.149V7.896h5.149v1.579*/
/* 										c0.79-1.167,2.3-2.06,4.6-2.06c2.025,0,3.536,0.824,4.497,2.266c0.961-1.373,2.54-2.266,4.978-2.266*/
/* 										C156.613,7.415,159.187,10.23,159.187,14.522z"></path>*/
/* 										<path d="M162.927,16.478c0-5.115,4.051-9.063,9.097-9.063c5.047,0,9.098,3.948,9.098,9.063c0,5.115-4.051,9.063-9.098,9.063*/
/* 										C166.979,25.541,162.927,21.594,162.927,16.478z M175.973,16.478c0-2.437-1.717-4.051-3.948-4.051*/
/* 										c-2.231,0-3.948,1.614-3.948,4.051c0,2.437,1.716,4.051,3.948,4.051C174.256,20.529,175.973,18.916,175.973,16.478z"></path>*/
/* 										<path d="M201.582,14.522v10.539h-5.15v-9.784c0-2.128-1.339-3.124-2.987-3.124c-1.888,0-3.193,1.099-3.193,3.536v9.372h-5.149*/
/* 										V7.896h5.149v1.614c0.927-1.27,2.644-2.094,4.909-2.094C198.629,7.415,201.582,9.887,201.582,14.522z"></path>*/
/* 									</g>*/
/* 									<path style="fill:#A9A9A9;" d="M25.19,1.958H14.734C6.597,1.958,0,8.555,0,16.693v10.456c0,2.353,1.925,4.278,4.278,4.278h10.456*/
/* 									c8.138,0,14.734-6.597,14.734-14.734V6.237C29.469,3.884,27.543,1.958,25.19,1.958z"></path>*/
/* 								</g>*/
/* 							</svg>*/
/* 						</div>*/
/* 						<div class="devs__icon-hover">*/
/* 							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 201.582 31.427" style="enable-background:new 0 0 201.582 31.427;" xml:space="preserve">*/
/* 								<g>*/
/* 									<g>*/
/* 										<path d="M59.329,7.896v17.165h-5.15v-1.614c-1.133,1.304-2.815,2.094-5.115,2.094c-4.497,0-8.205-3.948-8.205-9.063*/
/* 										c0-5.115,3.708-9.063,8.205-9.063c2.3,0,3.982,0.79,5.115,2.094V7.896H59.329z M54.179,16.478c0-2.575-1.716-4.188-4.085-4.188*/
/* 										c-2.369,0-4.085,1.614-4.085,4.188c0,2.575,1.716,4.188,4.085,4.188C52.463,20.667,54.179,19.053,54.179,16.478z"></path>*/
/* 										<path d="M74.466,7.553v5.836c-2.128-0.343-5.15,0.515-5.15,3.914v7.759h-5.149V7.896h5.149v3.055*/
/* 										C70.004,8.651,72.304,7.553,74.466,7.553z"></path>*/
/* 										<path d="M84.97,12.839v6.076c0,1.476,1.27,1.614,3.536,1.476v4.669c-6.729,0.687-8.685-1.339-8.685-6.145v-6.076h-2.747V7.896*/
/* 										h2.747V4.635l5.15-1.545v4.806h3.536v4.944H84.97z"></path>*/
/* 										<path d="M102.477,0h5.149v25.061h-5.149V0z"></path>*/
/* 										<path d="M121.186,20.941c1.407,0,2.609-0.549,3.296-1.304l4.119,2.369c-1.682,2.335-4.222,3.536-7.484,3.536*/
/* 										c-5.871,0-9.509-3.948-9.509-9.063c0-5.115,3.708-9.063,9.132-9.063c5.012,0,8.72,3.879,8.72,9.063*/
/* 										c0,0.721-0.069,1.408-0.206,2.06h-12.187C117.719,20.323,119.298,20.941,121.186,20.941z M124.344,14.693*/
/* 										c-0.549-1.991-2.094-2.712-3.639-2.712c-1.957,0-3.261,0.961-3.742,2.712H124.344z"></path>*/
/* 										<path d="M159.187,14.522v10.539h-5.15V14.968c0-1.717-0.824-2.815-2.472-2.815c-1.716,0-2.678,1.202-2.678,3.227v9.681h-5.15*/
/* 										V14.968c0-1.717-0.824-2.815-2.472-2.815c-1.717,0-2.678,1.202-2.678,3.227v9.681h-5.149V7.896h5.149v1.579*/
/* 										c0.79-1.167,2.3-2.06,4.6-2.06c2.025,0,3.536,0.824,4.497,2.266c0.961-1.373,2.54-2.266,4.978-2.266*/
/* 										C156.613,7.415,159.187,10.23,159.187,14.522z"></path>*/
/* 										<path d="M162.927,16.478c0-5.115,4.051-9.063,9.097-9.063c5.047,0,9.098,3.948,9.098,9.063c0,5.115-4.051,9.063-9.098,9.063*/
/* 										C166.979,25.541,162.927,21.594,162.927,16.478z M175.973,16.478c0-2.437-1.717-4.051-3.948-4.051*/
/* 										c-2.231,0-3.948,1.614-3.948,4.051c0,2.437,1.716,4.051,3.948,4.051C174.256,20.529,175.973,18.916,175.973,16.478z"></path>*/
/* 										<path d="M201.582,14.522v10.539h-5.15v-9.784c0-2.128-1.339-3.124-2.987-3.124c-1.888,0-3.193,1.099-3.193,3.536v9.372h-5.149*/
/* 										V7.896h5.149v1.614c0.927-1.27,2.644-2.094,4.909-2.094C198.629,7.415,201.582,9.887,201.582,14.522z"></path>*/
/* 									</g>*/
/* 									<path style="fill:#A9A9A9;" d="M25.19,1.958H14.734C6.597,1.958,0,8.555,0,16.693v10.456c0,2.353,1.925,4.278,4.278,4.278h10.456*/
/* 									c8.138,0,14.734-6.597,14.734-14.734V6.237C29.469,3.884,27.543,1.958,25.19,1.958z"></path>*/
/* 								</g>*/
/* 							</svg>*/
/* 						</div>*/
/* 					</div>*/
/* 				</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="footer-subscribe">*/
/* 		<form class="footer-subscribe__form" id="subscribe-form">*/
/* 			<div class="form-block">*/
/* 				<input class="footer-subscribe__input" type="email" name="subscribe_email" placeholder="{{ text_subscribe }}">*/
/* 			</div>*/
/* 			<button class="footer-subscribe__button" type="submit" id="subscribe-send">*/
/* 				<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#subscribe-button"></use></svg>*/
/* 			</button>*/
/* 		</form>*/
/* 	</div>*/
/* 	*/
/* </footer>*/
/* {% if ee_js_position == 2 %}*/
/* <script src="catalog/view/javascript/ee_tracking.min.js?eetv=2.2.1{% if ee_js_version %}.{{ ee_js_version }}{% endif %}" type="text/javascript"></script>*/
/* {% endif %}*/
/* <div class="popup popup-callback">*/
/* 	<div class="popup__overlay"></div>*/
/* 	<div class="popup__holder">*/
/* 		<div class="popup__close">*/
/* 			<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 		</div>*/
/* 		<div class="popup__content">*/
/* 			<div class="popup__title">{{ text_callback_title }}</div>*/
/* 			<form class="popup__form" id="callback-form">*/
/* 				<div class="form-block">*/
/* 					<input class="main-input" type="text" name="callback_name">*/
/* 					<div class="form-label">{{ text_form_name }}</div>*/
/* 				</div>*/
/* 				<div class="form-block">*/
/* 					<input class="main-input" type="tel" name="callback_phone">*/
/* 					<div class="form-label">{{ text_form_phone }}</div>*/
/* 				</div>*/
/* 				<button class="submit-button" type="submit" id="callback-send">{{ text_callback_btn }}</button>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="popup popup-success">*/
/* 	<div class="popup__overlay"></div>*/
/* 	<div class="popup__holder">*/
/* 		<div class="popup__close">*/
/* 			<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 		</div>*/
/* 		<div class="popup__content">*/
/* 			<div class="success-popup">*/
/* 				<div class="success-popup__image">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/success-popup-img.svg" width="100" height="100" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="success-popup__title">{{ text_success_text }}</div>*/
/* 				<div class="success-popup__text">{{ text_subscribe_success2 }}</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="popup popup-subscribe">*/
/* 	<div class="popup__overlay"></div>*/
/* 	<div class="popup__holder">*/
/* 		<div class="popup__close">*/
/* 			<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 		</div>*/
/* 		<div class="popup__content">*/
/* 			<div class="success-popup">*/
/* 				<div class="success-popup__image">*/
/* 					<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/data/subscribe-popup-img.svg" width="116" height="140" alt="" class="lazyload">*/
/* 				</div>*/
/* 				<div class="success-popup__title">{{ text_subscribe_success }}</div>*/
/* 				<div class="success-popup__text">{{ text_subscribe_success2 }}</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="popup popup-about">*/
/* 	<div class="popup__overlay"></div>*/
/* 	<div class="popup__holder popup__holder--about">*/
/* 		<div class="popup__close">*/
/* 			<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 		</div>*/
/* 		<div class="about-popup" style="background-image: url('data/about-popup-image.webp')">*/
/* 			<div class="about-popup__inner">*/
/* 				<div class="about-popup__box">*/
/* 					<div class="about-popup__title">Empire Hall collections 2019</div>*/
/* 					<div class="about-popup__text">Мы создаем украшения для тех, кто не боится быть собой и умеет действовать решительно.</div>*/
/* 					<a class="main-button" href="#">В каталог</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {{ cart }}*/
/* */
/* */
/* <div class="popup popup-video">*/
/* 	<div class="popup__overlay"></div>*/
/* 	<div class="popup__holder popup__holder--video">*/
/* 		<div class="popup__close">*/
/* 			<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 		</div>*/
/* 		<div class="popup__content">*/
/* 			<div class="video-popup">*/
/* 				<lite-youtube videoid="IY16RdmgT_g"></lite-youtube>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <div class="modal-banner" data-time="300000"><!-- Задержка в секундах до появления блока ( должно указываться в админке) -->*/
/* 	<div class="banner-content">*/
/* 		<div class="banner-content__image lazyload" data-bg="catalog/view/theme/empirehall/data/image.webp">*/
/* 			<div class="close-banner">*/
/* 				<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 			</div>*/
/* 			<div class="banner-content__holder">*/
/* 				*/
/* 				<div class="title">{{ text_emp_coll }}</div>*/
/* 				<div class="text">{{ text_emp_coll_text }}</div>*/
/* 				<a href="{{ shopping }}" class="main-button">{{ text_to_catalog }}</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* */
/* <script>*/
/* var width = window.innerWidth*/
/* || document.documentElement.clientWidth*/
/* || document.body.clientWidth;*/
/* */
/* if ( width > 768) {*/
/* 	document.write('<script src="catalog/view/theme/empirehall/js/app.js"><\/script>');*/
/* 	} else {*/
/* 	document.write('<script src="catalog/view/theme/empirehall/js/mobile.js"><\/script>');*/
/* }*/
/* </script>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* {# <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> #}*/
/* */
/* {% if ee_js_position == 3 %}*/
/* <script src="catalog/view/javascript/ee_tracking.min.js?eetv=2.2.1{% if ee_js_version %}.{{ ee_js_version }}{% endif %}" type="text/javascript"></script>*/
/* {% endif %}*/
/* </body>*/
/* </html>*/
