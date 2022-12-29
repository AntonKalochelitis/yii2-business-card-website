<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // Font-Awesome
        'assets/font-awesome/css/font-awesome.min.css',
        // Lightbox
        'assets/lightbox/css/lightbox.css',
        // Text Rotator
        'assets/textrotator/simpletextrotator.css',
        // FlexSlider
        'assets/flexslider/flexslider.css',
        // Theme Style -->
        'css/style.css',
        // Animations -->
        'css/animate.css'
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
        // SmoothScroll
        'assets/smoothscroll/smoothscroll.js',
        // Waypoints
        'js/waypoints.min.js',
        // classie.js
        'js/classie.js',
        // FlexSlider
        'assets/flexslider/jquery.flexslider.js',
        // Modernizr
        'js/modernizr.js',
        // Text Rotator
        'assets/textrotator/jquery.simple-text-rotator.js',
        // Lightbox.js
        'assets/lightbox/js/lightbox.min.js',
        // Google Maps
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false',
        // Theme JavaScript Core
        'js/main.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
