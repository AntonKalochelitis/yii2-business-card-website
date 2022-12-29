<?php

/* @var $this yii\web\View */

$this->title = 'Anton Kalochelitis, personal page IT specialist';

$this->registerMetaTag(['property' => 'image', 'content' => 'http://anton.kalochelitis.yii2.w-develop.com/img/anton-logo-v3.png'], 'image');

$this->registerMetaTag(['property' => 'fb:app_id', 'content' => '803876443413896'], 'fb:app_id');
$this->registerMetaTag(['property' => 'og:type', 'content' => 'website'], 'og:type');

$this->registerMetaTag(['property' => 'description', 'content' => '+38(098)062-00-62, +38(093)145-04-14'], 'description');
$this->registerMetaTag(['property' => 'og:description', 'content' => '+38(098)062-00-62, +38(093)145-04-14'], 'og:description');
$this->registerMetaTag(['property' => 'twitter:description', 'content' => '+38(098)062-00-62, +38(093)145-04-14'], 'twitter:description');
?>

<!-- ==========================
ABOUT SECTION
=========================== -->
<section class="intro text-center section-padding color-bg" id="about">
    <div class="container">
        <!-- WELCOME TEXT -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">Немного <span>обо</span> мне</h1><!-- Headline -->
                <!-- about / welcome text -->
                <p>Меня зовут Антон Калочелитис, мне нравится знакомится с новыми людьми, изучать новые технологии, получать опыт от каждой прожитой минуты в жизни. У меня богатый опыт работы в сфере ИТ, работал над проектами на языках PHP, Java. Очень нравится моя профессия, общителен, люблю работать в команде. Изучаю психологию, боевые искуства. Последние несколько лет я занимаюсь в основном разработкой на PHP. Java использую для тестирования проектов.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================
        SERVICE SECTION
        =========================== -->
<section class="features text-center section-padding" id="service">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">Основные направления оказания услуг для клиентов</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="services">
                    <!-- Service Box 1 -->
                    <?= \frontend\widgets\ServiceBox::widget( [ 'icon' => 'fa-desktop', 'title' => 'PHP PROGRAMMER', 'description' => 'Специалист, занимающийся непосредственной разработкой программного обеспечения для различного рода вычислительно-операционных систем. PHP - Инструменты для создания персональных веб-проектов. Поддерживается большинством хостинг-провайдеров.' ] ); ?>
                    <!-- Service Box 2 delay-05s -->
                    <?= \frontend\widgets\ServiceBox::widget( [ 'icon' => 'fa-asterisk', 'title' => 'IP-PBX', 'description' => 'Автоматическая телефонная станция (АТС) на основе межсетевого протокола IP операторского уровня или для небольших организаций. Asterisk, FreeSWITCH - свободное решения компьютерной телефонии с открытым исходным кодом. Созданные для удовлетворения потребности в управляемых голосом или текстом системах.' ] ); ?>
                    <!-- Service Box 3 delay-1s -->
                    <?= \frontend\widgets\ServiceBox::widget( [ 'icon' => 'fa-server', 'title' => 'UNIX ADMINISTRATOR', 'description' => 'Администратор — сотрудник, должностные обязанности которого подразумевают обеспечение штатной работы парка компьютерной техники, сети и программного обеспечения. Операционные системы семейства Unix характеризуются модульным дизайном, в котором каждая задача выполняется отдельной утилитой, взаимодействие осуществляется через единую файловую систему, а для работы с утилитами используется командная оболочка.<br/>Пример: Debian, CentOS, Ubuntu' ] ); ?>
                    <!-- Service Box 4 delay-12s -->
                    <?= \frontend\widgets\ServiceBox::widget( [ 'icon' => 'fa-desktop', 'title' => 'JAVA PROGRAMMER', 'description' => 'Java - типизированный объектно-ориентированный язык программирования, разработанный компанией Sun Microsystems (приобретённой компанией Oracle). Применяется для разработки приложений под Windows, Android, Тестирования приложений.' ] ); ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- ==========================
ABOUT SECTION END
=========================== -->




<!-- ==========================
PORTFOLIO SECTION
=========================== -->
<section class="swag text-center" id="portfolio">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <h1 class="arrow">
                Недавние <span>Проекты</span>
            </h1>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row color-bg">
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background:#FFF;text-align: center;"><img style="top:30px;position: relative;max-width: 470px;" src="/img/customers/loto-zabava.png" width="340" /></div>
        </div>
        <div class="col-md-6 about-text">
            <h6>Лото-Забава</h6><!-- headline-->
            <p>г. Киев.<br/>
                Разработка программного обеспечения:<br/>
                Анализа клиентской базы;<br/>
                Создание шифрования для клиентской базы;<br/>
                Разработка приложения сайта на базе Framework Yii2;</p><br><!-- About Text 1 -->
            <a target="_blank" href="https://igra.msl.ua/lotozabava/ru" class="weight-outline-btn">igra.msl.ua</a><!-- read more button  -->
        </div>
    </div>
    <!-- -->
    <div class="row" style="background:#EDEDED;">
        <div class="col-md-6 about-text" >
            <h6>ipay.ua</h6><!-- Headline -->
            <p>г. Киев<br/>
                Разработка функционала на Framework Yii2<br/>
                Обновление существующей системы с предыдущей версии Framework Kohana.<br/></p><br><!-- About Text 2 -->
            <a target="_blank" href="https://ipay.ua/" class="weight-outline-btn">ipay.ua</a>	<!-- read more button  -->
        </div>
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background:#FFF;text-align: center;"><img style="top: 30px;position: relative;" src="/img/customers/59034a3e9642fmaxresdefault.jpg" width="600" /></div><!-- about image 2 -->
        </div>
    </div>
    <!-- About 1 -->
    <div class="row color-bg">
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background:#FFF;text-align: center;"><img style="top:80px;position: relative;max-width: 470px;"  src="/img/customers/fotos-f.ua-Logotipy1.jpg" width="470" /></div><!-- about image 1 -->
        </div>
        <div class="col-md-6 about-text">
            <h6>fotos.ua - f.ua</h6><!-- headline-->
            <p>г. Киев.<br/>
                Разработка программного обеспечения:<br/>
                анализа клиентской базы;<br/>
                обработка пропущенных, входящих звонков для Астериск;<br/>
                разработка административной панели для работы с менеджерами;</p><br><!-- About Text 1 -->
            <a target="_blank" href="http://f.ua" class="weight-outline-btn">f.ua</a><!-- read more button  -->
        </div>
    </div>
    <!-- About 2 -->
    <div class="row" style="background:#EDEDED;">
        <div class="col-md-6 about-text">
            <h6>smartline.ua</h6><!-- Headline -->
            <p>г. Киев<br/>
                Поддержка уже существующего приложения, обработчика авиабилетов;<br/>
                Разработка backend приложения для продажи авиабилетов;<br/>
                Работа с CRM Sugar;<br/></p><br><!-- About Text 2 -->
            <a target="_blank" href="https://smartline.ua/" class="weight-outline-btn">smartline.ua</a>	<!-- read more button  -->
        </div>
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background:#FFF;text-align: center;"><img style="top: 70px;position: relative;" src="/img/customers/2106287.png" width="240" /></div><!-- about image 2 -->
        </div>
    </div>
    <!-- About 3 -->
    <div class="row color-bg">
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background:#FFF;text-align: center;"><img style="top: 70px;position: relative;" src="/img/customers/1itc.png" width="221" /></div><!-- about image 3 -->
        </div>
        <div class="col-md-6 about-text">
            <h6>1itc.ru</h6><!-- Headline-->
            <p>г. Москва.<br/>
                Работа Программистом PHP.<br/>
                Разработка для Backend, Frontend решений.<br/>
                Администрирование серверов.</p><br/><!-- About Text 3 -->
            <a target="_blank" href="http://1itc.ru" class="weight-outline-btn">1itc.ru</a><!-- read more button  -->
        </div>
    </div>
</div><!--/.container-->
<!-- ==========================
PORTFOLIO SECTION END
=========================== -->
<section>
    <div class="container" style="text-align: center;">
        <br/>
        <!-- Social Buttons - use font-awesome, past in what you want -->
        <div class="row">
            <?= \frontend\widgets\SocialButtons::widget(); ?>
        </div>
        <br/>
    </div>
</section>


