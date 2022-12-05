<?php
/*
Template Name: Home KZ
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBusiness</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="navbar__inner">
                    <button type="button" class="burger js-menu-toggle" aria-expanded="false">
                        11
                        <span class="burger__item"></span>
                    </button>
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
                        <a href="https://app.mypage.kz/login" target="_blank">
                            <button class="navbar__link_last">
                                <img src="icons/log_in.svg" alt="log in">
                                <div class="enter" data-translate="yes" data-var="enter"><?php the_field('navbar_item5');?></div>
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

<?php 
/*
Template Name: home
*/
?>

<?php get_header(); ?>
  <!-- Mobile Menu Begin -->
  <div class="mob-menu">
        <div class="mob-menu__wrapper">
            <ul class="mob-menu__list">
                <li class="mob-menu__item">
                    <a href="#about-app" class="mob-menu__link mob-menu__link--active navbar__link_animate">Қосымша туралы</a>
                </li>
                <li class="mob-menu__item">
                    <a href="#functions" class="mob-menu__link navbar__link_animate">Ерекшеліктері</a>
                </li>
                <li class="mob-menu__item">
                    <a href="#pmetods" class="mob-menu__link navbar__link_animate">Төлем тәсілдері</a>
                </li>
                <li class="mob-menu__item">
                    <a href="#for-whom" class="mob-menu__link navbar__link_animate">Сертификаттар</a>
                </li>
            </ul>
            <div class="menu__close-box">
                <button class="close-btn">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icons/close.svg" alt="close">
                </button>
            </div>
        </div>
    </div><!--/. Mobile Menu End -->

    <!-- Entry Begin -->
    <section class="promo">
        <div class="container">
            <div class="promo__header">
                <div class="promo__title">
                    <h2 class="promoH2"><?php the_field('promo_title');?></h2>
                </div>
                <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="promo__btn promo_link lng-promoLink" data-translate="yes" data-var="promoLinkDown">
                <?php the_field('promo_download'); ?>
                </a>
            </div>
            <div class="promo__image">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/promo-img.png" alt="list">
            </div>
        </div>
        <div class="promo__waves">
            <svg width="1440" height="586" viewBox="0 0 1440 586" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_702_11628)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M-282.109 301.206C-291.471 323.602 -291.358 362.961 -244.188 392.113C-232.232 399.503 -212.869 403.912 -188.212 409.53C-116.23 425.924 0.87188 452.597 110.567 593.663C218.122 736.371 213.313 856.375 210.355 930.142C209.343 955.408 208.547 975.252 212.562 988.724C228.395 1041.87 266.361 1052.25 290.423 1049.05C340.637 1041.94 361.165 975.957 364.953 947.805C385.376 796.058 320.372 636.949 226.248 511.122L226.29 511.09C225.321 509.824 224.35 508.564 223.373 507.302C222.411 506.031 221.446 504.763 220.479 503.499L220.437 503.531C123.531 379.833 -13.1039 275.56 -164.923 255.678C-193.086 251.99 -262.137 254.589 -282.109 301.206Z" fill="#0075E3" fill-opacity="0.12"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M-162.475 40.1343C-170.962 66.169 -166.833 113.607 -109.622 153.531C-95.12 163.651 -72.405 170.934 -43.4781 180.209C41.138 207.338 178.902 251.509 319.69 433.561C458.697 616.98 465.387 761.495 469.495 850.259C470.9 880.604 472.005 904.434 477.988 921.073C501.601 986.721 546.318 1003.09 573.664 1001.69C630.69 998.219 647.586 920.803 649.08 887.266C657.174 705.664 565.371 506.342 443.504 344.758L443.532 344.737C442.569 343.48 441.604 342.224 440.635 340.969C439.678 339.707 438.717 338.448 437.754 337.191L437.727 337.212C313.541 177.401 145.082 36.7652 -32.3388 -2.80894C-65.1035 -10.1183 -144.246 -14.0089 -162.475 40.1343Z" fill="#0075E3" fill-opacity="0.12"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M994.092 756.279C984.827 735.357 984.157 698.261 1028.04 669.857C1039.16 662.657 1057.32 658.119 1080.45 652.338C1147.96 635.468 1257.8 608.021 1358.4 472.911C1456.95 336.296 1450.05 223.294 1445.81 153.831C1444.36 130.039 1443.21 111.353 1446.73 98.5777C1460.61 48.1817 1496.18 37.6509 1518.92 40.1862C1566.39 45.901 1587.04 107.679 1591.16 134.135C1613.4 276.746 1555.28 427.979 1469.05 548.42L1469.09 548.45C1468.2 549.661 1467.31 550.869 1466.42 552.077C1465.53 553.294 1464.65 554.508 1463.76 555.718L1463.72 555.689C1374.83 674.178 1248.12 775.144 1105.43 796.876C1078.96 800.907 1013.83 799.819 994.092 756.279Z" fill="#0075E3" fill-opacity="0.12"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1111.99 999.965C1103.48 975.597 1106.43 930.807 1159.56 892.053C1173.03 882.23 1194.29 874.918 1221.37 865.606C1300.58 838.37 1429.55 794.025 1558.64 619.674C1686.03 444.072 1689.49 307.742 1691.61 224.006C1692.33 195.38 1692.91 172.9 1698.22 157.1C1719.18 94.7653 1761 78.4596 1786.8 79.2408C1840.61 81.3837 1858.06 154.011 1860.13 185.588C1871.34 356.578 1788.75 546.237 1677.08 700.925L1677.11 700.944C1676.23 702.148 1675.34 703.351 1674.45 704.552C1673.58 705.76 1672.69 706.965 1671.81 708.169L1671.79 708.15C1557.9 861.212 1401.91 997.075 1235.48 1037.87C1204.75 1045.41 1130.24 1050.63 1111.99 999.965Z" fill="#0075E3" fill-opacity="0.12"/>
                </g>
                <defs>
                    <clipPath id="clip0_702_11628">
                        <rect width="1440" height="586" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </section><!--/. Entry End -->

    <!-- Slider Begin -->
    <section class="carousel">
        <div class="container">
            <div class="carousel__inner">
                <div class="carousel__slide-wrapper">
                    <div class="carousel__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/phone_wood_hand.png" alt="slide">
                    </div>
                    <div class="carousel__content">
                        <div class="carousel__slide-title lng-slideTitle"><?php the_field('slide_title');?></div>
                        <div class="carousel__slide-text lng-slideText"><?php the_field('slide_descr');?></div>
                        <a class="carousel__btn promo_link lng-promoLink" href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank"><?php the_field('slide_detail');?></a>
                    </div>
                </div>
                <!-- <div class="carousel__slide-wrapper">
                    <div class="carousel__image carousel__sec-bg">
                        <img src="img/second_slide.png" alt="slide-2">
                    </div>
                    <div class="carousel__content">
                        <div class="carousel__slide-title">Оплата только за банковскую комиссию</div>
                        <div class="carousel__slide-text">Установи наше приложение 
                            и плати только за платеж</div>
                        <a class="carousel__btn" href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank">Подробнее</a>
                    </div>
                </div> -->
              </div>
        </div>
    </section><!--/. Slider End -->

    <!-- Steps Begin -->
    <section class="steps">
        <div class="container">
            <div class="steps__subheading lng-stepsSubhead"><?php the_field('steps_block_title'); ?></div>
            <div class="steps__items">
                <div class="steps__item steps__item-1">
                    <div class="steps__title lng-stepsTitle1"><?php the_field('steps_title_1'); ?></div>
                    <div class="steps__text lng-stepsText1"><?php the_field('steps_descr_1'); ?></div>
                </div>
                <div class="steps__item steps__item-2">
                    <div class="steps__title lng-stepsTitle2"><?php the_field('steps_title_2'); ?></div>
                    <div class="steps__text lng-stepsText2"><?php the_field('steps_descr_2'); ?></div>
                </div>
                <div class="steps__item steps__item-3">
                    <div class="steps__title lng-stepsTitle3"><?php the_field('steps_title_3'); ?></div>
                    <div class="steps__text lng-stepsText3"><?php the_field('steps_descr_3'); ?></div>
                </div>
            </div>
        </div>
    </section><!--/. Steps End -->

    <!-- Actions -->
    <section class="actions">
        <div class="container">
            <div class="actions__subheading lng-funcSubhead" id="functions"><?php the_field('action_block_title');?></div>
            <div class="actions__items">
                <div class="actions__items-block-1 bot_offset">
                    <div class="actions__item actions__item-1">
                        <div class="actions__descr">
                            <div class="actions__descr-title lng-createTitle"><?php the_field('action_create_title');?></div>
                            <div class="actions__descr-text lng-createDescr"><?php the_field('action_create_descr');?></div>
                        </div>
                    </div>
                    <div class="actions__item actions__item-2">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="actions__btn lng-actionBtn promo_link">
                            <?php the_field('action_btn');?>
                        </a>
                    </div>
                    <div class="actions__item actions__item-3">
                        <div class="actions__img">
                            <img src="<?php the_field('action_create_img');?>">
                        </div>
                    </div>
                    <div class="actions__item actions__item-4">
                        <div class="actions__ul-wrapper">
                            <ul class="actions__ul">
                                <li class="actions__li before-picture">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-creatLiTitle1">Өз стиліңізді қалыптастырыңыз</div>
                                        <div class="actions__li-text lng-creatLiText1">Сайттың түсін және тауарлардың көрсетілуін таңдау</div>
                                    </div>
                                </li>
                                <li class="actions__li before-car right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-creatLiTitle2">Тапсырысты баптау</div>
                                        <div class="actions__li-text lng-creatLiText2">Жеткізу уақыты мен құнын белгілеңіз</div>
                                    </div>
                                </li>
                                <li class="actions__li before-send">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-creatLiTitle3">Әлеуметтік желілер</div>
                                        <div class="actions__li-text lng-creatLiText3">Брендтің танымалдығын арттыру жолдары</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="actions__items-block-1 top_offset bot_offset">
                    <div class="actions__item actions__item-1">
                        <div class="actions__descr">
                            <div class="actions__descr-title lng-accTitle"><?php the_field('action_accounting_title');?></div>
                            <div class="actions__descr-text lng-accDescr"><?php the_field('action_accounting_descr');?></div>
                        </div>
                    </div>
                    <div class="actions__item actions__item-2">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="actions__btn lng-actionBtn promo_link"><?php the_field('action_btn');?></a>
                    </div>
                    <div class="actions__item actions__item-3">
                        <div class="actions__img">
                            <img src="<?php the_field('action_accounting_img');?>">
                        </div>
                    </div>
                    <div class="actions__item actions__item-4">
                        <div class="actions__ul-wrapper">
                            <ul class="actions__ul">
                                <li class="actions__li before-upload right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-accLiTitle1">Бір файлда импорттау</div>
                                        <div class="actions__li-text lng-accLiText1">Тауарларды жүктеудің тиімді тәсілі</div>
                                    </div>
                                </li>
                                <li class="actions__li before-sort">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-accLiTitle2">Тауарларды есепке алу</div>
                                        <div class="actions__li-text lng-accLiText2">Қоймада тауарлардың болуын бақылап отырыңыз</div>
                                    </div>
                                </li>
                                <li class="actions__li before-scanner right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-accLiTitle3">Баркодты сканерлеу</div>
                                        <div class="actions__li-text lng-accLiText3">Тауарды баркодтың көмегімен іздеу</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="actions__items-block-1 bot_offset top_offset">
                    <div class="actions__item actions__item-1">
                        <div class="actions__descr">
                            <div class="actions__descr-title actions__ofd lng-ofdTitle"><?php the_field('action_onlineCheckout_title');?></div>
                            <div class="actions__descr-text lng-ofdDescr"><?php the_field('action_onlineCheckout_descr');?></div>
                        </div>
                    </div>
                    <div class="actions__item actions__item-2">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="actions__btn lng-actionBtn promo_link"><?php the_field('action_btn');?></a>
                    </div>
                    <div class="actions__item actions__item-3">
                        <div class="actions__img">
                            <img src="<?php the_field('action_onlineCheckout_img');?>">
                        </div>
                    </div>
                    <div class="actions__item actions__item-4">
                        <div class="actions__ul-wrapper">
                            <ul class="actions__ul">
                                <li class="actions__li before-setting">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-ofdLiTitle1">Нөлдік қызмет көрсету</div>
                                        <div class="actions__li-text lng-ofdLiText1">Кәдімгі кассалардан басты айырмашылығы</div>
                                    </div>
                                </li>
                                <li class="actions__li before-favourite right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-ofdLiTitle2">Кассалардың жұмысын қадағалау</div>
                                        <div class="actions__li-text lng-ofdLiText2">Кассирлерді бақылаудың ең жақсы тәсілі</div>
                                    </div>
                                </li>
                                <li class="actions__li before-tool">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-ofdLiTitle3">Электронды чектер</div>
                                        <div class="actions__li-text lng-ofdLiText3">Сатып алушыларға электронды чектерді жіберу</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="actions__items-block-1 top_offset bot_offset">
                    <div class="actions__item actions__item-1">
                        <div class="actions__descr">
                            <div class="actions__descr-title lng-analysisTitle"><?php the_field('action_analysis_title'); ?></div>
                            <div class="actions__descr-text lng-analysisDescr"><?php the_field('action_analysis_descr'); ?></div>
                        </div>
                    </div>
                    <div class="actions__item actions__item-2">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="actions__btn lng-actionBtn promo_link">
                            <?php the_field('action_btn');?>
                        </a>
                    </div>
                    <div class="actions__item actions__item-3">
                        <div class="actions__img">
                            <img src="<?php the_field('action_analysis_img'); ?>">
                        </div>
                    </div>
                    <div class="actions__item actions__item-4">
                        <div class="actions__ul-wrapper">
                            <ul class="actions__ul">
                                <li class="actions__li before-graphbar right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-analysisTitle1">Толық талдау</div>
                                        <div class="actions__li-text lng-analysisText1">Өз бизнесіңізді қашықтан бақылаңыз</div>
                                    </div>
                                </li>
                                <li class="actions__li before-piechart">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-analysisTitle2">Деректерді жинау</div>
                                        <div class="actions__li-text lng-analysisText2">Сатылымдар мен тапсырыстар бойынша есеп берулер</div>
                                    </div>
                                </li>
                                <li class="actions__li before-discount right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-analysisTitle3">Қаржылық есептілік</div>
                                        <div class="actions__li-text lng-analysisText3">Табыс пен пайданы талдау</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="actions__items-block-1 bot_offset top_offset">
                    <div class="actions__item actions__item-1">
                        <div class="actions__descr">
                            <div class="actions__descr-title lng-dataTitle"><?php the_field('action_data_title'); ?></div>
                            <div class="actions__descr-text lng-dataText"><?php the_field('action_data_descr'); ?></div>
                        </div>
                    </div>
                    <div class="actions__item actions__item-2">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="actions__btn lng-actionBtn promo_link"><?php the_field('action_btn');?></a>
                    </div>
                    <div class="actions__item actions__item-3">
                        <div class="actions__img">
                            <img src="<?php the_field('action_data_img'); ?>">
                        </div>
                    </div>
                    <div class="actions__item actions__item-4">
                        <div class="actions__ul-wrapper">
                            <ul class="actions__ul">
                                <li class="actions__li before-user">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-dataLiTitle1">Сатып алушылардың деректері</div>
                                        <div class="actions__li-text lng-dataLiText1">Ақпаратты қосыңыз немесе түзетіңіз</div>
                                    </div>
                                </li>
                                <li class="actions__li before-start right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-dataLiTitle2">Аккаунттың белсенділігі</div>
                                        <div class="actions__li-text lng-dataLiText2">Аккаунт транзакцияларының белсенділігін тексеріңіз</div>
                                    </div>
                                </li>
                                <li class="actions__li before-shoppingbag">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title lng-dataLiTitle3">Сатылымдар</div>
                                        <div class="actions__li-text lng-dataLiText3">Брендтің танымалдығын арттыру жолдары</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <div class="actions__items-block-1 top_offset">
                    <div class="actions__item actions__item-1">
                        <div class="actions__descr">
                            <div class="actions__descr-title">Мобильный кассир</div>
                            <div class="actions__descr-text">Качество собранной информации влияет на качество обслуживания. Довольные клиенты могут советовать ваши услуги своим знакомым и увеличивать тем самым базу.</div>
                        </div>
                    </div>
                    <div class="actions__item actions__item-2">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="actions__btn lng-actionBtn promo_link">
                            <?php the_field('action_btn');?>
                        </a>
                    </div>
                    <div class="actions__item actions__item-3">
                        <div class="actions__img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/actions_img/actions_phone-6.png" alt="create">
                        </div>
                    </div>
                    <div class="actions__item actions__item-4">
                        <div class="actions__ul-wrapper">
                            <ul class="actions__ul">
                                <li class="actions__li before-shoppingcard right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title">Выбор товара</div>
                                        <div class="actions__li-text">Поиск товара и добавление в корзину</div>
                                    </div>
                                </li>
                                <li class="actions__li before-scannercode">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title">Штрих код товара </div>
                                        <div class="actions__li-text">Сканирование товар через баркода</div>
                                    </div>
                                </li>
                                <li class="actions__li before-wallet right_offset">
                                    <div class="actions__li-descr">
                                        <div class="actions__li-title">Оплата покупки</div>
                                        <div class="actions__li-text">Проведение оплаты несколькими методами</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Payment methods-->
    <section class="pmethods">
        <div class="container">
            <div class="pmethods__title lng-pmethodsTitle" id="pmetods"><?php the_field('pmethods_title'); ?></div>
            <div class="pmethods__text lng-pmethodsDescr"><?php the_field('pmethods_descr'); ?></div>
            <div class="pmethods__items">
            <div class="pmethods__item">
                    <div class="pmethods__item-bg">
                        <span>
                            <img class="pmethods__img-size-1" src="<?php the_field('pmethods_img_1');?>">
                        </span>
                    </div>
                    <div class="pmethods__descr">
                        <div class="pmethods__subtitle"><?php the_field('pmethods_subtitle_1');?></div>
                        <div class="pmethods__subtext"><?php the_field('pmethods_subdescr_1');?></div>
                    </div>
                </div>
                <div class="pmethods__item">
                    <div class="pmethods__item-bg">
                        <span>
                            <img class="pmethods__img-size-2" src="<?php the_field('pmethods_img_2');?>">
                        </span>
                    </div>
                    <div class="pmethods__descr">
                        <div class="pmethods__subtitle"><?php the_field('pmethods_subtitle_2');?></div>
                        <div class="pmethods__subtext"><?php the_field('pmethods_subdescr_2');?></div>
                    </div>
                </div>
                <div class="pmethods__item">
                    <div class="pmethods__item-bg">
                        <span>
                            <img class="pmethods__img-size-3" src="<?php the_field('pmethods_img_3');?>">
                        </span>
                    </div>
                    <div class="pmethods__descr">
                        <div class="pmethods__subtitle"><?php the_field('pmethods_subtitle_3');?></div>
                        <div class="pmethods__subtext"><?php the_field('pmethods_subdescr_3');?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--App ios & android-->
    <section class="applications">
        <div class="container">
            <div class="applications__items">
                <div class="applications__item">
                    <a href="#" class="applications__logo">
                        <img src="<?php the_field('app_logo'); ?>">
                    </a>
                </div>
                <div class="applications__item">
                    <div class="applications__title"><?php the_field('app_title'); ?></div>
                </div>
                <div class="applications__apps">
                    <div class="applications__appstore"><a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/appstore_btn.png" alt="in App Store"></a></div>
                    <div class="applications__googleplay"><a href="https://play.google.com/store/apps/details?id=ibusiness.asia" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/googleplay_btn.png" alt="in Google Play"></a></div>
                </div>
            </div>

        </div>
    </section>

    <!--Advantages block-->
    <section class="advantages">
        <div class="container">
            <div class="advantages__subheading" id="about-app"><?php the_field('advantage_subtitle'); ?></div>
            <div class="advantages__items">
                <div class="advantages__item">
                    <div class="advantages__content">
                        <div class="advantages__title"><?php the_field('advantage_title'); ?></div>
                        <div class="advantages__text"><?php the_field('advantage_descr'); ?></div>
                    </div>
                    <div class="advantages__descr">
                        <!--Firts icons block-->
                        <div class="advantages__first-block">
                            <div class="advantages__subscriber advantages__box">
                                <div class="advantages__icon">
                                    <img src="<?php the_field('advantage_first_img'); ?>">
                                </div>
                                <div class="advantages__subtitle"><?php the_field('advantage_first_title'); ?></div>
                                <div class="advantages__subtext"><?php the_field('advantage_first_text'); ?></div>
                            </div>
    
                            <div class="advantages__safety advantages__box">
                                <div class="advantages__icon">
                                    <img src="<?php the_field('advantage_second_img'); ?>">
                                </div>
                                <div class="advantages__subtitle"><?php the_field('advantage_second_title'); ?></div>
                                <div class="advantages__subtext"><?php the_field('advantage_second_text'); ?></div>
                            </div>
                        </div>
    
                        <!-- Second icons block-->
                        <div class="advantages__second-block">
                            <div class="advantages__connection advantages__box">
                                <div class="advantages__icon">
                                    <img src="<?php the_field('advantage_third_img'); ?>">
                                </div>
                                <div class="advantages__subtitle"><?php the_field('advantage_third_title'); ?></div>
                                <div class="advantages__subtext"><?php the_field('advantage_third_text'); ?></div>
                            </div>
    
                            <div class="advantages__security advantages__box">
                                <div class="advantages__icon">
                                    <img src="<?php the_field('advantage_fourth_img'); ?>">
                                </div>
                                <div class="advantages__subtitle"><?php the_field('advantage_fourth_title'); ?></div>
                                <div class="advantages__subtext"><?php the_field('advantage_fourth_text'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantages__item advantages__img">
                    <img src="<?php the_field('advantage_img'); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="accordion">
        <div class="container">
            <div class="accordion__subheading" id="for-whom"><?php the_field('accordion_subtitle'); ?></div>
            <div class="accordion__items">
                <div class="accordion__item">
                    <input checked class="accordion__input" type="radio" name="accordion" id="accordion_1">
                    <label class="accordion__title" for="accordion_1"><?php the_field('accordion_tab1_title'); ?></label>
                    <div class="accordion__content">
                        <div class="accordion__text">
                            <?php the_field('accordion_tab1_descr'); ?>
                        </div>
                        <div class="accordion__bg-1">
                            <img src="<?php the_field('accordion_tab1_img'); ?>">
                        </div>
                    </div>
                    <div class="accordion__border"></div>
                </div>
                <div class="accordion__item">
                    <input class="accordion__input" type="radio" name="accordion" id="accordion_2">
                    <label class="accordion__title" for="accordion_2"><?php the_field('accordion_tab2_title'); ?></label>                   
                    <div class="accordion__content">
                        <div class="accordion__text">
                            <?php the_field('accordion_tab2_descr'); ?>
                        </div>
                        <div class="accordion__bg-2">
                            <img src="<?php the_field('accordion_tab2_img'); ?>">
                        </div>
                    </div>
                    <div class="accordion__border"></div>
                </div>
                <div class="accordion__item">
                    <input class="accordion__input" type="radio" name="accordion" id="accordion_3">
                    <label class="accordion__title" for="accordion_3"><?php the_field('accordion_tab3_title'); ?></label>
                    <div class="accordion__content">
                        <div class="accordion__text">
                            <?php the_field('accordion_tab3_descr'); ?>
                        </div>
                        <div class="accordion__bg-3">
                            <img src="<?php the_field('accordion_tab3_img'); ?>">
                        </div>
                    </div>
                    <div class="accordion__border"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="app-descr">
        <div class="container">
            <div class="app-descr__descr">
                <div class="app-descr__title"><?php the_field('allin_title');?></div>
                <div class="app-descr__text"><?php the_field('allin_descr');?></div>
                <div class="app-descr__box-link">
                    <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" target="_blank" class="app-descr__link promo_link"><?php the_field('allin_link');?></a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
 <!-- Footer Begin -->
 <!-- <footer class="footer">
        <div class="container">
            <div class="footer__items">
                <div class="footer__item">
                    <div class="footer__logo">
                        <a href="#"><img src="<?php the_field('footer_logo');?>"></a>
                    </div>
                    <div class="footer__logo-text"><?php the_field('footer_logo_text');?></div>
                </div>
                <div class="footer__contacts-links">
                    <div class="footer__item">
                        <div class="footer__nav">
                            <div class="footer__nav-title"><?php the_field('footer_files_title');?></div>
                            <ul class="footer__nav-items">
                                <li class="footer__nav-item"><a href="<?php bloginfo('template_url'); ?>/assets/pdf/Правила_платежной_организации_IBusiness.pdf" target="_blank"><?php the_field('footer_files_1');?></a></li>
                                <li class="footer__nav-item"><a href="<?php bloginfo('template_url'); ?>/assets/pdf/offer.pdf" target="_blank"><?php the_field('footer_files_2');?></a></li>
                                <li class="footer__nav-item"><a href="<?php bloginfo('template_url'); ?>/assets/pdf/privacy-policy.pdf" target="_blank">
                                <?php the_field('footer_files_3');?></a></li>
                                <li class="footer__nav-item"><a href="<?php bloginfo('template_url'); ?>/assets/pdf/InstructionOFD.pdf" target="_blank">
                                <?php the_field('footer_files_4');?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__item">
                        <div class="footer__contacts">
                            <div class="footer__contacts-title"><?php the_field('contatcs_title'); ?></div>
                            <div class="footer__contacts-wrapper">
                                <div class="footer__phonebox">
                                    <div class="footer__phone"><a href="tel:77711916817"><?php the_field('contatcs_phone'); ?></a></div>
                                </div>
                                <div class="footer__mailbox">
                                    <a href="mailto:info@ibusiness.asia” "><div class="footer__mail"><?php the_field('contatcs_email'); ?></div></a>
                                </div>
                                <div class="footer__instabox">
                                    <a href="https://www.instagram.com/ibusiness.asia/" target="_blank"><div class="footer__insta"><?php the_field('contatcs_instagram'); ?></div></a>
                                </div>
                                <div class="footer__adressbox">
                                    <div class="footer__adress"><?php the_field('contatcs_adress'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__item footer__app-links">
                    <div class="footer__appstore">
                        <a href="https://apps.apple.com/az/app/ibusiness/id1627195412" class="footer__app-link" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/appstore_btn.png" alt="App Store">
                        </a>
                    </div>
                    <div class="footer__googleplay">
                        <a href="https://play.google.com/store/apps/details?id=ibusiness.asia" class="footer__app-link" target="_blank"class="footer__app-link">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/googleplay_btn.png" alt="Google Play">
                        </a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="footer__mini-text">
                <?php the_field('mini_text'); ?>
            </div>
        </div>
    </footer>/. Footer End -->


    <!-- <script src="https://code.jquery.com/jquery-2.2.4.js"integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hamburger.js"></script> -->
    <?php wp_footer(); ?>
</body>
</html>



</body>
</html> 