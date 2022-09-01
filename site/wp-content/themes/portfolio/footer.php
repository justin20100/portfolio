<footer class="footer">
    <section class="footer__body">
        <h2 class="footer__title hidden">Footer</h2>
        <div class="footer__container">
            <div class="footer__part">
                <svg class="footer__svg" width="111" height="92" viewBox="0 0 111 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.8963 53.2639L1.09446 7.81578C-0.70901 4.50777 1.68248 0.473776 5.45368 0.470491L54.0259 0.440922C56.7722 0.437637 58.9961 2.66159 58.9961 5.40787V9.84592C58.9961 12.5889 61.2201 14.8129 63.9631 14.8129H70.8747C74.6985 14.8129 77.09 18.952 75.1781 22.2633L63.5886 42.3314C61.6767 45.646 56.9003 45.646 54.9884 42.3347L40.5113 17.2569C39.6342 15.7392 38.0213 14.7964 36.2671 14.7767L30.4625 14.7077C26.6124 14.6617 24.1783 18.8239 26.1 22.1581L51.6935 66.4828L53.5463 69.6923L54.6927 71.6764C56.6046 74.9877 61.3843 74.9877 63.2962 71.6764L66.2954 66.4828L94.6944 17.2963C95.5813 15.7589 97.2205 14.8129 98.9944 14.8129H105.844C109.618 14.8129 112.013 18.8501 110.203 22.1614L77.1721 82.5827C74.462 87.6942 67.5864 91.3241 59.5349 91.3241C52.3965 91.3241 46.5196 86.7908 43.3167 82.5827L25.8996 53.2639H25.8963Z" fill="#87A330"/>
                </svg>

            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle"><?php the_field('title_nav_footer'); ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="<?= get_field('nav_footer_1')['url']; ?>"
                                                class="footer__link"><?= get_field('nav_footer_1')['title']; ?></a></li>
                    <li class="footer__item"><a href="<?= get_field('nav_footer_2')['url']; ?>"
                                                class="footer__link"><?= get_field('nav_footer_2')['title']; ?></a></li>
                </ul>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle"><?php the_field('title_social_footer'); ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="<?= get_field('social_footer_1')['url']; ?>"
                                                class="footer__link"><?= get_field('social_footer_1')['title']; ?></a>
                    </li>
                    <li class="footer__item"><a href="<?= get_field('social_footer_2')['url']; ?>"
                                                class="footer__link"><?= get_field('social_footer_2')['title']; ?></a>
                    </li>
                </ul>
            </div>
            <div class="footer__part">
                <h3 class="footer__subtitle"><?php the_field('title_contact_footer'); ?></h3>
                <ul class="footer__list">
                    <li class="footer__item"><a href="<?= get_field('contact_footer_1')['url']; ?>"
                                                class="footer__link"><?= get_field('contact_footer_1')['title']; ?></a>
                    </li>
                    <li class="footer__item"><a href="<?= get_field('contact_footer_2')['url']; ?>"
                                                class="footer__link"><?= get_field('contact_footer_2')['title']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__mentions">
            <a href="<?= get_the_permalink(portfolio_get_template_page('template-mentions')); ?>" class="footer__mentionsLink">Legal mentions</a>
        </div>
    </section>
</footer>
</body>
</html>