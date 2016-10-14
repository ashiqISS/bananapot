<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_code') ?>

    <?= $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'merchant_id') ?>

    <?php // echo $form->field($model, 'merchant_type') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'main_image') ?>

    <?php // echo $form->field($model, 'gallery_images') ?>

    <?php // echo $form->field($model, 'hover_image') ?>

    <?php // echo $form->field($model, 'canonical_name') ?>

    <?php // echo $form->field($model, 'meta_title') ?>

    <?php // echo $form->field($model, 'meta_description') ?>

    <?php // echo $form->field($model, 'meta_keywords') ?>

    <?php // echo $form->field($model, 'header_visibility') ?>

    <?php // echo $form->field($model, 'sort_order') ?>

    <?php // echo $form->field($model, 'display_category_name') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'wholesale_price') ?>

    <?php // echo $form->field($model, 'is_discount_available') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'discount_type') ?>

    <?php // echo $form->field($model, 'discount_rate') ?>

    <?php // echo $form->field($model, 'discount_from') ?>

    <?php // echo $form->field($model, 'discount_to') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'requires_shipping') ?>

    <?php // echo $form->field($model, 'enquiry_sale') ?>

    <?php // echo $form->field($model, 'new_from') ?>

    <?php // echo $form->field($model, 'new_to') ?>

    <?php // echo $form->field($model, 'sale_from') ?>

    <?php // echo $form->field($model, 'sale_to') ?>

    <?php // echo $form->field($model, 'special_price_from') ?>

    <?php // echo $form->field($model, 'special_price') ?>

    <?php // echo $form->field($model, 'special_price_to') ?>

    <?php // echo $form->field($model, 'tax') ?>

    <?php // echo $form->field($model, 'gift_option') ?>

    <?php // echo $form->field($model, 'stock_availability') ?>

    <?php // echo $form->field($model, 'video_link') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'weight_class') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'exchange') ?>

    <?php // echo $form->field($model, 'search_tag') ?>

    <?php // echo $form->field($model, 'related_products') ?>

    <?php // echo $form->field($model, 'is_cod_available') ?>

    <?php // echo $form->field($model, 'is_available') ?>

    <?php // echo $form->field($model, 'is_featured') ?>

    <?php // echo $form->field($model, 'is_admin_approved') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
