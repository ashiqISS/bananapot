<?php

namespace frontend\controllers;

use Yii;
use common\models\Faq;
use common\models\FaqSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class FaqController extends Controller {

        public function actionIndex() {
                $model = Faq::find()->where(['status' => 1])->limit('5')->orderBy('id DESC')->all();
                return $this->render('index', ['model' => $model]);
        }

}
