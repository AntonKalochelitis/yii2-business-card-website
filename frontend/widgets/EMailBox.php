<?php

namespace frontend\widgets;

class EMailBox extends \yii\bootstrap5\Widget
{
    private $email = 'fire_anton@ukr.net<br/>fire.anton@gmail.com';

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        ?>
        <div class="col-md-4">
            <div class="dark-box box-hover">
                <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                <p><a href="index.html#"><?= $this->email; ?></a></p>
            </div>
        </div>
        <?php
    }
}