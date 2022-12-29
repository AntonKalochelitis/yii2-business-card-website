<?php

use yii\helpers\Html;

$this->title = 'Read books';

$this->params['breadcrumbs'][] = $this->title;

?>

<section class="text-center section-padding contact-wrap" id="books">

    <?= Html::a( '<i class="fa fa-chevron-up"></i>', '/#top', ['class' => 'up-btn'] )?>

    <div class="container">

        <?php if ( count( $books ) > 0 ) {
            foreach( $books as $book ) {
            ?>
            <div class="col-lg-4 col-sm-4 text-center">
                <?= Html::a( Html::img( $book[ 'users_book_img' ], [ 'alt' =>  $book['users_book_name'], 'height' => '200' ] ), $book['users_book_to_path'] ) ?>
                <h5 class="text-success"><?= $book['users_book_name'] ?></h5>
            </div>
            <?php
            }
        } else {

        } ?>

    </div>

</section>
