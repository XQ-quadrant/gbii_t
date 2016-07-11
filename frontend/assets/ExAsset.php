<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ExAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ex/css/style.css',
        'ex/css/self.css',
        'ex/css/style-responsive.css'
    ];

    public $js = [
        //"kode/js/jquery.min.js",
        //"kode/js/bootstrap/bootstrap.min.js",


        //"ex/js/html5shiv.js",
        //"ex/js/respond.min.js",
        //"ex/js/jquery-1.10.2.min.js",
        "ex/js/jquery-ui-1.9.2.custom.min.js",
        "ex/js/jquery-migrate-1.2.1.min.js",
        "ex/js/bootstrap.min.js",
        "ex/js/modernizr.min.js",
        "ex/js/jquery.nicescroll.js",
        "ex/js/scripts.js",
        "ex/js/scripts.js",
        //"unitegallery/package/unitegallery/js/unitegallery.min.js",
        //"unitegallery/package/unitegallery/themes/compact/ug-theme-compact.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
