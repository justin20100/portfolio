<?php get_header(); ?>
<?php
$ctaImage = get_field('illustration_cta');
$aboutImage = get_field('illustration_about');
?>

    <div class="cta">
        <div class="cta__container">
            <div class="cta__text">
                <p class="cta__title">Welcome to <strong class="cta__strongName">Justin</strong>'s portfolio.</p>
                <p class="cta__description"><strong class="cta__strong">Web Design</strong> and <strong
                            class="cta__strong">Development</strong>
                    projects</p>
            </div>
            <div class="cta__illustration">
                <img class="cta__img" src="<?= $ctaImage['url'] ?>" alt="<?= $ctaImage['alt'] ?>">
            </div>
        </div>
    </div>
    </header>
    <main class="layout">
        <div class="projects">
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
                                           class="project__url"><?= get_field('link')['url'] ?></a>
                                    </div>
                                    <div class="project__view">
                                        <img src="<?= get_field('illustration_site')['url'] ?>"
                                             alt="<?= get_field('illustration_site')['alt'] ?>"
                                             class="project__website">
                                    </div>
                                    <div class="button">

                                        <a href="<?= get_field('link')['url'] ?>"
                                           class="project__link"><?= get_field('link')['title'] ?></a>
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
        </div>

        <div class="about">
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
        </div>
    </main>
<?php get_footer(); ?>