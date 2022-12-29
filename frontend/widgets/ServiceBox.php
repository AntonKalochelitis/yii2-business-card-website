<?php

namespace frontend\widgets;

use Yii;
use yii\helpers\Html;

class ServiceBox extends \yii\bootstrap5\Widget
{
    public $icon = '';
    public $title = '';
    public $description = '';

    public function run()
    {
        ?>
        <div class="col-md-3 wp2 item">
            <div class="icon">
                <i class="fa <?= $this->icon ?>"></i><!-- Icon desktop -->
            </div>
            <h2><?= $this->title ?></h2><!-- Title -->
            <p><?= $this->description ?></p><!-- Description -->
        </div>
        <?php
    }

}