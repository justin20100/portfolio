<footer class="footer">
    <section class="footer__body">
        <h2 class="footer__title hidden">Footer</h2>
        <div class="footer__container">
            <div class="footer__part">
                <svg width="88" height="73" viewBox="0 0 88 73" fill="none" class="footer__svg">
                    <path d="M20.1768 42.3797L0.519076 6.35783C-0.910343 3.73593 0.985136 0.538616 3.97416 0.536012L42.4721 0.512576C44.6488 0.509972 46.4115 2.27267 46.4115 4.44934V7.96691C46.4115 10.141 48.1742 11.9037 50.3483 11.9037H55.8264C58.8571 11.9037 60.7525 15.1843 59.2372 17.8088L50.0514 33.7147C48.5361 36.3418 44.7504 36.3418 43.235 33.7173L31.7606 13.8408C31.0654 12.6379 29.787 11.8906 28.3967 11.875L23.796 11.8203C20.7444 11.7839 18.8151 15.0828 20.3383 17.7255L40.6235 52.8569L42.092 55.4007L43.0007 56.9733C44.516 59.5978 48.3044 59.5978 49.8197 56.9733L52.1969 52.8569L74.7057 13.872C75.4086 12.6535 76.7079 11.9037 78.1139 11.9037H83.5425C86.5342 11.9037 88.4323 15.1036 86.9976 17.7281L60.8176 65.6175C58.6696 69.6689 53.2201 72.5459 46.8385 72.5459C41.1807 72.5459 36.5227 68.9528 33.9841 65.6175L20.1794 42.3797H20.1768Z" fill="#A1C349"/>
                </svg>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle"><?php the_field('title_nav_footer'); ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="<?= get_field('nav_footer_1')['url']; ?>"
                                                class="footer__link animatedLink"><?= get_field('nav_footer_1')['title']; ?></a></li>
                    <li class="footer__item"><a href="<?= get_field('nav_footer_2')['url']; ?>"
                                                class="footer__link animatedLink"><?= get_field('nav_footer_2')['title']; ?></a></li>
                </ul>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle"><?php the_field('title_social_footer'); ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="<?= get_field('social_footer_1')['url']; ?>"
                                                class="footer__link animatedLink" target="_blank"><?= get_field('social_footer_1')['title']; ?></a>
                    </li>
                    <li class="footer__item"><a href="<?= get_field('social_footer_2')['url']; ?>"
                                                class="footer__link animatedLink" target="_blank"><?= get_field('social_footer_2')['title']; ?></a>
                    </li>
                </ul>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle"><?php the_field('title_contact_footer'); ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="<?= get_field('contact_footer_1')['url']; ?>"
                                                class="footer__link animatedLink"><?= get_field('contact_footer_1')['title']; ?></a>
                    </li>
                    <li class="footer__item"><a href="<?= get_field('contact_footer_2')['url']; ?>"
                                                class="footer__link animatedLink"><?= get_field('contact_footer_2')['title']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__mentions">
            <a href="<?= get_the_permalink(portfolio_get_template_page('template-mentions')); ?>" class="footer__mentionsLink">Legal mentions</a>
        </div>
    </section>
    <script type="text/javascript" src="<?= portfolio_mix('js/script.js'); ?>"></script>
</footer>
</body>
</html>