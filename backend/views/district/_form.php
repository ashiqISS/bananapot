<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Districts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="districts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'district_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>