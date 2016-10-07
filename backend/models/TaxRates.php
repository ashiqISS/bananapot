<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mater_tax_rates".
 *
 * @property integer $id
 * @property string $tax_name
 * @property double $tax_rate
 * @property integer $type
 * @property integer $zone
 * @property string $doc
 * @property string $dou
 * @property integer $cb
 * @property integer $ub
 * @property integer $status
 */
class TaxRates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mater_tax_rates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tax_name', 'tax_rate', 'type', 'zone', 'doc', 'cb', 'ub', 'status'], 'required'],
            [['tax_rate'], 'number'],
            [['type', 'zone', 'cb', 'ub', 'status'], 'integer'],
            [['doc', 'dou'], 'safe'],
            [['tax_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tax_name' => 'Tax Name',
            'tax_rate' => 'Tax Rate',
            'type' => 'Type',
            'zone' => 'Zone',
            'doc' => 'Doc',
            'dou' => 'Dou',
            'cb' => 'Cb',
            'ub' => 'Ub',
            'status' => 'Status',
        ];
    }
}
