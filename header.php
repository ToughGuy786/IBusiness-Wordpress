<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBusiness</title>
    <?php wp_head(); ?>
</head>
<body id="myDIV">
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="navbar__inner">
                    <button type="button" class="burger js-menu-toggle" aria-expanded="false"  onclick="myFunction()">
                        <span class="burger__item"></span> 
                    </button>
                    <div class="bg-burder" onclick="closemyFunction()" id="bg-burger"></div>
                    <div class="navbar__logo">
                        <a href="#">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    <div class="navbar__right">
                        <ul class="navbar__items">
                            <div class="navbar__hamburger-logo-close-btn">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/IB_logo.png" alt="IBusiness">
                                <button type="button" class="navbar__close-btn"></button>
                            </div>
                            <li class="navbar__item"><a href="#about-app" class="navbar__link navbar__link_animate lng-aboutApp" data-translate="yes" data-var="aboutApp"><?php the_field('navbar_item1');?></a></li>
                            <li class="navbar__item"><a href="#functions" class="navbar__link navbar__link_animate lng-peculiarity" data-translate="yes" data-var="peculiarity"><?php the_field('navbar_item2');?></a></li>
                            <li class="navbar__item"><a href="#pmetods" class="navbar__link navbar__link_animate lng-methodsPay" data-translate="yes" data-var="methodsPay"><?php the_field('navbar_item3');?></a></li>
                            <li class="navbar__item"><a href="#for-whom" class="navbar__link navbar__link_animate lng-certificate" data-translate="yes" data-var="forWhom"><?php the_field('navbar_item4');?></a></li>
                            <!-- <li class="navbar__item"><a href="#" class="navbar__link navbar__link_last">Войти</a></li> -->
                        </ul>
                        <a href="https://app.mypage.kz/login" target="_blank" class="enter__btn">
                            <button class="navbar__link_last">
                                <img src="icons/log_in.svg" alt="log in">
                                <div class="enter"><?php the_field('navbar_item5');?></div>
                            </button>
                        </a>
                        
                    </div>
                    <!-- <select class="change-lang" onchange="change_lang(this.value)">
                        <option value="ru">RU</option>
                        <option value="kz">KZ</option>
                    </select> -->
                    <div class="page__link" id="myDIV">
                        <a href="/home-kz" class="link-kz link-lng btn">KZ</a>
                        <a href="/home" class="link-ru link-lng btn">RU</a>
                    </div>
                </div>
            </div>
        </nav>
    </header><!--/. Header End -->
</body>
