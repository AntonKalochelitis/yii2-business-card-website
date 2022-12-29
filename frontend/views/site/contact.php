<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- ==========================
CONTACT SECTION
=========================== -->
<section class="text-center section-padding contact-wrap" id="contact">
    <!-- To Top Button -->
    <?= Html::a( '<i class="fa fa-chevron-up"></i>', '/#top', ['class' => 'up-btn'] )?>
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">Отправьте <span>мне</span> пару строк</h1>
            </div>
        </div>
        <div class="row contact-details">
            <!-- Adress Box -->
            <?= \frontend\widgets\AdressBox::widget(); ?>
            <!-- Phone Number Box -->
            <?= \frontend\widgets\PhoneNumberBox::widget(); ?>
            <!-- E-Mail Box -->
            <?= \frontend\widgets\EMailBox::widget(); ?>
        </div>
        <div class="row">
            <!-- Google Maps (Change your Settings below) -->
            <div class="col-md-6">
                <?= \frontend\widgets\GoogleMaps::widget(); ?>
            </div>
            <!-- Contact Form -->
            <div class="col-md-6 contact">
                <?= \frontend\widgets\ContactForm::widget( [ 'model' => $model ] ) ?>
            </div>
        </div>
        <br>
        <!-- Social Buttons - use font-awesome, past in what you want -->
        <div class="row">
            <?= \frontend\widgets\SocialButtons::widget(); ?>
        </div>
    </div>
</section>
<!-- ==========================
CONTACT SECTION END
=========================== -->