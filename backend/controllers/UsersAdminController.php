<?php

namespace backend\controllers;

use Yii;
use backend\models\UsersAdmin;
use backend\models\UsersAdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminUsersController implements the CRUD actions for AdminUsers model.
 */
class UsersAdminController extends Controller {

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
         * Lists all AdminUsers models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new UsersAdminSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single AdminUsers model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                if (Yii::$app->request->isAjax) {
                        return $this->renderAjax('view', [
                                    'model' => $this->findModel($id),
                        ]);
                } else {
                        return $this->render('view', [
                                    'model' => $this->findModel($id),
                        ]);
                }
        }

        /**
         * Creates a new AdminUsers model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new UsersAdmin();

                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        if (Yii::$app->request->isAjax) {
                                return $this->renderAjax(['index']);
                        } else {
                                return $this->redirect(['index']);
                        }
                } else {
                        if (Yii::$app->request->isAjax) {
                                return $this->renderAjax('create', [
                                            'model' => $model,
                                ]);
                        } else {
                                return $this->render('create', [
                                            'model' => $model,
                                ]);
                        }
                }
        }

        /**
         * Updates an existing AdminUsers model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);
                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        if (Yii::$app->request->isAjax) {
                                return $this->renderAjax(['index']);
                        } else {
                                return $this->redirect(['index']);
                        }
                } else {
                        if (Yii::$app->request->isAjax) {
                                return $this->renderAjax('update', [
                                            'model' => $model,
                                ]);
                        } else {
                                return $this->render('update', [
                                            'model' => $model,
                                ]);
                        }
                }
        }

        /**
         * Deletes an existing AdminUsers model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $this->findModel($id)->delete();

                return $this->redirect(['index']);
        }

        /**
         * Finds the AdminUsers model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return AdminUsers the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = UsersAdmin::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
