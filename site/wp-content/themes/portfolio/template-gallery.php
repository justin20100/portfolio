<?php /* Template Name: gallery */ ?>
<?php get_header(); ?>
<?php
$ctaImage = get_field('illustration_cta');
?>
    <div class="projectsIntro">
        <div class="projectsIntro__container">
            <div class="projectsIntro__text">
                <h1 class="projectsIntro__title"><?php the_field('title') ?></h1>
            </div>
            <img src="<?= get_field('illustration')['url'] ?>" alt="<?= get_field('illustration')['alt'] ?>" class="projectsIntro__img">
        </div>
    </div>
    </header>
    <main class="layout">
        <div class="cards">
            <?php if (($trips = portfolio_get_projects())->have_posts()): while ($trips->have_posts()): $trips->the_post(); ?>
                <article class="card">
                    <div class="card__container">
                        <div class="card__illustration">
                            <img src="<?= get_field('illustration')['url'] ?>" alt="<?= get_field('illustration')['alt'] ?>" class="card__illustration">
                        </div>
                        <div class="card__text">
                            <h2 class="card__title"><?php the_field('title') ?></h2>
                            <p class="card__description"><?php the_field('description') ?></p><a target="_blank" href="<?= get_field('link')['url'] ?>" class="card__link"><?= get_field('link')['title'] ?></a>
                        </div>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p class="trips__empty">No projects to show now. Sorry</p>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </main>

<?php get_footer(); ?>