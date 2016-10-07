<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CurrencySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currency-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'currency') ?>

    <?= $form->field($model, 'currency_code') ?>

    <?= $form->field($model, 'symbol') ?>

    <?php // echo $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'cb') ?>

    <?php // echo $form->field($model, 'ub') ?>

    <?php // echo $form->field($model, 'doc') ?>

    <?php // echo $form->field($model, 'dou') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
