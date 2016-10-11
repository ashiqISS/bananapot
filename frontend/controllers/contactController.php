<?php

namespace frontend\controllers;

use Yii;
use backend\models\Contact;
use backend\models\ContactSearch;
use frontend\models\ContactUs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ContactController extends \yii\web\Controller {

        public function actionIndex() {
                $model = new ContactUs();
                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        Yii::$app->getSession()->setFlash('success', ' Your Request sent successfully');
                        return $this->redirect(['index']);
                }
                $contact = Contact::find()->where(['status' => '1'])->orderBy('id DESC')->one();
                return $this->render('index', ['contact' => $contact, 'model' => $model]);
        }

}
