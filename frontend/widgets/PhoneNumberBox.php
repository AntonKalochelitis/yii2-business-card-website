<?php

namespace frontend\widgets;

class PhoneNumberBox extends \yii\bootstrap5\Widget
{
    private $phone = '+380 93 1450414<br/>+380 98 0620062';

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        ?>
        <div class="col-md-4">
            <div class="dark-box box-hover">
                <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                <p><?= $this->phone ?></p>
            </div>
        </div>
        <?php
    }
}