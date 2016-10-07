<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "districts".
 *
 * @property integer $id
 * @property integer $state_id
 * @property string $district_name
 * @property integer $status
 */
class Districts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'districts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'district_name', 'status'], 'required'],
            [['state_id', 'status'], 'integer'],
            [['district_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_id' => 'State ID',
            'district_name' => 'District Name',
            'status' => 'Status',
        ];
    }
}
