<?php get_header(); ?>

    <main class="layout">
        <section class="layout__projets projets">
            <h2 class="projets__title"><?= 'Mes projets' ?></h2>
            <div class="projets__container">
                <?php if (have_posts()): ?>
                    <?php  while (have_posts()): the_post();?>
                    <?php portfolio_include('post')?>
                    <?php  endwhile; ?>
                <?php else: ?>
                    <p class="projets__message">Il n'y a pas d'articles</p>
                <?php endif;?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>