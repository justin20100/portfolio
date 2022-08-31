<?php /* Template Name: projects */ ?>
<?php get_header(); ?>
<?php
$ctaImage = get_field('illustration_cta');
?>
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
                        <h3 class="trip__title hidden"><?php the_field('title') ?></h3>
                        <div class="project__container">
                            <div class="project__text">
                                <p class="project_number">0<?= $number; ?></p>
                                <p class="project__description"><?php the_field('description') ?></p>
                            </div>
                            <div class="project__illustration">
                                <div class="project__mockup">
                                    <a href="<?= get_field('link')['url'] ?>"
                                       class="project__url"><?= get_field('link')['url'] ?></a>
                                    <div class="project__view">
                                        <img src="<?= get_field('illustration_site')['url'] ?>"
                                             alt="<?= get_field('illustration_site')['alt'] ?>"
                                             class="project__website">
                                    </div>
                                </div>
                                <button class="project__button"><a href="<?= get_field('link')['url'] ?>"
                                                                   class="project__link"><?= get_field('link')['title'] ?></a>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; else: ?>
                <p class="trips__empty">No projects to show now. Sorry</p>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </main>

<?php get_footer(); ?>