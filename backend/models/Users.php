<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $role
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public $confirmpassword;

        public static function tableName() {
                return 'users';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['username', 'auth_key', 'password_hash', 'confirmpassword', 'email', 'status', 'role'], 'required'],
                    [['status', 'role'], 'integer'],
                    [['created_at', 'updated_at'], 'safe'],
                    [['username', 'name', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
                    [['auth_key'], 'string', 'max' => 32],
                    [['email'], 'string', 'max' => 100],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'username' => 'Username',
                    'name' => 'Name',
                    'auth_key' => 'Auth Key',
                    'password_hash' => 'Password',
                    'password_reset_token' => 'Password Reset Token',
                    'email' => 'Email',
                    'status' => 'Status',
                    'role' => 'Role',
                    'created_at' => 'Created At',
                    'updated_at' => 'Updated At',
                    'confirmpassword' => 'Confirm Password'
                ];
        }

}
