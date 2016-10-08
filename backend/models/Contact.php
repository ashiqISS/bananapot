<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact_details".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $telephone
 * @property string $mobile1
 * @property string $mobile2
 * @property string $fax
 * @property string $email1
 * @property string $email2
 * @property string $map_link
 * @property string $doc
 * @property string $dou
 * @property integer $status
 */
class Contact extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'contact_details';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['company_name', 'telephone', 'mobile1', 'email1', 'map_link'], 'required'],
                    [['doc', 'dou'], 'safe'],
                    [['mobile1', 'status'], 'integer'],
                    [['email1', 'email2'], 'email'],
                    [['company_name', 'fax', 'email1', 'email2'], 'string', 'max' => 200],
                    [['telephone'], 'string', 'max' => 20],
                    [['mobile1', 'mobile2'], 'string', 'max' => 15],
                    [['map_link'], 'string', 'max' => 500],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'company_name' => 'Company Name',
                    'telephone' => 'Telephone',
                    'mobile1' => 'Mobile',
                    'mobile2' => 'Mobile2',
                    'fax' => 'Fax',
                    'email1' => 'Email',
                    'email2' => 'Email2',
                    'map_link' => 'Map Link',
                    'doc' => 'Doc',
                    'dou' => 'Dou',
                    'status' => 'Status',
                ];
        }

}
