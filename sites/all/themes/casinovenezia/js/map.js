(function ($) {
    Drupal.behaviors.loadElaboMap = {
        attach: function (context, settings) {


            // Load settings
            var lat_center = Drupal.settings.custom_variable.latitude;
            var lon_center = Drupal.settings.custom_variable.longitude;
            var zoomlevel =  Drupal.settings.custom_variable.zoom;

            var lat_a = Drupal.settings.custom_variable.latitude_a;
            var lon_a = Drupal.settings.custom_variable.longitude_a;

            var lat_b = Drupal.settings.custom_variable.latitude_b;
            var lon_b = Drupal.settings.custom_variable.longitude_b;

            var icons_path = Drupal.settings.custom_variable.icons_path;
            var icon_a = Drupal.settings.custom_variable.icon_a;
            var icon_b = Drupal.settings.custom_variable.icon_b;

            var name_a = Drupal.settings.custom_variable.name_a;
            var name_b = Drupal.settings.custom_variable.name_b;

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