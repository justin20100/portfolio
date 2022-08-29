<?php get_header(); ?>
<?php
$ctaImage = get_field('illustration_cta');
$aboutImage = get_field('illustration_about');
?>
<main class="layout">
    <ul>
        <li><?php the_field('cta'); ?></li>
        <li><?php the_field('description_cta'); ?></li>
        <li><img src="<?= $ctaImage['url'] ?>" alt=""></li>
        <li><?php the_field('title_top'); ?></li>
        <li><?php the_field('title_about'); ?></li>
        <li><img src="<?= $aboutImage['url'] ?>" alt=""></li>
        <li><?php the_field('description_about'); ?></li>
        <li><?= get_field('button_about')['title']; ?></li>
    </ul>

    <?php
    if(($trips = portfolio_get_projects())->have_posts()): while($trips->have_posts()): $trips->the_post();
        portfolio_include('project');
    endwhile; else: ?>
        <p class="trips__empty">No projects to show now. Sorry</p>
    <?php endif; wp_reset_query();?>

</main>
<?php get_footer(); ?>