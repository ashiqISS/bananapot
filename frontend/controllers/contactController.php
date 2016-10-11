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
                $model->doc = date('Y-m-d');
                if ($model->load(Yii::$app->request->post()) && $model->save()) {
//                        Yii::$app->mailer->compose()
//                                ->setFrom('siyad@intersmart.in')
//                                ->setTo('siyad@intersmart.in')
//                                ->setSubject('Message subject')
//                                ->setTextBody('Plain text content')
//                                ->setHtmlBody('<b>HTML content</b>')
//                                ->send();
                        Yii::$app->getSession()->setFlash('success', ' Your Request sent successfully');
                        return $this->redirect(['index']);
                }
                $contact = Contact::find()->where(['status' => '1'])->orderBy('id DESC')->one();
                return $this->render('index', ['contact' => $contact, 'model' => $model]);
        }

}
