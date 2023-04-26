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
        'css/plugins.css',
        'css/style.css',
    ];

    public $js = [
		'js/jquery.js',
		'js/plugins.js',
		'js/init.js'
    ];

    public $depends = [
       // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
