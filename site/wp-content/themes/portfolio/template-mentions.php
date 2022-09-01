<?php /* Template Name: legal mentions template */ ?>
<?php get_header(); ?>
</header>
<main class="layout_mentions">
    <section class="mentions">
        <h1 class="mentions__title"><?php the_field('title'); ?></h1>
        <div class="mentions__container">
            <div class="mentions__part">
                <h2 class="mentions__subtitle"><?php the_field('subtitle_1'); ?></h2>
                <p class="mentions__text"><?php the_field('list_1'); ?></p>
                <p class="mentions__text"><?php the_field('list_2'); ?></p>
                <p class="mentions__text"><?php the_field('list_3'); ?></p>
            </div>
            <div class="mentions__part">
                <h2 class="mentions__subtitle"><?php the_field('subtitle_2'); ?></h2>
                <p class="mentions__text"><?php the_field('text_1'); ?></p>
            </div>
            <div class="mentions__part">
                <h2 class="mentions__subtitle"><?php the_field('subtitle_3'); ?></h2>
                <p class="mentions__text"><?php the_field('text_2'); ?></p>
            </div>

        </div>
    </section>
</main>
<?php get_footer(); ?>
