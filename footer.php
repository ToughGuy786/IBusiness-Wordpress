 <!-- Footer Begin -->
 <footer class="footer">
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
    </footer><!--/. Footer End -->


    <script src="https://code.jquery.com/jquery-2.2.4.js"integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hamburger.js"></script>
	
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script> -->

    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lang.js"></script> -->

    <!-- <script>

        lang_update()

        function lang_update()
        {
            let user_lang = Cookies.get('user_lang') ? Cookies.get('user_lang') : 'ru'

            if(user_lang && user_lang === 'ru' || user_lang && user_lang === 'kz')
            {
                //
            } else {
                user_lang = 'ru'
            }

            jQuery('[data-translate="yes"]').each(function(index, item)
            {
                let _var = jQuery(item).data('var')

                if(_var)
                {
                    jQuery(item).text(langArr[_var][user_lang])
                }
            })
        }

        function change_lang(lang)
        {
            if(lang && lang === 'ru' || lang && lang === 'kz')
            {
                Cookies.set('user_lang', lang)
            } else {
                Cookies.set('user_lang', 'ru')
            }

            lang_update()
        }

        </script> -->

    <?php wp_footer(); ?>
</body>
</html>


<!-- 
</body>
</html> -->