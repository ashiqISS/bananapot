<?php

namespace backend\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle {

        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
            //'plugins/bootstrap/css/bootstrap.css',
            'plugins/node-waves/waves.css',
            'plugins/animate-css/animate.css',
            'css/style.css',
        ];
        public $js = [
            'plugins/node-waves/waves.js',
            'plugins/jquery-validation/jquery.validate.js',
            'js/admin.js',
        ];
        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];

}
