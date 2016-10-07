<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TaxRates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tax-rates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tax_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_rate')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'zone')->textInput() ?>

    <?= $form->field($model, 'doc')->textInput() ?>

    <?= $form->field($model, 'dou')->textInput() ?>

    <?= $form->field($model, 'cb')->textInput() ?>

    <?= $form->field($model, 'ub')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
