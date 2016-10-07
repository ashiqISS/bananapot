<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "master_tax_class".
 *
 * @property integer $id
 * @property string $tax_class_name
 * @property string $tax_rate
 * @property string $doc
 * @property string $dou
 * @property integer $cb
 * @property integer $ub
 * @property integer $status
 */
class TaxClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_tax_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tax_class_name', 'tax_rate', 'doc', 'cb', 'ub', 'status'], 'required'],
            [['doc', 'dou'], 'safe'],
            [['cb', 'ub', 'status'], 'integer'],
            [['tax_class_name', 'tax_rate'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tax_class_name' => 'Tax Class Name',
            'tax_rate' => 'Tax Rate',
            'doc' => 'Doc',
            'dou' => 'Dou',
            'cb' => 'Cb',
            'ub' => 'Ub',
            'status' => 'Status',
        ];
    }
}
