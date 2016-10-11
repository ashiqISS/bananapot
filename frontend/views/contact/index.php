<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<section class="content">
    <div class="container">
        <div class="row">
            <?= $this->render('../layouts/_leftmenu'); ?>
            <div class="main_content col-xs-12 col-sm-9" id="content">
                <div class="contact_us account_info">
                    <h2>Contact Us</h2>
                    <?php $form = ActiveForm::begin(); ?>
                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                            <div class="alert alert-success normal">
                                <strong>Success!</strong> <?= Yii::$app->session->getFlash('success'); ?>
                            </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <span class="input input--fumi">
                                <?= Html::activeTextInput($model, 'name', ['class' => 'input__field input__field--fumi']); ?>
                                <label class="input__label input__label--fumi" for="input-25">
                                    <i class="fa fa-fw fa-user icon icon--fumi"></i>
                                    <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'name'); ?>:</span>
                                </label>
                            </span>
                            <?= Html::error($model, 'name'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <span class="input input--fumi">
                                <?= Html::activeTextInput($model, 'email', ['class' => 'input__field input__field--fumi']); ?>
                                <!--<input class="input__field input__field--fumi" type="text" id="input-25" />-->
                                <label class="input__label input__label--fumi" for="input-25">
                                    <i class="fa fa-fw fa-envelope icon icon--fumi"></i>
                                    <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'email') ?>:</span>
                                </label>
                            </span>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <span class="input input--fumi">
                                <!--<input class="input__field input__field--fumi" type="text" id="input-25" />-->
                                <?= Html::activeTextInput($model, 'phone', ['class' => 'input__field input__field--fumi']); ?>
                                <label class="input__label input__label--fumi" for="input-25">
                                    <i class="fa fa-fw fa-phone icon icon--fumi"></i>
                                    <span class="input__label-content input__label-content--fumi"><?= Html::activeLabel($model, 'phone') ?>:</span>
                                </label>
                            </span>
                        </div>
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil pencil_edit"></i>
                                </span>
                                <?= Html::activeTextarea($model, 'message', ['placeholder' => 'Message:', 'class' => 'form-control contact_form_edit', 'rows' => '8']) ?>
                                <!--<textarea class="form-control contact_form_edit" placeholder="Message:" rows="8"></textarea>-->
                            </div>
                        </div>
                    </div>

                    <?= Html::submitButton('SUBMIT', ['class' => 'btn btn-primary contact_btn']) ?>
                    <!--<button type="submit" class="btn btn-primary contact_btn"><span>SUBMIT</span></button>-->
                    <?php ActiveForm::end(); ?>

                </div>
                <div class="addrs_section">
                    <div class="row">

                        <div class="col-xs-12 col-sm-4">
                            <i class="fa fa-map addrs_icon_edit"></i> <p><?= $contact->company_name ?></p><br>
                            <i class="fa fa-phone addrs_icon_edit"></i> <p><?= $contact->mobile1 ?></p>
                            <?php if ($contact->mobile2) { ?>
                                    <i class="fa fa-phone addrs_icon_edit"></i> <p><?= $contact->mobile1 ?></p>
                            <?php } ?>
                            <i class="glyphicon glyphicon-phone-alt addrs_icon_edit"></i><p><?= $contact->telephone ?></p>
                            <i class="fa fa-envelope-o addrs_icon_edit"></i> <p><?= $contact->email1 ?></p>
                            <?php if ($contact->email2) { ?>
                                    <i class="fa fa-envelope-o addrs_icon_edit"></i> <p><?= $contact->email1 ?></p>
                            <?php } ?>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="map">
                                <iframe src="<?= $contact->map_link ?>" width="600" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
        $(".alert").fadeOut(1000);
</script>