<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Faq */

$this->title = 'Update Faq: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Faqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faq-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <a class="btn btn-success btn-success-form" href="<?php echo Yii::$app->homeUrl . 'faq' ?>" id="add-note">
        <span>Manage Faq</span>
    </a>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
