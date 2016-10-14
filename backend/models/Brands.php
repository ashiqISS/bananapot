<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "master_brands".
 *
 * @property integer $id
 * @property string $brand_name
 * @property string $category_id
 * @property string $logo
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_date
 * @property string $updated_date
 */
class Brands extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'master_brands';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['brand_name', 'logo', 'created_by', 'created_date'], 'required'],
                    [['created_by', 'updated_by'], 'integer'],
                    [['created_date', 'updated_date'], 'safe'],
                    [['brand_name', 'category_id'], 'string', 'max' => 200],
                    [['logo'], 'string', 'max' => 50],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'brand_name' => 'Brand Name',
                    'logo' => 'Logo',
                    'created_by' => 'Created By',
                    'updated_by' => 'Updated By',
                    'created_date' => 'Created Date',
                    'updated_date' => 'Updated Date',
                ];
        }

}
