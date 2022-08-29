<footer class="footer">
    <section class="footer__body">
        <h2 class="footer__title hidden">Footer</h2>
        <div class="footer__container">
            <div class="footer__part">
                <svg class="footer__svg" width="270" height="270" viewBox="0 0 270 270" fill="none">
                    <path d="M99.8963 139.264L75.0945 93.8158C73.291 90.5078 75.6825 86.4738 79.4537 86.4705L128.026 86.4409C130.772 86.4376 132.996 88.6616 132.996 91.4079V95.8459C132.996 98.5889 135.22 100.813 137.963 100.813H144.875C148.698 100.813 151.09 104.952 149.178 108.263L137.589 128.331C135.677 131.646 130.9 131.646 128.988 128.335L114.511 103.257C113.634 101.739 112.021 100.796 110.267 100.777L104.462 100.708C100.612 100.662 98.1783 104.824 100.1 108.158L125.694 152.483L127.546 155.692L128.693 157.676C130.605 160.988 135.384 160.988 137.296 157.676L140.295 152.483L168.694 103.296C169.581 101.759 171.221 100.813 172.994 100.813H179.844C183.618 100.813 186.013 104.85 184.203 108.161L151.172 168.583C148.462 173.694 141.586 177.324 133.535 177.324C126.397 177.324 120.52 172.791 117.317 168.583L99.8996 139.264H99.8963Z"
                          fill="#87A330"/>
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
        </div>
    </section>
</footer>
</body>
</html>