<?php

namespace frontend\widgets;

class AdressBox extends \yii\bootstrap5\Widget
{
    private $adress = 'Khreshchatyk street, Cherkassy, Ukrenian<br/>&nbsp;';

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        ?>
        <div class="col-md-4">
            <div class="dark-box box-hover">
                <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                <p><?= $this->adress ?></p>
            </div>
        </div>
        <?php
    }

}