<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Faq */

$this->title = 'Create Faq';
$this->params['breadcrumbs'][] = ['label' => 'Faqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-create">

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
