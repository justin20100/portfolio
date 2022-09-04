<?php get_header(); ?>
<?php
$ctaImage = get_field('illustration_cta');
$aboutImage = get_field('illustration_about');
?>

    <div class="cta">
        <div class="cta__container">
            <div class="cta__text">
                <p class="cta__title"><?= the_field('cta') ?></p>
                <p class="cta__description"><?= the_field('description_cta') ?></p>
            </div>
            <div class="cta__illustration">
                <img class="cta__img" src="<?= $ctaImage['url'] ?>" alt="<?= $ctaImage['alt'] ?>">
            </div>
        </div>
    </div>
    </header>
    <main class="layout">
        <section class="projects">
            <h2 class="projects__title"><?php the_field('title_top'); ?></h2>
            <?php
            $number = 0;
            if (($trips = portfolio_get_projects())->have_posts()): while ($trips->have_posts()): $trips->the_post(); ?>
                <?php if (get_field('if_top')):
                    $number++; ?>
                    <article class="project">
                        <div class="project__container">
                            <h3 class="trip__title hidden"><?php the_field('title') ?></h3>
                            <div class="project__text">
                                <p class="project_number">0<?= $number; ?></p>
                                <p class="project__description"><?php the_field('description') ?></p>
                            </div>
                            <div class="project__illustration">
                                <div class="project__mockup">
                                    <div class="project__adress">
                                        <a href="<?= get_field('link')['url'] ?>"
                                           class="project__url" target="_blank"><?= get_field('link')['url'] ?></a>
                                    </div>
                                    <svg class="project__svg" viewBox="0 0 996 49" fill="none" >
                                        <path d="M11.3926 0H984.585C990.881 0 995.977 5.12405 995.977 11.4044V48.3838H0V11.4044C0 5.12405 5.11873 0 11.3926 0Z" fill="#E8E8E8"/>
                                        <path d="M30.0106 29.588C32.9877 29.588 35.4012 27.1721 35.4012 24.1919C35.4012 21.2117 32.9877 18.7958 30.0106 18.7958C27.0335 18.7958 24.6201 21.2117 24.6201 24.1919C24.6201 27.1721 27.0335 29.588 30.0106 29.588Z" fill="#EC5F5B"/>
                                        <path d="M46.7929 29.588C49.77 29.588 52.1834 27.1721 52.1834 24.1919C52.1834 21.2117 49.77 18.7958 46.7929 18.7958C43.8158 18.7958 41.4023 21.2117 41.4023 24.1919C41.4023 27.1721 43.8158 29.588 46.7929 29.588Z" fill="#FBBB32"/>
                                        <path d="M63.5761 29.588C66.5532 29.588 68.9666 27.1721 68.9666 24.1919C68.9666 21.2117 66.5532 18.7958 63.5761 18.7958C60.599 18.7958 58.1855 21.2117 58.1855 24.1919C58.1855 27.1721 60.599 29.588 63.5761 29.588Z" fill="#4FAF44"/>
                                        <path d="M919.921 11.9939H901.417C898.715 11.9939 896.524 14.1865 896.524 16.8912V31.4698C896.524 34.1746 898.715 36.3672 901.417 36.3672H919.921C922.623 36.3672 924.813 34.1746 924.813 31.4698V16.8912C924.813 14.1865 922.623 11.9939 919.921 11.9939Z" fill="#FBFAFB"/>
                                        <path d="M666.816 10.8376H329.184C325.582 10.8376 322.661 13.7611 322.661 17.3674V28.6811C322.661 32.2874 325.582 35.2108 329.184 35.2108H666.816C670.419 35.2108 673.339 32.2874 673.339 28.6811V17.3674C673.339 13.7611 670.419 10.8376 666.816 10.8376Z" fill="#FBFAFB"/>
                                        <path d="M909.435 23.0129H906.808V30.2002H914.531V23.0129H912.425" stroke="#1D1D1B" stroke-width="0.21" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M910.658 18.1836V26.3231" stroke="#1D1D1B" stroke-width="0.21" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M953.238 11.9939H934.734C932.032 11.9939 929.842 14.1865 929.842 16.8912V31.4698C929.842 34.1746 932.032 36.3672 934.734 36.3672H953.238C955.94 36.3672 958.131 34.1746 958.131 31.4698V16.8912C958.131 14.1865 955.94 11.9939 953.238 11.9939Z" fill="#FBFAFB"/>
                                        <path d="M107.742 11.9939H95.6477C93.3586 11.9939 91.5029 13.8515 91.5029 16.143V32.218C91.5029 34.5095 93.3586 36.3672 95.6477 36.3672H107.742C110.032 36.3672 111.887 34.5095 111.887 32.218V16.143C111.887 13.8515 110.032 11.9939 107.742 11.9939Z" fill="#FBFAFB"/>
                                        <path d="M945.878 22.2874H939.921V28.273H945.878V22.2874Z" stroke="#1D1D1B" stroke-width="0.21" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M942.276 20.927V20.1108H948.075V25.9604H947.055" stroke="#1D1D1B" stroke-width="0.21" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M908.257 21.1537L910.658 18.1836" stroke="#1D1D1B" stroke-width="0.21" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M913.126 21.1537L910.726 18.1836" stroke="#1D1D1B" stroke-width="0.21" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M104.028 20.0428L99.3623 24.1919L104.028 28.341" stroke="#1D1D1B" stroke-width="0.23" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M129.372 11.9939H117.278C114.989 11.9939 113.133 13.8515 113.133 16.143V32.218C113.133 34.5095 114.989 36.3672 117.278 36.3672H129.372C131.661 36.3672 133.517 34.5095 133.517 32.218V16.143C133.517 13.8515 131.661 11.9939 129.372 11.9939Z" fill="#FBFAFB"/>
                                        <path d="M120.992 20.0428L125.658 24.1919L120.992 28.341" stroke="#1D1D1B" stroke-width="0.23" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="project__view">
                                        <img src="<?= get_field('illustration_site')['url'] ?>"
                                             alt="<?= get_field('illustration_site')['alt'] ?>"
                                             class="project__website">
                                    </div>
                                    <div class="button">
                                        <a href="<?= get_field('link')['url'] ?>"
                                           class="project__link" target="_blank"><?= get_field('link')['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; else: ?>
                <p class="trips__empty">No projects to show now. Sorry</p>
            <?php endif;
            wp_reset_query(); ?>
        </section>

        <section class="about">
            <h2 class="about__title"><?php the_field('title_about'); ?></h2>
            <div class="about__container">
                <div class="about__illustration">
                    <img src="<?= $aboutImage['url'] ?>" alt="<?= $aboutImage['alt'] ?>" class="about__img">
                </div>
                <div class="about__text">
                    <p class="about__description"><?php the_field('description_about'); ?></p>
                    <a href="<?= get_field('button_about')['url']; ?>"
                       class="about__button"><?= get_field('button_about')['title']; ?></a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>