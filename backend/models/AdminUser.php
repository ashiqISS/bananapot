<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "admin_users".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $role
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property integer $gender
 * @property string $dob
 * @property string $native_place
 * @property string $education
 * @property string $edu_cat
 * @property integer $mbbs_year
 */
class AdminUser extends \yii\db\ActiveRecord implements IdentityInterface {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'admin_users';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status', 'role', 'created_at', 'updated_at', 'first_name', 'last_name', 'gender', 'dob', 'education', 'edu_cat', 'mbbs_year'], 'required'],
                    [['status', 'role', 'created_at', 'updated_at', 'gender', 'mbbs_year'], 'integer'],
                    [['dob'], 'safe'],
                    [['username', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
                    [['auth_key'], 'string', 'max' => 32],
                    [['email', 'native_place'], 'string', 'max' => 100],
                    [['first_name', 'last_name', 'education', 'edu_cat'], 'string', 'max' => 150],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'username' => 'Username',
                    'auth_key' => 'Auth Key',
                    'password_hash' => 'Password Hash',
                    'password_reset_token' => 'Password Reset Token',
                    'email' => 'Email',
                    'status' => 'Status',
                    'role' => 'Role',
                    'created_at' => 'Created At',
                    'updated_at' => 'Updated At',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'gender' => 'Gender',
                    'dob' => 'Dob',
                    'native_place' => 'Native Place',
                    'education' => 'Education',
                    'edu_cat' => 'Edu Cat',
                    'mbbs_year' => 'Mbbs Year',
                ];
        }

        /** INCLUDE USER LOGIN VALIDATION FUNCTIONS* */

        /**
         * @inheritdoc
         */
        public static function findIdentity($id) {
                return static::findOne($id);
        }

        /**
         * @inheritdoc
         */
        /* modified */
        public static function findIdentityByAccessToken($token, $type = null) {
                return static::findOne(['access_token' => $token]);
        }

        /* removed
          public static function findIdentityByAccessToken($token)
          {
          throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
          }
         */

        /**
         * Finds user by username
         *
         * @param  string      $username
         * @return static|null
         */
        public static function findByUsername($username) {
                return static::findOne(['username' => $username]);
        }

        /**
         * Finds user by password reset token
         *
         * @param  string      $token password reset token
         * @return static|null
         */
        public static function findByPasswordResetToken($token) {
                $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
                $parts = explode('_', $token);
                $timestamp = (int) end($parts);
                if ($timestamp + $expire < time()) {
                        // token expired
                        return null;
                }

                return static::findOne([
                            'password_reset_token' => $token
                ]);
        }

        /**
         * @inheritdoc
         */
        public function getId() {
                return $this->getPrimaryKey();
        }

        /**
         * @inheritdoc
         */
        public function getAuthKey() {
                return $this->auth_key;
        }

        /**
         * @inheritdoc
         */
        public function validateAuthKey($authKey) {
                return $this->getAuthKey() === $authKey;
        }

        /**
         * Validates password
         *
         * @param  string  $password password to validate
         * @return boolean if password provided is valid for current user
         */
        public function validatePassword($password) {
                print_r(sha1($password));
                exit();
                return $this->password === sha1($password);
        }

        /**
         * Generates password hash from password and sets it to the model
         *
         * @param string $password
         */
        public function setPassword($password) {
                $this->password_hash = Security::generatePasswordHash($password);
        }

        public function getPassword() {
                return '';
        }

        /**
         * Generates "remember me" authentication key
         */
        public function generateAuthKey() {
                $this->auth_key = Security::generateRandomKey();
        }

        /**
         * Generates new password reset token
         */
        public function generatePasswordResetToken() {
                $this->password_reset_token = Security::generateRandomKey() . '_' . time();
        }

        /**
         * Removes password reset token
         */
        public function removePasswordResetToken() {
                $this->password_reset_token = null;
        }

        /** EXTENSION MOVIE * */
}
