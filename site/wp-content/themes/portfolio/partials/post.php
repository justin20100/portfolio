<article class="post post--<?= $modifier; ?>">
    <div class="post__card">
        <header class="post__head reveal">
            <p class="post__number"><?= get_field('numero'); ?></p>
            <h3 class="post__title"><?= get_the_title(); ?></h3>
            <p class="post__meta">Publié par Vincent justin le
                <time class="post__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date(); ?></time>
            </p>
            <?php $link = get_field('link'); ?>
            <a href="<?= $link['url']; ?>" class="post__link__a reveal"><?= $link['title']; ?></a>
        </header>
        <div class="post__excerpt reveal">
            <h4 class="post__excerpt__title">Details</h4>
            <p class="post__excerpt__text"><?= get_the_excerpt(); ?></p>
        </div>
        <figure class="post__fig reveal">
            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'post__thumb']); ?>
        </figure>


    </div>
</article>