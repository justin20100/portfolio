<?php if (get_field('if_top')): ?>
<article class="trip">
    <div class="trip__card">
        <header class="trip__head">
            <h3 class="trip__title"><?= get_the_title(); ?></h3>
            <h3 class="trip__title"><?php the_field('title') ?></h3>
            <h3 class="trip__title"><?php the_field('description') ?></h3>
    </div>
</article>
<?php endif;?>