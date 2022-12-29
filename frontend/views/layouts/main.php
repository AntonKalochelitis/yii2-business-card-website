<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= \Yii::$app->language ?>">
<head>
    <meta charset="<?= \Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
</head>
<body id="top">
<?php $this->beginBody() ?>

<!-- ****************************** Preloader ************************** -->
<div id="preloader"></div>

<?= \frontend\widgets\HeaderWidget::widget() ?>

<?= $content ?>

<!-- ==========================
FOOTER SECTION
=========================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>All Rights Reserved. &copy; 2017 <?= date( 'Y' ); ?> Create <?=Html::a( 'W-DEVELOP LLC', 'http://' . 'w-develop.com', [ 'target' => '_blank',  'class' => 'link' ] ) ?></a></p>
            </div>
        </div>
    </div>
</footer>
<!-- ==========================
FOOTER SECTION END
=========================== -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!-- TEXT ROTATOR SETTINGS -->
<script type="text/javascript">
    $(".rotate").textrotator({
        animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2000 // How many milliseconds until the next word show.
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23093108-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23093108-16');
</script>