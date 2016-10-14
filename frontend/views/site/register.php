<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
//use kartik\date\DatePicker;
use yii\yiisoft\jui\JuiAsset;
?>
<html>
        <head>
                <title>Account Information</title>
        </head>
        <body>
                <section class="content">
                        <div class="container">
                                <div class="row">
                                        <div class="col-xs-12 col-sm-3">


                                                <div class="side_menu account_menu">
                                                        <div class="responsive hidden-sm hidden-md hidden-lg ">
                                                                <nav class="navbar navbar-default hidden-sm hidden-md hidden-lg">
                                                                        <div class="container-fluid">
                                                                                <!-- Brand and toggle get grouped for better mobile display -->
                                                                                <div class="navbar-header">
                                                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                                                                <span class="sr-only"></span>
                                                                                                <span class="icon-bar"></span>
                                                                                                <span class="icon-bar"></span>
                                                                                                <span class="icon-bar"></span>
                                                                                        </button>
                                                                                </div>
                                                                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                                                        <ul class="nav navbar-nav">

                                                                                        </ul>


                                                                                </div>
                                                                        </div>
                                                                </nav>
                                                        </div>
                                                        <aside id="sidebar">


                                                                <div class="inside">
                                                                </div>
                                                        </aside>

                                                </div>
                                        </div>
                                        <div class="main_content col-xs-12 col-sm-9" id="content">
                                                <div class="account_info">
                                                        <ul class="list-inline list-unstyled right_top_way">
                                                                <li><a class="simple" href="#">Bananapot </a> &nbsp; &nbsp; <i class="fa fa-angle-double-right"></i></li>
                                                                <li>Registration</li>
                                                        </ul>

                                                        <?php if (Yii::$app->session->hasFlash('success')): ?>
                                                                <div class="alert alert-success ">
                                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                        <strong>Success!</strong> <?= Yii::$app->session->getFlash('success'); ?>
                                                                </div>
                                                        <?php endif; ?>
                                                        <?php if (Yii::$app->session->hasFlash('error')): ?>
                                                                <div class="alert alert-danger ">
                                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                        <strong>Danger!</strong><?= Yii::$app->session->getFlash('error'); ?>
                                                                </div>
                                                        <?php endif; ?>

                                                        <?php
                                                        $form = ActiveForm::begin(['id' => 'user-details-form', 'options' => ['role' => 'form']]);
                                                        $labels = $model->attributeLabels();
                                                        ?>

                                                        <div class="row">
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'first_name', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-23">
                                                                                        <i class="fa fa-fw fa-user icon icon--fumi" aria-hidden="true"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"> <?= Html::activeLabel($model, 'first_name'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'first_name'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'last_name', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-24">
                                                                                        <i class="fa fa-fw fa-user icon icon--fumi" aria-hidden="true"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'last_name'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'last_name'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?php
//                                                                                $form->field($model, 'from_date')->widget(yii\yiisoft\jui\JuiAsset::classname(), [
////                                                                                        'language' => 'ru',
//                                                                                        //'dateFormat' => 'yyyy-MM-dd',
//                                                                                ])
                                                                                ?>
                                                                                <?= Html::activeTextInput($model, 'dob', ['class' => 'input__field input__field--fumi']); ?>

                                                                                <label class="input__label input__label--fumi" for="input-24">
                                                                                        <i class="fa fa-fw fa-user icon icon--fumi" aria-hidden="true"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'dob'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'dob'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeDropDownList($model, 'gender', ['' => '', '0' => 'Male', '1' => 'Fe-male'], ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-male icon icon--fumi "></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'gender'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'gender'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'email', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-envelope icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'email'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'email'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'phone', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-phone icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'phone'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'phone'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'phone_no_2', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-phone icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'phone_no_2'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'phone_no_2'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'fax', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fax fa-phone icon icon--fumi"></i>
                                                                                        <!--<i class="fa fa-fw fa-phone icon icon--fumi"></i>-->
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'fax'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'fax'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'password', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-key icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'password'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'password'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeTextInput($model, 'confirm_password', ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-key icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'confirm_password'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'confirm_password'); ?>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <?= Html::activeDropDownList($model, 'newsletter', ['' => '', '0' => 'No', '1' => 'Yes'], ['class' => 'input__field input__field--fumi']); ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-newspaper-o fa-male icon icon--fumi "></i>
                                                                                        <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'newsletter'); ?>:</span>
                                                                                </label>
                                                                                <?= Html::error($model, 'newsletter'); ?>
                                                                        </span>
                                                                </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary buynow_btn save_btn "><span>SAVE</span></button>
                                                        <div class="budget_section living_budget wow fadeIn" data-wow-duration="3s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.1s; animation-name: fadeIn;">
                                                                <div class="row">
                                                                        <div class="col-xs-12 col-sm-12 col-md-4 ">
                                                                                <div class="box1">
                                                                                        <h4>budget planner</h4>
                                                                                        <form class="form-inline">
                                                                                                <i class="fa fa-inr inr_edit"></i>
                                                                                                <div class="form-group">
                                                                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="00.00">
                                                                                                </div>
                                                                                                <button type="submit" class="btn btn-primary go_btn"><span>Go</span></button>
                                                                                        </form>
                                                                                </div>
                                                                        </div>

                                                                        <div class="col-xs-6 col-sm-6 col-md-4">
                                                                                <div class="box2">
                                                                                        <img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/home_deli.jpg">
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-sm-6 col-md-4">
                                                                                <div class="box3">
                                                                                        <img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/banana_port_img.jpg">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <?php ActiveForm::end(); ?>
                                                </div>
                                        </div>
                                </div>
                        </div>

                </section>

                                                                                <!--                <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
                                                                                <script src="js/bootstrap.js" type="text/javascript"></script>
                                                                                <script src="js/slick.js" type="text/javascript"></script>
                                                                                <script src="js/classie.js" type="text/javascript"></script>
                                                                                <script src="js/jquery.fs.selecter.min.js" type="text/javascript"></script>
                                                                                <script src="js/wow.js" type="text/javascript"></script>
                                                                                <script src="js/jquery-ui.js" type="text/javascript"></script>
                                                                                <script src="js/nivo-lightbox.js"></script>
                                                                                <script src="js/stickySidebar.js"></script>
                                                                                <script src="js/custom.js" type="text/javascript"></script>-->

                                                                                <!--        <script>

                                                                                (function($))(jQuery);
                                                                                var selectIds = $('#panel1,#panel2,#panel3,#panel4,#panel5,#panel6,#panel7,#panel8,#panel9,#panel20,#panel21,#panel22,#panel23,#panel24,#panel25,#panel26,#panel27,#panel28,#panel2');
                                                                                $(function ($) {
                                                                                selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
                                                                                $(this).prev().find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
                                                                                })
                                                                                });
                                                                                </script>-->




        </body>
</html>
