<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StaticPage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Static Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'category_name',
            'tittle',
            'content:ntext',
            'small_content:ntext',
            'image',
//            array('name' => 'image',
//                'value' => function ($model) {
//                        return '<img style="width:100px;height:100px;" src="' . Yii::app()->baseUrl . '/uploads/' . $model->id . '/' . $model->id . '.' . $model->image . '">';
//                },
//                'type' => 'raw',
//            ),
//            'cb',
//            'ub',
//            'doc',
//            'dou',
//            'status',
        ],
    ])
    ?>

</div>
