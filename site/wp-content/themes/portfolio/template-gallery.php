<?php /* Template Name: gallery */ ?>
<?php get_header(); ?>
<?php
$ctaImage = get_field('illustration_cta');
?>
    <div class="gallery">
        <div class="gallery__container">
            <div class="gallery__text">
                <h2 class="gallery__title"><?php the_field('title') ?></h2>
                <p class="gallery__description"><?php the_field('description') ?></p>
            </div>
            <img src="<?= get_field('illustration')['url'] ?>" alt="<?= get_field('illustration')['alt'] ?>" class="gallery__img">
        </div>
    </div>
    </header>
    <main class="layout">
        <section class="cards">
            <h2 class="cards__title hidden">All the projects</h2>
            <?php if (($trips = portfolio_get_projects())->have_posts()): while ($trips->have_posts()): $trips->the_post(); ?>
                <article class="card">
                    <div class="card__container">
                        <div class="card__illustration">
                            <img src="<?= get_field('illustration')['url'] ?>" alt="<?= get_field('illustration')['alt'] ?>" class="card__illustration">
                        </div>
                        <div class="card__text">
                            <h3 class="card__title"><?php the_field('title') ?></h3>
                            <p class="card__description"><?php the_field('description') ?></p>
                            <p class="card__date">Published by <?= get_the_author_firstname(); ?> in <time class="post__date" datetime="<?= get_the_date('M Y'); ?>"><?= get_the_date('M Y'); ?></time></p>
                            <a target="_blank" href="<?= get_field('link')['url'] ?>" class="card__link"><?= get_field('link')['title'] ?></a>
                        </div>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p class="trips__empty">No projects to show now. Sorry</p>
            <?php endif;
            wp_reset_query(); ?>
        </section>
    </main>

<?php get_footer(); ?>