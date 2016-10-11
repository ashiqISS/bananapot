<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "contact_us".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $doc
 * @property integer $cb
 * @property integer $status
 */
class ContactUs extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'contact_us';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['name', 'email', 'phone', 'message'], 'required'],
                    [['message'], 'string'],
                    [['name', 'email'], 'string', 'max' => 200],
                    [['phone'], 'string', 'max' => 20],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'name' => 'Name',
                    'email' => 'Email',
                    'phone' => 'Phone',
                    'message' => 'Message',
                    'doc' => 'Doc',
                    'cb' => 'Cb',
                    'status' => 'Status',
                ];
        }

}
