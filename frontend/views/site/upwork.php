<?php

use yii\helpers\Html;

$this->title = 'Upwork Rate';

$this->params['breadcrumbs'][] = $this->title;

?>
<style>
    #upwork-rate {
        text-align: left;
    }
    #upwork-rate .title {
        font-size: 1.2em;
        font-weight: bold;
        color: #B7B7B7;
    }
    #upwork-rate .text {
        font-size: 1.2em;
    }

    #upwork-rate ul {
        list-style-type: none;
    }
</style>

<section class="text-center section-padding contact-wrap" id="upwork-rate">

    <?= Html::a( '<i class="fa fa-chevron-up"></i>', '/#top', ['class' => 'up-btn'] )?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1><?= $model['upwork_name'] ?></h1>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <p><span class="title">Profession:</span>

                    <span class="text"><?= $model['upwork_profession'] ?></span></p>

                <p><span class="title">Rate: </span><span class="text"><?= $model["upwork_rate"] ?>$ /hr</span></p>

                <span class="title">Skills:</span>

                <ul>
                    <li>-&nbsp;<span class="text">PHP, Mysql, JS, Ajax, HTML, CSS, Java</span></li>
                    <li>-&nbsp;<span class="text">Yii2, Symfony2, Angular.js, Node.js, Yii, Kohana, CodeIginiter, Phalcon, Joomla, Jquery, Drupal, Wordperss</span></li>
                    <li>-&nbsp;<span class="text">English: Conversational, Russian: Fluent, Ukrainian: Fluent</span></li>
                    <li>-&nbsp;<span class="text">PhpStorm IDE, IntelliJ IDEA IDE</span></li>
                    <li>-&nbsp;<span class="text">GitLab, GitHub, Git, Mercurial, SVN, Bazaar</span></li>
                    <li>-&nbsp;<span class="text">Unix, Linux, FreeBSD, Windows, Mac OS X;</span></li>
                </ul>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <h3>feedback</h3>

                <table class="table table-striped">

                    <tr>
                        <th>source</th>
                        <th>work</th>
                        <th>rating</th>
                        <th>hours</th>
                        <th>rate ($)</th>
                        <th>earned ($)</th>
                    </tr>

                    <?php foreach( $model_rate as $_rate ) {
                        ?>
                        <tr>
                            <td><?=Html::a( 'upwork', 'http://' . $_rate['source'], [ 'target' => '_blank',  'class' => 'link' ] ) ?></td>
                            <td class="feedback-work">
                                <p class="title"><?= Html::a( $_rate['work_name'], 'https://www.upwork.com/freelancers/~01ae862df39e50591f', [ 'target' => '_blank', 'class' => 'link' ])?></p>
                                <p class="feedback"><?= $_rate['feedback']; ?></p>
                            </td>
                            <td><?= sprintf( "%.2f", $_rate['rating'] ); ?></td>
                            <td><?= ( !empty( $_rate['hours'] ) )?$_rate['hours']:'Fixed Price'; ?></td>
                            <td><?= ( !empty( $_rate['rate'] ) )?sprintf( "%.2f", $_rate['rate'] ):'Fixed Price'; ?></td>
                            <td><?= sprintf( "%.2f", $_rate['earned'] ); ?></td>
                        </tr>
                        <?php
                    } ?>


                </table>

            </div>

        </div>

    </div>

</section>