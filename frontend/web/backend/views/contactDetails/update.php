<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ContactDetails */

$this->title = 'Update Contact Details: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contact Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
