<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

//use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\StaticPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-page-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true], ['maxlength' => true]) ?>

    <?= $form->field($model, 'tittle')->textInput(['maxlength' => true]) ?>
    <?=
    $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced'
    ])
    ?>
    <?=
    $form->field($model, 'small_content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ])
    ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
        $(document).ready(function () {

            $('#staticpage-category_name').keyup(function () {
                $('#staticpage-canonical_name').val(slug($(this).val()));
            });


        });
        var slug = function (str) {
            var $slug = '';
            var trimmed = $.trim(str);
            $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                    replace(/-+/g, '-').
                    replace(/^-|-$/g, '');
            return $slug.toLowerCase();
        }
</script>
