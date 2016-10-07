<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TaxRatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tax-rates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tax_name') ?>

    <?= $form->field($model, 'tax_rate') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'zone') ?>

    <?php // echo $form->field($model, 'doc') ?>

    <?php // echo $form->field($model, 'dou') ?>

    <?php // echo $form->field($model, 'cb') ?>

    <?php // echo $form->field($model, 'ub') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
