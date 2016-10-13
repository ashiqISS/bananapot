<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_details".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $dob
 * @property integer $gender
 * @property string $email
 * @property string $phone
 * @property string $phone_no_2
 * @property string $fax
 * @property string $password
 * @property string $confirm_password
 * @property integer $newsletter
 * @property string $doc
 * @property integer $cb
 * @property string $dou
 * @property integer $ub
 * @property integer $status
 * @property integer $email_verification
 */
class UserDetails extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'user_details';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['first_name', 'last_name', 'dob', 'gender', 'email', 'phone', 'password', 'confirm_password'], 'required'],
                    [['gender', 'newsletter', 'cb', 'ub', 'status', 'email_verification'], 'integer'],
                    [['doc', 'dou'], 'safe'],
                    [['first_name', 'last_name', 'dob', 'email', 'phone', 'phone_no_2', 'fax', 'password', 'confirm_password'], 'string', 'max' => 250],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'dob' => 'Dob',
                    'gender' => 'Gender',
                    'email' => 'Email',
                    'phone' => 'Phone',
                    'phone_no_2' => 'Phone No 2',
                    'fax' => 'Fax',
                    'password' => 'Password',
                    'confirm_password' => 'Confirm Password',
                    'newsletter' => 'Newsletter',
                    'doc' => 'Doc',
                    'cb' => 'Cb',
                    'dou' => 'Dou',
                    'ub' => 'Ub',
                    'status' => 'Status',
                    'email_verification' => 'Email Verification',
                ];
        }

}
