<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">


    <?php
    $gridColoums = ['parent', 'category_name',
        ['class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['class' => 'view', 'data-pjax' => '0']);
                },
                        'update' => function ($url, $model) {
                        return html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['class' => 'update', 'data-pjax' => '0']);
                },
                        'delete'
                    ]
                ],
            ];
            ?>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'id' => 'grid-admin',
                //'filterModel' => $searchModel,
                'headerRowOptions' => ['class' => 'kartik-sheet-style'],
                'filterRowOptions' => ['class' => 'kartik-sheet-style'],
                'pjax' => true,
                'export' => false,
                'responsive' => true,
                'toolbar' => [
                    ['content' =>
                        Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'button', 'title' => Yii::t('app', 'Add category'), 'class' => 'btn btn-success', 'id' => 'create_category']) . ' ' .
                        Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => Yii::t('app', 'Reset Grid')])
                    ],
                ],
                'panel' => [
                    'type' => GridView::TYPE_PRIMARY,
                ],
                'columns' => $gridColoums,
            ]);
            ?>
        </div>

        <?php
        yii\bootstrap\Modal::begin([
            'id' => 'categoryModal',
        ]);
        yii\bootstrap\Modal::end();
        $this->registerJs(
                "$(document).ready(function() {
               $('#create_category').on('click',function(e){
                        var url  = baseurl + 'category/create';
                         $('#categoryModal').modal('show')
                         .find('.modal-content')
                        .load(url);
                        });
            });
        ");
        $this->registerJs(
                "$(document).on('ready pjax:success', function() {
                $('.view').click(function(e){
                   e.preventDefault();
                   $('#categoryModal').modal('show')
                              .find('.modal-content')
                              .load($(this).attr('href'));
               });
            });
        ");

        $this->registerJs(
                "$(document).on('ready pjax:success', function() {
                 $('.update').click(function(e){
                        e.preventDefault();
                        $('#categoryModal').modal('show')
                  .find('.modal-content')
                  .load($(this).attr('href'));
                });
                });
             ");
