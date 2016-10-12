<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StaticPage */

$this->title = 'Create Static Page';
$this->params['breadcrumbs'][] = ['label' => 'Static Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-page-create">

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
