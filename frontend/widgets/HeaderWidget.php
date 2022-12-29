<?php

namespace frontend\widgets;

use yii\helpers\Html;

class HeaderWidget extends \yii\bootstrap5\Widget
{
    public function run()
    {
        ?>
        <!-- ==========================
HEADER SECTION
=========================== -->
        <header id="home">
            <!-- creative menu -->
            <div class="container-fluid">
                <div class="row">
                    <div class="menu-wrap">
                        <nav class="menu">
                            <!-- Menu Links -->
                            <div class="icon-list">
                                <?= Html::a('<i class="fa fa-fw fa-home"></i><span>Главная</span>', '/#home') ?>
                                <?= Html::a('<i class="fa fa-fw fa-quote-left"></i><span>Обо мне</span>', '/#about') ?>
                                <?= Html::a('<i class="fa fa-fw fa-globe"></i><span>Услуги</span>', '/#service') ?>
                                <?= Html::a('<i class="fa fa-fw fa-picture-o"></i><span>Портфолио</span>', '/#portfolio') ?>
                                <?= Html::a('<i class="fa fa-fw fa-envelope-o"></i><span>Контакт</span>', '/contact') ?>
                                <?= Html::a('<i class="fa fa-fw fa-money"></i><span>UPwork</span>', '/upwork-rate') ?><!-- fa-adn fa-align-justify fa-angellist -->
                                <?= Html::a('<i class="fa fa-fw fa-book"></i><span>Books</span>', '/books') ?>

                                <!--
                                <?= Html::a('<i class="fa fa-fw fa-sign-in"></i><span>Sing in</span>', '/singin') ?>
                                <?= Html::a('<i class="fa fa-fw fa-sign-in"></i><span>Sing up</span>', '/singup') ?>
                                -->
                            </div>
                        </nav>
                    </div>
                    <button class="menu-button" id="open-button"></button><!-- menu button -->
                </div><!--/row-->
            </div><!--/container-->
            <!-- Header Image -->
            <section class="hero" id="hero">
                <div class="container">
                    <!-- Slider Button (don't edit!)-->
                    <div class="row">
                        <div class="col-md-12 text-right navicon">
                            <a id="nav-toggle" class="nav_slide_button" href="index.html#"><span></span></a>
                        </div>
                    </div>
                    <!-- HEADER HEADLINE -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1 inner">
                            <h1 class="animated fadeInDown">
                                A<span style="color:#E04343;">n</span>ton<br/>
                                <span>K<span style="color:#FFE800">a</span>lochelitis</span>
                            </h1><!-- Title -->
                            <h3 class="animated fadeInUp delay-05s"><span class="rotate">PHP Programmer, IP-PBX, Unix Administrator</span>
                            </h3><!-- Text Rotator -->
                        </div>
                    </div>
                    <!-- Learn More Button -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <a href="index.html#about" class="scrollto wow fadeInUp delay-5s ">
                                <p>SEE MORE</p>
                                <p class="scrollto--arrow"><img src="img/scroll-down.png" alt="scroll down arrow"></p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header Image End -->
        </header>
        <!-- ==========================
        HEADER SECTION END
        =========================== -->
        <?php
    }
}