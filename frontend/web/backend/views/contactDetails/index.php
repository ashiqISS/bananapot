<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'company_name',
            'telephone',
            'mobile1',
            'mobile2',
            // 'fax',
            // 'email1:email',
            // 'email2:email',
            // 'map_link',
            // 'doc',
            // 'dou',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
