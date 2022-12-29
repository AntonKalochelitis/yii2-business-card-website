<?php

namespace frontend\widgets;

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;

class ContactForm extends \yii\bootstrap5\Widget
{
    public $model = null;

    public function init()
    {
        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (\Yii::$app->session->hasFlash('contactFormSubmitted')) {
            ?>
            <div class="alert alert-success">Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.</div>
            <?php if (\Yii::$app->mailer->useFileTransport): ?>
                <div class="alert alert-success">
                    Because the application is in development mode, the email is not sent but saved as
                    a file under <code><?= \Yii::getAlias(\Yii::$app->mailer->fileTransportPath) ?></code>.
                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                    application component to be false to enable email sending.
                </div>
            <?php endif; ?>
            <?php
        } else {
            ?>
            <?php
            $form = ActiveForm::begin(['id' => 'contact-form']); // 'role' => 'form'
            ?>

            <!-- Name -->
            <div class="row">
                <div class="col-md-6">
                    <!-- E-Mail -->
                    <div class="form-group">
                        <?= $form->field($this->model, 'name')->textInput(['autofocus' => true, 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ваше имя']) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Phone Number -->
                    <div class="form-group">
                        <?= $form->field($this->model, 'email')->textInput(['type' => 'email', 'class' => 'form-control', 'placeholder' => 'Email адрес']) ?>
                    </div>
                </div>
            </div>
            <!-- Message Area -->
            <div class="form-group">
                <?= $form->field($this->model, 'body')->textInput(['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Напишите ваше сообщение здесь...', 'style' => 'height:232px;']) ?>
            </div>
            <div style="width: 555px;position: relative;">
                <div style="float: left;">
                    <!-- ReCaptcha -->
                    <?= $form->field($this->model, 'verifyCode')->widget(
                        ReCaptcha::className(), [
                            'siteKey' => '6LfA8CsUAAAAAL13Y2DO1r23MKlGPMmY07ZKajWj',
                            'widgetOptions' => ['class' => '']
                        ]
                    ); ?>
                </div>
                <div style="float: right;">
                    <!-- Subtmit Button -->
                    <?= Html::submitButton(
                        'Отправить сообщение',
                        ['class' => 'btn btn-send']
                    ) ?>
                </div>
            </div>


            <?php
            ActiveForm::end();
        }
    }

}