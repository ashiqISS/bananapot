<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Brands */

$this->title = 'Create Brands';
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brands-create">



    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
