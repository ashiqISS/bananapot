
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
                                                        <?php

                                                        use yii\helpers\Html;
                                                        use yii\widgets\ActiveForm;
                                                        use yii\helpers\Url;
                                                        use yii\helpers\ArrayHelper;
                                                        ?>
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
                                                                                $from = date('Y') - 80;
                                                                                $to = date('Y') + 20;
                                                                                $this->widget('widgets.jui.CJuiDatePicker', array(
                                                                                    'model' => $model,
                                                                                    'attribute' => 'dob',
                                                                                    'value' => 'dob',
                                                                                    'options' => array(
                                                                                        'dateFormat' => 'yy-mm-dd',
                                                                                        'changeYear' => true, // can change year
                                                                                        'changeMonth' => true, // can change month
                                                                                        'yearRange' => $from . ':' . $to, // range of year
                                                                                        'showButtonPanel' => true, // show button panel
                                                                                    ),
                                                                                    'htmlOptions' => array(
                                                                                        'size' => '10', // textField size
                                                                                        'maxlength' => '10', // textField maxlength
                                                                                        'class' => 'input__field input__field--fumi',
                                                                                    ),
                                                                                ));
                                                                                ?>
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-calendar icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Date Of Birth:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-male icon icon--fumi "></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Gender:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-envelope icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">E-maii:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-phone icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Phone:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-phone icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Phone No 2:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-fax icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Fax:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-key icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Password:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-key icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Confirm:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-4">
                                                                        <span class="input input--fumi">
                                                                                <input class="input__field input__field--fumi" type="text" id="input-25" />
                                                                                <label class="input__label input__label--fumi" for="input-25">
                                                                                        <i class="fa fa-fw fa-newspaper-o icon icon--fumi"></i>
                                                                                        <span class="input__label-content input__label-content--fumi">Newsletter:</span>
                                                                                </label>
                                                                        </span>
                                                                </div>
                                                        </div>
                                                        <?php ActiveForm::end(); ?>
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
