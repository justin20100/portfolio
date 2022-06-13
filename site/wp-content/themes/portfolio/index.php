<?php get_header(); ?>

    <main class="layout">
        <section class="layout__banner banner">
            <h2 class="banner__title hidden"></h2>
            <div class="banner__container">
                <div class="banner__illustration">
                    <img alt="illustration 3D d'une main sur un rond" class="banner__img" src="<?php echo get_bloginfo('template_url') ?>/resources/img/banner.png">
                </div>
                <div class="banner__text">
                    <p class="banner__text__p">Welcome to <strong>Justin</strong>&apos;s gallery of <strong>Web</strong> Design & Development <strong>projects</strong>. </p>
                </div>
            </div>
        </section>
        <section id="projets" class="layout__projets projets">
            <h2 class="projets__title">My projects</h2>
            <div class="projets__container">
                <?php $numero = 0  ?>
                <?php if (have_posts()): ?>
                    <?php  while (have_posts()): the_post();?>
                    <?php portfolio_include('post')?>
                    <?php  endwhile; ?>
                <?php else: ?>
                    <p class="projets__message">Il n&apos;y a pas d&apos;articles</p>
                <?php endif;?>
            </div>
        </section>
        <section class="layout__about about">
            <h2 class="about__title">Contact me</h2>
            <div class="about__container">
                <div class="about__img">
                    <img src="<?php echo get_bloginfo('template_url') ?>/resources/img/profile.jpeg" alt="">
                </div>
                <div class="about__text">
                    <p>I&apos;m Justin Vincent and I&apos;m learning web development at the Higher Educational Institution of Liege&apos;s province. If you want to contact me, please use the button below.</p>
                    <a href="/contact" class="about__link">Send a message</a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>