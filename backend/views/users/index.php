<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
    	'id' => 'user-grid',
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
    		'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    		'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    		'pjax'=>true,
    		
    		'export'=>false,
    		'responsive'=>true,
    		'hover'=>true,
    		'toolbar'=> [
    				['content'=>
    						// Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('app', 'Add Book'), 'class'=>'btn btn-success', 'id'=>'semester_create_grid']) . ' '.
    						Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax'=>0, 'class'=>'btn btn-default', 'title'=>Yii::t('app', 'Reset Grid')])
    				],
    				'{export}',
    				'{toggleData}',
    		],
    		'panel' => [
    				'type' => GridView::TYPE_PRIMARY,
    				 
    		],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'username',
            'name',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
