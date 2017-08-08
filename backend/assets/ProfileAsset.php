<?php

namespace app\assets;

use yii\web\AssetBundle;

class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [


        'css/font-awesome.min.css',
        'fonts/fontawesome-webfont.woff2',
        'fonts/fontawesome-webfont.woff',
        'fonts/fontawesome-webfont.ttf',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'https://code.getmdl.io/1.3.0/material.indigo-pink.min.css',
        'css/styleProfile.css',
    ];
    public $cssOptions = [
        'type' => 'text/css',
    ];
    public $js = [
        'js/cash.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}



