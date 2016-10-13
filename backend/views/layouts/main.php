<?php

use yii\helpers\Html;

dmstr\web\AdminLteAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl; ?>/css/custom.css">
        <script type="text/javascript">
                var baseurl = "<?php print \yii\helpers\Url::base() . "/index.php/?r="; ?>";

        <script type="text/javascript">
                var baseurl = "<?php print \yii\helpers\Url::base() . "/index.php/"; ?>";

                var basepath = "<?php print \yii\helpers\Url::base(); ?>";

        </script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $this->beginBody() ?>
        <div class="wrapper">

            <?=
            $this->render(
                    'header.php', ['directoryAsset' => $directoryAsset]
            )
            ?>

            <?=
            $this->render(
                    'left.php', ['directoryAsset' => $directoryAsset]
            )
            ?>

            <?=
            $this->render(
                    'content.php', ['content' => $content, 'directoryAsset' => $directoryAsset]
            )
            ?>

        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
