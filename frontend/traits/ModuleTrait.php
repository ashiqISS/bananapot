<?php

namespace bananapot\frontend\traits;

use bananapot\frontend\Module;

/**
 * Trait ModuleTrait
 * @property-read Module $module
 * @package dektrium\user\traits
 */
trait ModuleTrait {

        /**
         * @return Module
         */
        public function getModule() {
                return \Yii::$app->getModule('user');
        }

}
