<?php

/* empirehall/template/extension/module/gift_cart_home.twig */
class __TwigTemplate_e7fbfc2ce09939c987d387169e3c64ab09e304dc1ab8ad9a2608e111b9689280 extends Twig_Template
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
        echo "<div class=\"ajax_gift\">
    <div class=\"gift-card\">
    </div>
</div>
<script>
    \$(document).on('click', '.buy_gift', function (e) {
        e.preventDefault();
        var select = \$('select[name=\\'select-sum\\']').find(\":selected\").val();
        var quanty = \$('input[name=\\'product-quantity\\']').val();

        if (select == '0') {
            \$('.select').addClass('main-input error')
        } else {
            \$('.error').removeClass('main-input error')
            cart.add(select, quanty)
        }
    });
    \$(document).on('click', '.gift-card__tabs-item a', function (e) {
        e.preventDefault();
        var id = \$(this).data('id');
        uploadgiftcard(id);
    });
    \$(document).ready(function () {
        var id = 158;
        uploadgiftcard(id);
    });

    function uploadgiftcard(id) {
        \$('.active').removeClass('active');
        \$.ajax({
            url: 'index.php?route=product/category/ajaxCategory',
            type: 'post',
            data: 'cat_id=' + id,
            success: function (html) {
                \$('.ajax_gift .gift-card').html(html)
                customSelect.update('selectgift-card__slider');
                \$('.gift-card__slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: true,
                    prevArrow: '<div class=\"main-brands__arrow prev-arrow\"><svg width=\"50\" height=\"12\" viewBox=\"0 0 50 12\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M6.04651 12L7.10465 10.95L2.87209 6.75L50 6.75L50 5.25L2.87209 5.25L7.10465 1.05L6.04651 -3.84254e-06L5.24537e-07 6L6.04651 12Z\" /></svg></div>',
                    nextArrow: '<div class=\"main-brands__arrow next-arrow\"><svg width=\"50\" height=\"12\" viewBox=\"0 0 50 12\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M43.9535 0L42.8953 1.05L47.1279 5.25H0V6.75H47.1279L42.8953 10.95L43.9535 12L50 6L43.9535 0Z\" /></svg></div>',
                    fade: true,
                    rows: 0
                });
                \$('.select__list').mCustomScrollbar();

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "empirehall/template/extension/module/gift_cart_home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="ajax_gift">*/
/*     <div class="gift-card">*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     $(document).on('click', '.buy_gift', function (e) {*/
/*         e.preventDefault();*/
/*         var select = $('select[name=\'select-sum\']').find(":selected").val();*/
/*         var quanty = $('input[name=\'product-quantity\']').val();*/
/* */
/*         if (select == '0') {*/
/*             $('.select').addClass('main-input error')*/
/*         } else {*/
/*             $('.error').removeClass('main-input error')*/
/*             cart.add(select, quanty)*/
/*         }*/
/*     });*/
/*     $(document).on('click', '.gift-card__tabs-item a', function (e) {*/
/*         e.preventDefault();*/
/*         var id = $(this).data('id');*/
/*         uploadgiftcard(id);*/
/*     });*/
/*     $(document).ready(function () {*/
/*         var id = 158;*/
/*         uploadgiftcard(id);*/
/*     });*/
/* */
/*     function uploadgiftcard(id) {*/
/*         $('.active').removeClass('active');*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/category/ajaxCategory',*/
/*             type: 'post',*/
/*             data: 'cat_id=' + id,*/
/*             success: function (html) {*/
/*                 $('.ajax_gift .gift-card').html(html)*/
/*                 customSelect.update('selectgift-card__slider');*/
/*                 $('.gift-card__slider').slick({*/
/*                     slidesToShow: 1,*/
/*                     slidesToScroll: 1,*/
/*                     dots: true,*/
/*                     arrows: true,*/
/*                     prevArrow: '<div class="main-brands__arrow prev-arrow"><svg width="50" height="12" viewBox="0 0 50 12" xmlns="http://www.w3.org/2000/svg"><path d="M6.04651 12L7.10465 10.95L2.87209 6.75L50 6.75L50 5.25L2.87209 5.25L7.10465 1.05L6.04651 -3.84254e-06L5.24537e-07 6L6.04651 12Z" /></svg></div>',*/
/*                     nextArrow: '<div class="main-brands__arrow next-arrow"><svg width="50" height="12" viewBox="0 0 50 12" xmlns="http://www.w3.org/2000/svg"><path d="M43.9535 0L42.8953 1.05L47.1279 5.25H0V6.75H47.1279L42.8953 10.95L43.9535 12L50 6L43.9535 0Z" /></svg></div>',*/
/*                     fade: true,*/
/*                     rows: 0*/
/*                 });*/
/*                 $('.select__list').mCustomScrollbar();*/
/* */
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     }*/
/* </script>*/
