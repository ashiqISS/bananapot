<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property integer $cb
 * @property integer $ub
 * @property string $doc
 * @property string $dou
 * @property integer $status
 */
class Faq extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'faq';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['question', 'answer'], 'required'],
                    [['answer'], 'string'],
                    [['cb', 'ub', 'status'], 'integer'],
                    [['doc', 'dou'], 'safe'],
                    [['question'], 'string', 'max' => 500],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'question' => 'Question',
                    'answer' => 'Answer',
                    'cb' => 'Cb',
                    'ub' => 'Ub',
                    'doc' => 'Doc',
                    'dou' => 'Dou',
                    'status' => 'Status',
                ];
        }

}
