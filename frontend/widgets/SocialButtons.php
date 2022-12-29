<?php

namespace frontend\widgets;

use yii\helpers\Html;
use yii\helpers\Url;

class SocialButtons extends \yii\bootstrap5\Widget
{
    public function run()
    {
        ?>
        <div class="col-md-12">
            <ul class="social-buttons">
                <li><?= Html::a('<i class="fa fa-vk"></i>', 'https://vk.com/fire_anton', ['target' => '_blank', 'class' => 'social-btn']) ?></li>
                <li><?= Html::a('<i class="fa fa-twitter"></i>', 'https://twitter.com/fire_anton', ['target' => '_blank', 'class' => 'social-btn']) ?></li>
                <li><?= Html::a('<i class="fa fa-facebook"></i>', 'https://facebook.com/anton.kalochelitis', ['target' => '_blank', 'class' => 'social-btn']) ?></li>
                <li><?= Html::a('<i class="fa fa-linkedin"></i>', 'https://www.linkedin.com/in/anton-kalochelitis-505802134/', ['target' => '_blank', 'class' => 'social-btn']) ?></li>
                <li><?= Html::a('<i class="fa fa-github"></i>', 'https://github.com/AntonKalochelitis', ['target' => '_blank', 'class' => 'social-btn']) ?></li>
            </ul>
        </div>
        <?php
    }
}