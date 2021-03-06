<?php

namespace backend\controllers;

use Yii;
use backend\models\StaticPage;
use backend\models\StaticPageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * StaticPageController implements the CRUD actions for StaticPage model.
 */
class StaticPageController extends Controller {

        /**
         * @inheritdoc
         */
        public function behaviors() {
                return [
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];
        }

        /**
         * Lists all StaticPage models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new StaticPageSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single StaticPage model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new StaticPage model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new StaticPage();

                if ($model->load(Yii::$app->request->post())) {
                        $model->canonical_name = $_POST['StaticPage']['canonical_name'];
                        $file = UploadedFile::getInstance($model, 'image');
                        if ($file)
                                $model->image = $file->extension;
                        if ($model->save()) {
                                if ($file) {
                                        //$model->image = UploadedFile::getInstance($model, 'image');
                                        if ($model->upload($file, $model->id)) {
                                                // file is uploaded successfully
                                        }
                                }
                                return $this->redirect(['index']);
                        }
                } else {
                        return $this->render('create', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Updates an existing StaticPage model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);
                $images = $model->image;
                if ($model->load(Yii::$app->request->post())) {
                        $file = UploadedFile::getInstance($model, 'image');
                        if ($file) {
                                $model->image = $file->extension;
                        } else {
                                $model->image = $images;
                        }
                        if ($model->save()) {
                                if ($file) {
                                        //$model->image = UploadedFile::getInstance($model, 'image');
                                        if ($model->upload($file, $model->id)) {
                                                // file is uploaded successfully
                                        }
                                }
                                return $this->redirect(['index']);
                        }
                } else {
                        return $this->render('update', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Deletes an existing StaticPage model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $this->findModel($id)->delete();

                return $this->redirect(['index']);
        }

        /**
         * Finds the StaticPage model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return StaticPage the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = StaticPage::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
