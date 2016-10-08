<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contact */

$this->title = 'Create Contact';
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

    <a class="btn btn-success btn-success-form" href="<?php echo Yii::$app->homeUrl . 'contact' ?>" id="add-note">
        <span>Manage Contact</span>
    </a>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
