/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    ST-themes <hellolee@gmail.com>
*  @copyright 2007-2017 ST-themes
*  @license   Use, by you or one client for one Prestashop instance.
*/
jQuery(function($){
    $('#st_optimize_images').click(function(){
        if(!confirm(st_optimize_warning)) {
            return false;
        }
        var t = $('input[name="op_act"]:checked').val();
        var q = parseInt($('#op_qty').val());
        var w = parseInt($('#op_width').val());
        var h = parseInt($('#op_height').val());
        var f = $('#op_path').val();

        if (!q) {
            $('#st_optimize_images_message').text(st_optimize_warning_1);
            return false;
        }
        if (!f) {
            $('#st_optimize_images_message').text(st_optimize_warning_3);
            return false;
        }
        if (t == 1 && (!w || !h)) {
            $('#st_optimize_images_message').text(st_optimize_warning_2);
            return false;
        }
        var images = f.split("\n");
        $(this).attr('disabled', true);
        $('#st_optimize_images .st_loading').css('display', 'inline-block');
        $('#st_optimize_images_message').text('');
        $('#st_optimize_result').empty();

        var doOptimization = function(i) {
            var len = images.length;
            if (i < len) {
                $.getJSON(window.location.href, {t:t, q:q, img:encodeURIComponent(images[i]),w:w, h:h, optimize:1}, function(res){
                    $('#st_optimize_result').append('<li>'+images[i]+' <span class="'+res.c+'">'+res.m+'</span></li>');
                    doOptimization(++i);
                });
            } else {
                $('#st_optimize_images .st_loading').css('display', 'none');
                $('#st_optimize_images').attr('disabled', false);
            }
        };
        // Begin to do optimize
        doOptimization(0);
    });
});