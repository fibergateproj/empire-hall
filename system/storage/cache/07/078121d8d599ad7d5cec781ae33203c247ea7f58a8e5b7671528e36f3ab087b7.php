<?php

/* empirehall/template/common/header.twig */
class __TwigTemplate_c07b7975690b481b5784d24216fe10f0d67f6e00a92bc42869f3d0087cc190f0 extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html lang=\"ru\">
\t<head prefix=\"og:https://ogp.me/ns# fb:https://ogp.me/ns/fb# product:https://ogp.me/ns/product#\">
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<meta name=\"description\" content=\"test\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\">";
        // line 10
        if ((isset($context["open_to_index"]) ? $context["open_to_index"] : null)) {
            // line 11
            echo "\t\t\t<meta name=\"robots\" content=\"index, follow\" />";
        } else {
            // line 13
            echo "\t\t\t<meta name=\"robots\" content=\"noindex, nofollow\" />";
        }
        // line 15
        echo "\t\t
\t\t<base href=\"";
        // line 16
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
\t\t<title>";
        // line 17
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>";
        // line 19
        if ((isset($context["noindex"]) ? $context["noindex"] : null)) {
            // line 20
            echo "<!-- OCFilter Start -->
<meta name=\"robots\" content=\"noindex,nofollow\" />
<!-- OCFilter End -->";
        }
        // line 25
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 26
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 28
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 29
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 31
        echo "\t\t
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16 32x32\" href=\"catalog/view/theme/empirehall/images/favicon-32x32.png\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"catalog/view/theme/empirehall/images/android-icon-192x192.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"catalog/view/theme/empirehall/images/apple-icon-180x180.png\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link rel=\"preload\" href=\"catalog/view/theme/empirehall/css/index.css\" as=\"style\">
\t\t<link href=\"catalog/view/theme/empirehall/css/index.css\" rel=\"stylesheet\">

\t\t<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 43
            echo "\t\t\t<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo (isset($context["mlseo_meta"]) ? $context["mlseo_meta"] : null);
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 49
            echo "\t\t\t<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        if (((isset($context["ee_js_position"]) ? $context["ee_js_position"] : null) == 0)) {
            // line 52
            echo "<script src=\"catalog/view/javascript/ee_tracking.min.js?eetv=2.2.1";
            if ((isset($context["ee_js_version"]) ? $context["ee_js_version"] : null)) {
                echo ".";
                echo (isset($context["ee_js_version"]) ? $context["ee_js_version"] : null);
            }
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 54
        echo "\t</head>
\t
\t<body class=\"main-page main";
        // line 56
        echo (isset($context["body_class"]) ? $context["body_class"] : null);
        echo "\">
\t\t<div class=\"preloader\" id=\"preloader\">
\t\t\t<video autoplay loop muted playsinline>
\t\t\t\t<source src=\"catalog/view/theme/empirehall/images/preloader.webm\" type=\"video/webm\">
\t\t\t\t<img src=\"catalog/view/theme/empirehall/data/logo.svg\" data-src=\"catalog/view/theme/empirehall/images/preloader.gif\" alt=\"\" class=\"lazyload\">
\t\t\t</video>
\t\t</div>
\t\t
\t\t<div class=\"wrapper\">

\t\t\t<header class=\"header\">
\t\t\t\t<div class=\"header__inner\">
\t\t\t\t\t<div class=\"header__left\">
\t\t\t\t\t\t<div class=\"menu__open\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav class=\"main-nav\">
\t\t\t\t\t\t\t<ul class=\"main-nav__list\">
\t\t\t\t\t\t\t\t<li class=\"main-nav__item main-nav__item--shop\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo (isset($context["store_link"]) ? $context["store_link"] : null);
        echo "\">";
        echo (isset($context["text_store_tab"]) ? $context["text_store_tab"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"main-nav__item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 79
        echo (isset($context["brands_link"]) ? $context["brands_link"] : null);
        echo "\">";
        echo (isset($context["text_brands_tab"]) ? $context["text_brands_tab"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</li>";
        // line 81
        if (((isset($context["inspiration_link_config"]) ? $context["inspiration_link_config"] : null) != 0)) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t<li class=\"main-nav__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo (isset($context["inspiration_link"]) ? $context["inspiration_link"] : null);
            echo "\">";
            echo (isset($context["text_breath_tab"]) ? $context["text_breath_tab"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>";
        }
        // line 86
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header__center\">
\t\t\t\t\t\t<a href=\"";
        // line 90
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"logo\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header__right\">";
        // line 93
        echo (isset($context["search"]) ? $context["search"] : null);
        // line 94
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
\t\t\t\t\t\t<div class=\"header__links\">
\t\t\t\t\t\t\t<div class=\"header__link header__link--area no-login\">
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"no-login-link\">
\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#login\"></use>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</a>";
        // line 102
        if ((isset($context["is_logged"]) ? $context["is_logged"] : null)) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t<div class=\"loged-label\">";
            // line 104
            echo (isset($context["client_name"]) ? $context["client_name"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</div>";
        }
        // line 107
        echo "\t\t\t\t\t\t\t\t<div class=\"login-popup\" id=\"login-popup\">
\t\t\t\t\t\t\t\t\t<div class=\"login-popup__title\">";
        // line 108
        echo (isset($context["text_login_title"]) ? $context["text_login_title"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<form class=\"login-popup__form\" id=\"login-form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-block\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-input\" type=\"email\" name=\"email\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-label\">";
        // line 112
        echo (isset($context["text_login_email"]) ? $context["text_login_email"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-block\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-input\" type=\"password\" name=\"password\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-label\">";
        // line 116
        echo (isset($context["text_login_pwd"]) ? $context["text_login_pwd"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a class=\"forgot-password\" href=\"";
        // line 118
        echo (isset($context["forgot"]) ? $context["forgot"] : null);
        echo "\">";
        echo (isset($context["text_login_forgot"]) ? $context["text_login_forgot"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"submit-button\" type=\"submit\">";
        // line 119
        echo (isset($context["text_login_entry"]) ? $context["text_login_entry"] : null);
        echo "</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<a class=\"show-all\" href=\"";
        // line 121
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\">";
        echo (isset($context["text_login_no_acc"]) ? $context["text_login_no_acc"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"header__link header__link--wishlist\" href=\"";
        // line 125
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">
\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#wishlist\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"count\">";
        // line 129
        echo (isset($context["count_wishlist"]) ? $context["count_wishlist"] : null);
        echo "</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"header__link header__link--basket\" >
\t\t\t\t\t\t\t\t<svg";
        // line 132
        if (((isset($context["count_products"]) ? $context["count_products"] : null) >= 1)) {
            echo " style=\"fill:#8f6d55;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#basket\"></use>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<div class=\"count\" id=\"cart-total\">";
        // line 135
        echo (isset($context["count_products"]) ? $context["count_products"] : null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart-add-popup\">
\t\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"data/done.svg\"></use></svg>
\t\t\t\t\t\t\t\t<span>";
        // line 139
        echo (isset($context["text_cart_success_add"]) ? $context["text_cart_success_add"] : null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 144
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 145
            echo "\t\t\t\t\t<div class=\"shop-menu\">
\t\t\t\t\t\t<div class=\"menu__close\">
\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"shop-menu__inner\">
\t\t\t\t\t\t\t<ul class=\"shop-menu__list first-level mCustomScrollbar\">";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t<li class=\"shop-menu__item\">";
                    // line 154
                    if ($this->getAttribute($context["child"], "children_third", array())) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\" class=\"has-submenu\" data-sub=\"sub-";
                        echo $this->getAttribute($context["child"], "category_id", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 156
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#opener\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>";
                    } else {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a>";
                    }
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "\t\t\t\t\t\t\t</ul>";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 170
                    if ($this->getAttribute($context["child"], "children_third", array())) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"shop-menu__list sub second-level sub-";
                        echo $this->getAttribute($context["child"], "category_id", array());
                        echo " mCustomScrollbar\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"shop-menu__item shop-menu__back\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#opener\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\tНазад
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
                        // line 180
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "children_third", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                            // line 181
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"shop-menu__item\">";
                            // line 182
                            if ($this->getAttribute($context["child2"], "children_fourth", array())) {
                                // line 183
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"has-submenu\" data-sub=\"sub-";
                                echo $this->getAttribute($context["child2"], "category_id", array());
                                echo "\" href=\"";
                                echo $this->getAttribute($context["child2"], "href", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                                // line 184
                                echo $this->getAttribute($context["child2"], "name", array());
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#opener\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>";
                            } else {
                                // line 190
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo $this->getAttribute($context["child2"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["child2"], "name", array());
                                echo "</a>";
                            }
                            // line 192
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 194
                        echo "\t\t\t\t\t\t\t\t\t\t</ul>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 200
                    if ($this->getAttribute($context["child"], "children_third", array())) {
                        // line 201
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "children_third", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["child2"]) {
                            // line 202
                            if ($this->getAttribute($context["child2"], "children_fourth", array())) {
                                // line 203
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"shop-menu__list sub third-level sub-";
                                echo $this->getAttribute($context["child2"], "category_id", array());
                                echo " mCustomScrollbar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"shop-menu__item shop-menu__back\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#opener\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tНазад
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>";
                                // line 212
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child2"], "children_fourth", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["child3"]) {
                                    // line 213
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"shop-menu__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 214
                                    echo $this->getAttribute($context["child3"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                                    // line 215
                                    echo $this->getAttribute($context["child3"], "name", array());
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 219
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>";
        }
        // line 228
        echo "\t\t\t</header>
\t\t\t<button class=\"catalog-btn\">";
        // line 230
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "
\t\t\t\t<svg>
\t\t\t\t\t<use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#opener\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<div class=\"menu\">
\t\t\t\t<div class=\"menu__inner\">
\t\t\t\t\t<div class=\"menu__close\">
\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#close\"></use></svg>
\t\t\t\t\t</div>";
        // line 240
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 241
            echo "\t\t\t\t\t\t<div class=\"menu__left\">
\t\t\t\t\t\t\t<div class=\"menu__left-box\">
\t\t\t\t\t\t\t\t<div class=\"menu__subtitle\">";
            // line 243
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t<nav class=\"left-nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"left-nav__list scroll-menu\">";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"left-nav__item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 248
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "href", array());
                echo "\">";
                echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
        }
        // line 256
        echo "\t\t\t\t\t<div class=\"menu__right\">
\t\t\t\t\t\t<div class=\"menu__right-box\">
\t\t\t\t\t\t\t<div class=\"menu__subtitle\">";
        // line 258
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "</div>
\t\t\t\t\t\t\t<nav class=\"right-nav\">
\t\t\t\t\t\t\t\t<ul class=\"right-nav__list scroll-text\">";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 262
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"right-nav__item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 263
            echo $this->getAttribute($context["item"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "name", array());
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"mobile-language\"></div>
\t\t\t\t\t\t\t<ul class=\"menu-socials\">";
        // line 270
        if ((isset($context["instagram"]) ? $context["instagram"] : null)) {
            // line 271
            echo "\t\t\t\t\t\t\t\t\t<li class=\"menu-socials__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 272
            echo (isset($context["instagram"]) ? $context["instagram"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#instagram\"></use></svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>";
        }
        // line 277
        if ((isset($context["pinterest"]) ? $context["pinterest"] : null)) {
            // line 278
            echo "\t\t\t\t\t\t\t\t\t<li class=\"menu-socials__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 279
            echo (isset($context["pinterest"]) ? $context["pinterest"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#pinterest\"></use></svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>";
        }
        // line 284
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            // line 285
            echo "\t\t\t\t\t\t\t\t\t<li class=\"menu-socials__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 286
            echo (isset($context["facebook"]) ? $context["facebook"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#facebook\"></use></svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>";
        }
        // line 291
        if ((isset($context["youtube"]) ? $context["youtube"] : null)) {
            // line 292
            echo "\t\t\t\t\t\t\t\t\t<li class=\"menu-socials__item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 293
            echo (isset($context["youtube"]) ? $context["youtube"] : null);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<svg><use xmlns:xlink=\"https://www.w3.org/1999/xlink\" xlink:href=\"catalog/view/theme/empirehall/images/sprite.svg#youtube\"></use></svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>";
        }
        // line 298
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "empirehall/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 298,  595 => 293,  592 => 292,  590 => 291,  583 => 286,  580 => 285,  578 => 284,  571 => 279,  568 => 278,  566 => 277,  559 => 272,  556 => 271,  554 => 270,  549 => 266,  539 => 263,  536 => 262,  532 => 261,  527 => 258,  523 => 256,  517 => 251,  507 => 248,  504 => 247,  500 => 246,  495 => 243,  491 => 241,  489 => 240,  477 => 230,  474 => 228,  470 => 225,  454 => 219,  445 => 215,  441 => 214,  438 => 213,  434 => 212,  422 => 203,  420 => 202,  416 => 201,  414 => 200,  410 => 199,  406 => 198,  395 => 194,  389 => 192,  382 => 190,  374 => 184,  367 => 183,  365 => 182,  363 => 181,  359 => 180,  347 => 171,  345 => 170,  341 => 169,  337 => 168,  335 => 167,  325 => 164,  318 => 162,  310 => 156,  303 => 155,  301 => 154,  299 => 153,  295 => 152,  291 => 151,  284 => 145,  282 => 144,  275 => 139,  268 => 135,  260 => 132,  254 => 129,  247 => 125,  238 => 121,  233 => 119,  227 => 118,  222 => 116,  215 => 112,  208 => 108,  205 => 107,  200 => 104,  198 => 103,  196 => 102,  186 => 94,  184 => 93,  179 => 90,  173 => 86,  166 => 83,  163 => 82,  161 => 81,  155 => 79,  147 => 76,  124 => 56,  120 => 54,  112 => 52,  110 => 51,  100 => 49,  96 => 48,  94 => 46,  82 => 43,  78 => 42,  67 => 31,  62 => 29,  60 => 28,  55 => 26,  53 => 25,  48 => 20,  46 => 19,  43 => 17,  39 => 16,  36 => 15,  33 => 13,  30 => 11,  28 => 10,  19 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html lang="ru">*/
/* 	<head prefix="og:https://ogp.me/ns# fb:https://ogp.me/ns/fb# product:https://ogp.me/ns/product#">*/
/* 		<meta charset="UTF-8">*/
/* 		<meta http-equiv="x-ua-compatible" content="ie=edge">*/
/* 		<meta name="description" content="test">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* 		<meta name="format-detection" content="telephone=no">*/
/* 		*/
/* 		{% if (open_to_index) %}*/
/* 			<meta name="robots" content="index, follow" />*/
/* 		{% else %}*/
/* 			<meta name="robots" content="noindex, nofollow" />*/
/* 		{% endif %}*/
/* 		*/
/* 		<base href="{{ base }}" />*/
/* 		<title>{{ title }}</title>*/
/* */
/* {% if noindex %}*/
/* <!-- OCFilter Start -->*/
/* <meta name="robots" content="noindex,nofollow" />*/
/* <!-- OCFilter End -->*/
/* {% endif %}*/
/*       */
/* 		{% if description %}*/
/* 			<meta name="description" content="{{ description }}" />*/
/* 		{% endif %}*/
/* 		{% if keywords %}*/
/* 			<meta name="keywords" content="{{ keywords }}" />*/
/* 		{% endif %}*/
/* 		*/
/* 		<link rel="icon" type="image/png" sizes="16x16 32x32" href="catalog/view/theme/empirehall/images/favicon-32x32.png">*/
/* 		<link rel="icon" type="image/png" sizes="192x192" href="catalog/view/theme/empirehall/images/android-icon-192x192.png">*/
/* 		<link rel="apple-touch-icon" sizes="180x180" href="catalog/view/theme/empirehall/images/apple-icon-180x180.png">*/
/* 		<link rel="preconnect" href="https://fonts.googleapis.com">*/
/* 		<link rel="preconnect" href="https://fonts.gstatic.com">*/
/* 		<link rel="preload" href="catalog/view/theme/empirehall/css/index.css" as="style">*/
/* 		<link href="catalog/view/theme/empirehall/css/index.css" rel="stylesheet">*/
/* */
/* 		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>*/
/* 		*/
/* 		{% for style in styles %}*/
/* 			<link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* 		{% endfor %}*/
/* */
/*         {{mlseo_meta}}*/
/*       */
/* 		{% for link in links %}*/
/* 			<link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* 		{% endfor %}*/
/* {% if ee_js_position == 0 %}*/
/* <script src="catalog/view/javascript/ee_tracking.min.js?eetv=2.2.1{% if ee_js_version %}.{{ ee_js_version }}{% endif %}" type="text/javascript"></script>*/
/* {% endif %}*/
/* 	</head>*/
/* 	*/
/* 	<body class="main-page main {{ body_class }}">*/
/* 		<div class="preloader" id="preloader">*/
/* 			<video autoplay loop muted playsinline>*/
/* 				<source src="catalog/view/theme/empirehall/images/preloader.webm" type="video/webm">*/
/* 				<img src="catalog/view/theme/empirehall/data/logo.svg" data-src="catalog/view/theme/empirehall/images/preloader.gif" alt="" class="lazyload">*/
/* 			</video>*/
/* 		</div>*/
/* 		*/
/* 		<div class="wrapper">*/
/* */
/* 			<header class="header">*/
/* 				<div class="header__inner">*/
/* 					<div class="header__left">*/
/* 						<div class="menu__open">*/
/* 							<span></span>*/
/* 							<span></span>*/
/* 						</div>*/
/* 						<nav class="main-nav">*/
/* 							<ul class="main-nav__list">*/
/* 								<li class="main-nav__item main-nav__item--shop">*/
/* 									<a href="{{ store_link }}">{{ text_store_tab }}</a>*/
/* 								</li>*/
/* 								<li class="main-nav__item">*/
/* 									<a href="{{ brands_link }}">{{ text_brands_tab }}</a>*/
/* 								</li>*/
/* 								{% if inspiration_link_config !=0 %}*/
/* 									<li class="main-nav__item">*/
/* 										<a href="{{ inspiration_link }}">{{ text_breath_tab }}</a>*/
/* 									</li>*/
/* 								{% endif %}*/
/* 							</ul>*/
/* 						</nav>*/
/* 					</div>*/
/* 					<div class="header__center">*/
/* 						<a href="{{ home }}" class="logo"></a>*/
/* 					</div>*/
/* 					<div class="header__right">*/
/* 						{{ search }}*/
/* 						{{ language }}*/
/* 						<div class="header__links">*/
/* 							<div class="header__link header__link--area no-login">*/
/* 								<a href="#" id="no-login-link">*/
/* 									<svg>*/
/* 										<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#login"></use>*/
/* 									</svg>*/
/* 								</a>*/
/* 								{% if is_logged %}*/
/* 									<div class="loged-label">*/
/* 										{{ client_name }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div class="login-popup" id="login-popup">*/
/* 									<div class="login-popup__title">{{ text_login_title }}</div>*/
/* 									<form class="login-popup__form" id="login-form">*/
/* 										<div class="form-block">*/
/* 											<input class="main-input" type="email" name="email">*/
/* 											<div class="form-label">{{ text_login_email }}</div>*/
/* 										</div>*/
/* 										<div class="form-block">*/
/* 											<input class="main-input" type="password" name="password">*/
/* 											<div class="form-label">{{ text_login_pwd }}</div>*/
/* 										</div>*/
/* 										<a class="forgot-password" href="{{ forgot }}">{{ text_login_forgot }}</a>*/
/* 										<button class="submit-button" type="submit">{{ text_login_entry }}</button>*/
/* 									</form>*/
/* 									<a class="show-all" href="{{ register }}">{{ text_login_no_acc }}</a>*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 							<a class="header__link header__link--wishlist" href="{{ wishlist }}">*/
/* 								<svg>*/
/* 									<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#wishlist"></use>*/
/* 								</svg>*/
/* 								<div class="count">{{ count_wishlist }}</div>*/
/* 							</a>*/
/* 							<div class="header__link header__link--basket" >*/
/* 								<svg {% if count_products >= 1 %} style="fill:#8f6d55;" {% endif %}>*/
/* 									<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#basket"></use>*/
/* 								</svg>*/
/* 								<div class="count" id="cart-total">{{ count_products }}</div>*/
/* 							</div>*/
/* 							<div class="cart-add-popup">*/
/* 								<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="data/done.svg"></use></svg>*/
/* 								<span>{{ text_cart_success_add }}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% if categories %}*/
/* 					<div class="shop-menu">*/
/* 						<div class="menu__close">*/
/* 							<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 						</div>*/
/* 						<div class="shop-menu__inner">*/
/* 							<ul class="shop-menu__list first-level mCustomScrollbar">*/
/* 								{% for category in categories %}*/
/* 									{% for child in category.children %}*/
/* 										<li class="shop-menu__item">*/
/* 											{% if child.children_third %}*/
/* 												<a href="{{ child.href }}" class="has-submenu" data-sub="sub-{{ child.category_id }}">*/
/* 													<span>{{ child.name }}</span>*/
/* 													<svg>*/
/* 														<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#opener"></use>*/
/* 													</svg>*/
/* 												</a>*/
/* 											{% else %}*/
/* 												<a href="{{ child.href }}">{{ child.name }}</a>*/
/* 											{% endif %}*/
/* 										</li>*/
/* 									{% endfor %}*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							{% for category in categories %}*/
/* 								{% for child in category.children %}*/
/* 									{% if child.children_third %}*/
/* 										<ul class="shop-menu__list sub second-level sub-{{ child.category_id }} mCustomScrollbar">*/
/* 											<li class="shop-menu__item shop-menu__back">*/
/* 												<a href="#">*/
/* 													<svg>*/
/* 														<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#opener"></use>*/
/* 													</svg>*/
/* 													Назад*/
/* 												</a>*/
/* 											</li>*/
/* 											{% for child2 in child.children_third %}*/
/* 												<li class="shop-menu__item">*/
/* 													{% if child2.children_fourth %}*/
/* 														<a class="has-submenu" data-sub="sub-{{ child2.category_id }}" href="{{ child2.href }}">*/
/* 															<span>{{ child2.name }}</span>*/
/* 															<svg>*/
/* 																<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#opener"></use>*/
/* 															</svg>*/
/* 														</a>*/
/* 													{% else %}*/
/* 														<a href="{{ child2.href }}">{{ child2.name }}</a>*/
/* 													{% endif %}*/
/* 												</li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 							{% for category in categories %}*/
/* 								{% for child in category.children %}*/
/* 									{% if child.children_third %}*/
/* 										{% for child2 in child.children_third %}*/
/* 											{% if child2.children_fourth %}*/
/* 												<ul class="shop-menu__list sub third-level sub-{{ child2.category_id }} mCustomScrollbar">*/
/* 													<li class="shop-menu__item shop-menu__back">*/
/* 														<a href="#">*/
/* 															<svg>*/
/* 																<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#opener"></use>*/
/* 															</svg>*/
/* 															Назад*/
/* 														</a>*/
/* 													</li>*/
/* 													{% for child3 in child2.children_fourth %}*/
/* 														<li class="shop-menu__item">*/
/* 															<a href="{{ child3.href }}">*/
/* 																<span>{{ child3.name }}</span>*/
/* 															</a>*/
/* 														</li>*/
/* 													{% endfor %}*/
/* 												</ul>*/
/* 											{% endif %}*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</header>*/
/* 			<button class="catalog-btn">*/
/* 				{{ text_category }}*/
/* 				<svg>*/
/* 					<use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#opener"></use>*/
/* 				</svg>*/
/* 			</button>*/
/* 			<div class="menu">*/
/* 				<div class="menu__inner">*/
/* 					<div class="menu__close">*/
/* 						<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#close"></use></svg>*/
/* 					</div>*/
/* 					{% if categories %}*/
/* 						<div class="menu__left">*/
/* 							<div class="menu__left-box">*/
/* 								<div class="menu__subtitle">{{ text_category }}</div>*/
/* 								<nav class="left-nav">*/
/* 									<ul class="left-nav__list scroll-menu">*/
/* 										{% for category in categories %}*/
/* 											<li class="left-nav__item">*/
/* 												<a href="{{ child.href }}">{{ child.name }}</a>*/
/* 											</li>*/
/* 										{% endfor %}*/
/* 									</ul>*/
/* 								</nav>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<div class="menu__right">*/
/* 						<div class="menu__right-box">*/
/* 							<div class="menu__subtitle">{{ store_name }}</div>*/
/* 							<nav class="right-nav">*/
/* 								<ul class="right-nav__list scroll-text">*/
/* 									{% for item in menus %}*/
/* 										<li class="right-nav__item">*/
/* 											<a href="{{ item.href }}">{{ item.name }}</a>*/
/* 										</li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							</nav>*/
/* 							<div class="mobile-language"></div>*/
/* 							<ul class="menu-socials">*/
/* 								{% if instagram %}*/
/* 									<li class="menu-socials__item">*/
/* 										<a href="{{ instagram }}" target="_blank">*/
/* 											<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#instagram"></use></svg>*/
/* 										</a>*/
/* 									</li>*/
/* 								{% endif %}*/
/* 								{% if pinterest %}*/
/* 									<li class="menu-socials__item">*/
/* 										<a href="{{ pinterest }}" target="_blank">*/
/* 											<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#pinterest"></use></svg>*/
/* 										</a>*/
/* 									</li>*/
/* 								{% endif %}*/
/* 								{% if facebook %}*/
/* 									<li class="menu-socials__item">*/
/* 										<a href="{{ facebook }}" target="_blank">*/
/* 											<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#facebook"></use></svg>*/
/* 										</a>*/
/* 									</li>*/
/* 								{% endif %}*/
/* 								{% if youtube %}*/
/* 									<li class="menu-socials__item">*/
/* 										<a href="{{ youtube }}" target="_blank">*/
/* 											<svg><use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="catalog/view/theme/empirehall/images/sprite.svg#youtube"></use></svg>*/
/* 										</a>*/
/* 									</li>*/
/* 								{% endif %}*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* */
/* {# <script>*/
/* var inFormOrLink = true;*/
/* $('a').on('click', function() { inFormOrLink = true; });*/
/* $('form').on('submit', function() { inFormOrLink = true; });*/
/* */
/* $(window).on("beforeunload", function() { */
/*     return inFormOrLink ? "Do you really want to close?" : null; */
/* });*/
/* */
/* </script> #}*/
