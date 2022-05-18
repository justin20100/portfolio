<?php get_header(); ?>

<main class="layout">
    <section class="layout__projects">
        <h2 class="projects__title">My projects</h2>
        <?php while(have_posts()) {the_post(); ?>

            <article class="Projects__article project">
                <div class="project__left">
                    <h3 class="project__title"><?php the_title(); ?></h3>

                </div>
                <div class="project__right">
                    <h4 class="project__subtitle">Details</h4>
                    <p class="project__excerpt"><?= get_the_excerpt();?></p>
                    <a href="" class="project__link"> Link TO DO </a>
                </div>
                <figure class="project__fig">
                    <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'post__thumb']); ?>
                </figure>
            </article>

        <?php } ?>
    </section>
</main>

<?php get_footer(); ?>