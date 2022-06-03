<?php get_header(); ?>

    <main class="layout">
        <section class="layout__projets projets">
            <h2 class="projets__title"><?= 'Mes projets' ?></h2>
            <div class="projets__container">
                <?php
                if (($projets = portfolio_get_projets())->have_posts()): while ($projets->have_posts()): $projets->the_post();
                    portfolio_include('projet');
                endwhile;
                else: ?>
                    <p class="projets__empty"><?="Il n'y a pas encore des projets sur ce site." ?></p>
                <?php endif; ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>