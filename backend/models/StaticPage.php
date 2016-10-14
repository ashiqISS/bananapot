<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "static_page".
 *
 * @property integer $id
 * @property string $category_name
 * @property string $category_name
 * @property string $tittle
 * @property string $content
 * @property string $small_content
 * @property string $image
 * @property integer $cb
 * @property integer $ub
 * @property string $doc
 * @property string $dou
 * @property integer $status
 */
class StaticPage extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public $file;

        public static function tableName() {
                return 'static_page';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['category_name', 'tittle', 'content'], 'required'],
                    [['content', 'small_content'], 'string'],
                    [['cb', 'ub', 'status'], 'integer'],
                    [['doc', 'dou'], 'safe'],
                    [['category_name', 'tittle'], 'string', 'max' => 200],
                ];
        }

        public function upload($file, $id) {
                if (\yii::$app->basePath . '/../uploads') {
                        chmod(\yii::$app->basePath . '/../uploads', 0777);

                        if (!is_dir(\yii::$app->basePath . '/../uploads/static/')) {
                                mkdir(\yii::$app->basePath . '/../uploads/static/');
                                chmod(\yii::$app->basePath . '/../uploads/static/', 0777);
                        }
                        if (!is_dir(\yii::$app->basePath . '/../uploads/static/' . $id . '/')) {
                                mkdir(\yii::$app->basePath . '/../uploads/static/' . $id . '/');
                                chmod(\yii::$app->basePath . '/../uploads/static/' . $id . '/', 0777);
                        }

                        if ($file->saveAs(\yii::$app->basePath . '/../uploads/static/' . $id . '/' . $id . '.' . $file->extension))
                                chmod(\yii::$app->basePath . '/../uploads/static/' . $id . '/' . $id . '.' . $file->extension, 0777);
                        return true;
                }






//                        $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
//                        return true;
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'category_name' => 'Category Name',
                    'tittle' => 'Tittle',
                    'content' => 'Content',
                    'small_content' => 'Small Content',
                    'image' => 'Image',
                    'cb' => 'Cb',
                    'ub' => 'Ub',
                    'doc' => 'Doc',
                    'dou' => 'Dou',
                    'status' => 'Status',
                ];
        }

}
