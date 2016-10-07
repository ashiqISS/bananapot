<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TaxRates */

$this->title = 'Create Tax Rates';
$this->params['breadcrumbs'][] = ['label' => 'Tax Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tax-rates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
