<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
    <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?php
    $gridColoums = ['company_name', 'telephone', 'mobile1',
        ['class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['class' => 'view', 'data-pjax' => '0']);
                },
                        'update' => function ($url, $model) {
                        return html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['class' => 'update', 'data-pjax' => '0']);
                },
                    //   'delete'
                    ]
                ],
            ];
            ?>

            <?=
            GridView::widget([
                'id' => 'contact-grid',
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'headerRowOptions' => ['class' => 'kartik-sheet-style'],
                'filterRowOptions' => ['class' => 'kartik-sheet-style'],
                'pjax' => true,
                'export' => false,
                'responsive' => true,
                'hover' => true,
                'toolbar' => [
                    ['content' =>
                        //Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'button', 'title' => Yii::t('app', 'Add Book'), 'class' => 'btn btn-success', 'id' => 'semester_create_grid']) . ' ' .
                        Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => Yii::t('app', 'Reset Grid')])
                    ],
                    '{export}',
                    '{toggleData}',
                ],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                ],
                'columns' => $gridColoums,
            ]);
            ?>





            <?php
            //    GridView::widget([
            //        'dataProvider' => $dataProvider,
            //        'filterModel' => $searchModel,
            //        'columns' => [
            //            ['class' => 'yii\grid\SerialColumn'],
            ////            'id',
            //            'company_name',
            //            'telephone',
            //            'mobile1',
            ////            'mobile2',
            //            // 'fax',
            //            'email1:email',
            //            // 'email2:email',
            //            // 'map_link',
            //            // 'doc',
            //            // 'dou',
            //            // 'status',
            //            ['class' => 'yii\grid\ActionColumn'],
            //        ],
            //    ]);
            ?>
        </div>
        <?php
        yii\bootstrap\Modal::begin([
            'id' => 'contactModal',
        ]);
        yii\bootstrap\Modal::end();


        $this->registerJs(
                "$(document).on('ready pjax:success', function() {
                $('.view').click(function(e){
                   e.preventDefault();
                   $('#contactModal').modal('show')
                              .find('.modal-content')
                              .load($(this).attr('href'));
               });
            });
        ");

//        $this->registerJs(
//                "$(document).on('ready pjax:success', function() {
//                 $('.update').click(function(e){
//                        e.preventDefault();
//                        $('#userModal').modal('show')
//                  .find('.modal-content')
//                  .load($(this).attr('href'));
//                });
//                });
//             ");
