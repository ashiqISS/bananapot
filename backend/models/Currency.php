<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "master_currency".
 *
 * @property integer $id
 * @property string $country
 * @property string $currency
 * @property string $currency_code
 * @property string $symbol
 * @property double $rate
 * @property string $image
 * @property integer $cb
 * @property integer $ub
 * @property string $doc
 * @property string $dou
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_currency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'currency', 'currency_code', 'symbol', 'rate', 'image', 'cb', 'ub', 'doc'], 'required'],
            [['rate'], 'number'],
            [['cb', 'ub'], 'integer'],
            [['doc', 'dou'], 'safe'],
            [['country', 'currency', 'currency_code'], 'string', 'max' => 50],
            [['symbol', 'image'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'currency' => 'Currency',
            'currency_code' => 'Currency Code',
            'symbol' => 'Symbol',
            'rate' => 'Rate',
            'image' => 'Image',
            'cb' => 'Cb',
            'ub' => 'Ub',
            'doc' => 'Doc',
            'dou' => 'Dou',
        ];
    }
}
