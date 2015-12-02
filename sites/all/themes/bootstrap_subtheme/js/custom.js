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

        $('.image_bg').css('top',Math.ceil($('.field-name-field-cover-image').height() + 120) + 'px');

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

        //Adjust margin-top for Events body
       // $('.panel-col-first').css('margin-top',Math.ceil($('.field-name-field-cover-image').height()) + 'px');
        $('.image_bg').css('top',Math.ceil($('.field-name-field-cover-image').height() + 120) + 'px');
    });

})(jQuery, Drupal, this, this.document);

(function ($) {
    Drupal.behaviors.loadElaboMap = {
        attach: function (context, settings) {

            var apikey = Drupal.settings.custom_variable.apikey;
            console.log(apikey);
            alert(apikey);

            // Load settings
            var lat_center = Drupal.settings.rsv_casino_map.latitude;
            var lon_center = Drupal.settings.rsv_casino_map.longitude;
            var zoomlevel =  Drupal.settings.rsv_casino_map.zoom;

            var lat_a = Drupal.settings.rsv_casino_map.latitude_a;
            var lon_a = Drupal.settings.rsv_casino_map.longitude_a;

            var lat_b = Drupal.settings.rsv_casino_map.latitude_b;
            var lon_b = Drupal.settings.rsv_casino_map.longitude_b;

            var icons_path = Drupal.settings.rsv_casino_map.icons_path;
            var icon_a = Drupal.settings.rsv_casino_map.icon_a;
            var icon_b = Drupal.settings.rsv_casino_map.icon_b;

            var name_a = Drupal.settings.rsv_casino_map.name_a;
            var name_b = Drupal.settings.rsv_casino_map.name_b;

            var markers =  [
                [name_a, lat_a, lon_a, icon_a],
                [name_b, lat_b, lon_b, icon_b],
            ];


            // Generate map

            // Center coords
            var latlng_center = new google.maps.LatLng(lat_center,lon_center);

            // Place a coords
            var latlng_a = new google.maps.LatLng(lat_a,lon_a);

            // Place b coords
            var latlng_b = new google.maps.LatLng(lat_b,lon_b);

            var myOptions = {
                zoom: zoomlevel,
                center: latlng_center,
                scrollwheel: false,
                panControl: false,
                zoomControl: false,
                mapTypeControl:false,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            var marker, i;

            for (i = 0; i < markers.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(markers[i][1], markers[i][2]),
                    map: map,
                    icon: icons_path + markers[i][3],
                    title: markers[i][0]
                });

                google.maps.event.addListener(marker, 'click', function(){
                    var infowindow = new google.maps.InfoWindow({
                        content: this.title
                    });
                    infowindow.open(map, this);
                });

            }

        }
    }
}(jQuery));