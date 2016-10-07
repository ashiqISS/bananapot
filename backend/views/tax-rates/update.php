<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TaxRates */

$this->title = 'Update Tax Rates: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tax Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tax-rates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
