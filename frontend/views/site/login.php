<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $model frontend\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;

$this->title = 'Sing in';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- ==========================
CONTACT SECTION
=========================== -->
<section class="text-center section-padding contact-wrap" id="singin">
    <a href="/#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10 contact">
                <h1><?= Html::encode( $this->title ) ?></h1>

                <p>Пожалуйста, заполните следующие поля для входа:</p>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                <?= $form->field( $model, 'username' )->textInput( [ 'autofocus' => true, 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Your login name' ] ) ?>

                <?= $form->field( $model, 'password' )->passwordInput() ?>

                <?= $form->field( $model, 'rememberMe' )->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                <div style="width: 555px;position: relative;">
                    <div style="float: left;width:300px">
                        <!-- ReCaptcha -->
                        <?= $form->field( $model, 'verifyCode' )->widget(
                            ReCaptcha::className(), [
                                'siteKey' => '6LfA8CsUAAAAAL13Y2DO1r23MKlGPMmY07ZKajWj',
                                'widgetOptions' => ['class' => '']
                            ]
                        ); ?>
                    </div>
                    <div style="float: right;">
                        <!-- Subtmit Button -->
                        <?= Html::submitButton(
                            'Send message',
                            ['class' => 'btn btn-send']
                        ) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <br>
        <!-- Social Buttons - use font-awesome, past in what you want -->
        <?= \frontend\widgets\SocialButtons::widget(); ?>
    </div>
</section>