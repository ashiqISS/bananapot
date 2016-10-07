<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "states".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $state_name
 * @property integer $status
 */
class States extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'states';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'state_name', 'status'], 'required'],
            [['country_id', 'status'], 'integer'],
            [['state_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'state_name' => 'State Name',
            'status' => 'Status',
        ];
    }
}
