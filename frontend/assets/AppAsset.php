<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
            'css/bootstrap.min.css',
            'css/font-awesome.css',
            'https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700',
            'css/slick.css',
            'css/slick-theme.css',
            'css/jquery.fs.selecter.min.css',
            'css/animate.css',
            'css/nivo-lightbox.css',
            'themes/default/default.css',
            'https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700',
            'css/style.css',
//            'css/bootstrap.css',
//            'css/color.css',
//            'css/jquery-ui.css',
//            'css/overwrite.css',
//            'css/site.css',
        ];
        public $js = [
            'js/bootsnav.js',
//            'js/bootstrap.js',
            'js/bootstrap.min.js',
            'js/classie.js',
            'js/custom.js',
            'js/jquery.fs.selecter.min.js',
            'js/jquery.lockfixed.js',
            'js/jquery.nail.min.js',
            'js/jquery-2.1.4.min.js',
            'js/jquery-ui.js',
            'js/nivo-lightbox.js',
            'js/slick.js',
            'js/slick.min.js',
            'js/stickySidebar.js',
            'js/wow.js',
        ];
        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];

}
