<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "master_countries".
 *
 * @property integer $id
 * @property string $country_name
 * @property string $country_code
 * @property integer $status
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['status'], 'integer'],
            [['country_name'], 'string', 'max' => 100],
            [['country_code'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_name' => 'Country Name',
            'country_code' => 'Country Code',
            'status' => 'Status',
        ];
    }
}
