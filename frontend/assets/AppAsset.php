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
        //'css/site.css',
        'css/bootstrap.css',
        'css/crosscover.css',
        'css/inner-style.css',
        'css/main-style.css',
        'css/reset.css',
        'css/scrolling-nav.css',
        'css/custome-css.css'
    ];
    public $js = [
    'js/bootstrap.min.js',
    'js/custom.js',
    'js/crosscover.js',
     'js/jquery.easing.min.js',
     'js/jquery.min.js',
     'js/jquery.shuffle.min.js',
     'js/prettymaps.js',
     'js/scrolling-nav.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
