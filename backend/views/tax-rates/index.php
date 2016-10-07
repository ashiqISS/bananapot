<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TaxRatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tax Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tax-rates-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tax Rates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tax_name',
            'tax_rate',
            'type',
            'zone',
            // 'doc',
            // 'dou',
            // 'cb',
            // 'ub',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
