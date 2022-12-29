<?php

namespace frontend\widgets;

use Yii;
use yii\helpers\Html;

class GoogleMaps extends \yii\bootstrap5\Widget
{
    private $java_script = '';

    public function init()
    {
        $this->java_script = <<< JS
google.maps.event.addDomListener( window, 'load', init );
function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(49.444433,32.059767),

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googlemaps');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }
JS;

    }


    /**
     * {@inheritdoc}
     */
    public function run()
    {
        ?>
        <div id="googlemaps"></div>
        <!-- GOOGLE MAPS DATA -->

        <?php
        $this->view->registerJs($this->java_script, yii\web\View::POS_READY);
    }
}