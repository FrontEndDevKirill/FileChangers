<?php

namespace app\assets;

use yii\web\AssetBundle;

class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'css/styleProfile.css',
        'css/font-awesome.min.css',
        'css/fontawesome-webfont.woff2',
        'css/fontawesome-webfont.woff',
        'css/fontawesome-webfont.ttf',
        'https://code.getmdl.io/1.3.0/material.indigo-pink.min.css',

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



