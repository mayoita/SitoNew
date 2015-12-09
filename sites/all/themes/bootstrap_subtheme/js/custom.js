/**
 * Created by massimomoro on 02/11/15.
 */
// Add card flipover

(function ($, Drupal, window, document, undefined) {

    $(document).ready(function(){


        // Add card flipover
        $('.jcarousel-row').hover(function(){
            $(this).find('.views-field-field-preview-image').addClass('highlight-card-hover');
            var width_box = $('.jcarousel').find('.jcarousel-row').width();
            $('.highlight-card-hover').css('bottom',Math.ceil(width_box) + 'px');
        }, function(){
            $(this).find('.views-field-field-preview-image').removeClass('highlight-card-hover');
            $('.views-field-field-preview-image').css('bottom',0 + 'px');
        });
        // Link highligt to dest URL
        $('.highlight-item').click(function(){
            window.location=$(this).find("a").attr("href");
            return false;
        });
        if ($(".field-name-field-cover-image")[0]) {
            $('.image_bg').css('top', Math.ceil($('.field-name-field-cover-image').height() + 120) + 'px');
        }
        if ($(".carousel-inner")[0]) {
            $('.image_bg').css('top', Math.ceil($('.carousel-inner').height() + 120) + 'px');
        }
        /*
         * Custom shortcodes: box-toggle
         */
        $('h3.box-toggle').click(function(){
            if ($(this).next().hasClass('box-content-collapsed')){
                $(this).next().removeClass('box-content-collapsed')
            } else {
                $(this).next().addClass('box-content-collapsed')
            }
        });


    });
    $( window ).resize(function() {

        if ($(".field-name-field-cover-image")[0]) {
            $('.image_bg').css('top', Math.ceil($('.field-name-field-cover-image').height() + 120) + 'px');
        }
        if ($(".carousel-inner")[0]) {
            $('.image_bg').css('top', Math.ceil($('.carousel-inner').height() + 120) + 'px');
        }
    });

})(jQuery, Drupal, this, this.document);

