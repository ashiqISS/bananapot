<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
    <div class="logo">

        <a href="javascript:void(0);">Admin<b>BSB</b></a>
        <small><?= Html::encode($this->title) ?></small>
    </div>
    <div class="card">
        <div class="body">
            <?php $form = ActiveForm::begin(['id' => 'admin-login-form']); ?>

            <div class="msg">Sign in to start your session</div>
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
                    <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'filled-in chk-col-pink', 'id' => 'rememberme'])->label(FALSE) ?>

                    <label for="rememberme">Remember Me</label>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                </div>
            </div>
            <!-- <div class="row m-t-15 m-b--20">
                 <div class="col-xs-6">
                     <a href="sign-up.html">Register Now!</a>
                 </div>
                 <div class="col-xs-6 align-right">
                     <a href="forgot-password.html">Forgot Password?</a>
                 </div>
             </div>-->
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>