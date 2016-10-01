<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
    <div class="logo">

        <a href="javascript:void(0);"><?= Html::encode($this->title) ?></a>

    </div>
    <div class="card">
        <div class="body">
            <?php $form = ActiveForm::begin(['id' => 'admin-login-form']); ?>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => true])->label(FALSE) ?>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'password',])->label(FALSE) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 p-t-5">
                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                    <label for="rememberme">Remember Me</label>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>