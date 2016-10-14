<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */

$brands = \yii\helpers\ArrayHelper::map(backend\models\Brands::find(['status' => 1])->all(), 'brand_id', 'brand_name');
$category = [];
$tax = [];
$relatedprds = [];
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand_id')->dropDownList($brands, ['prompt' => 'Select Brand']) ?>

    <?= $form->field($model, 'category_id')->dropDownList($category, ['prompt' => 'Select Category']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>




    <?= $form->field($model, 'canonical_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header_visibility')->textInput() ?>

    <?= $form->field($model, 'display_category_name')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'wholesale_price')->textInput() ?>

    <?= $form->field($model, 'is_discount_available')->dropDownList([1 => 'Yes', 0 => 'No']) ?>

    <?= $form->field($model, 'discount_type')->dropDownList([0 => 'Fixed', '1' => 'Flat']) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'discount_rate')->textInput() ?>

    <?= $form->field($model, 'discount_from')->textInput() ?>

    <?= $form->field($model, 'discount_to')->textInput() ?>

    <?= $form->field($model, 'requires_shipping')->textInput() ?>

    <?= $form->field($model, 'enquiry_sale')->textInput() ?>

    <?= $form->field($model, 'new_from')->textInput() ?>

    <?= $form->field($model, 'new_to')->textInput() ?>

    <?= $form->field($model, 'sale_from')->textInput() ?>

    <?= $form->field($model, 'sale_to')->textInput() ?>

    <?= $form->field($model, 'special_price_from')->textInput() ?>

    <?= $form->field($model, 'special_price')->textInput() ?>

    <?= $form->field($model, 'special_price_to')->textInput() ?>

    <?= $form->field($model, 'tax')->dropDownList($tax, ['prompt' => 'Select Tax']) ?>


    <?= $form->field($model, 'status')->dropDownList([1 => 'Enable', 0 => 'Disable']) ?>

    <?= $form->field($model, 'exchange')->dropDownList([1 => 'Yes', 0 => 'No']) ?>

    <?= $form->field($model, 'search_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'related_products')->dropDownList($relatedprds) ?>

    <?= $form->field($model, 'is_featured')->dropDownList([1 => 'Yes', 0 => 'No']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
