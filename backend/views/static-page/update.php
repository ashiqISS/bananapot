<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StaticPage */

$this->title = 'Update Static Page: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Static Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="static-page-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <a class="btn btn-success btn-success-form" href="<?php echo Yii::$app->homeUrl . 'static-page' ?>" id="add-note">
        <span>Manage Static Page</span>
    </a>
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
