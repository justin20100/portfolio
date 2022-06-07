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
        <aside class="layout__contact">
            <h2 class="contact__title"><?= get_the_title(); ?></h2>
            <div class="contact__content">
                <?php the_content(); ?>
            </div>
            <?php if(! isset($_SESSION['contact_form_feedback']) || ! $_SESSION['contact_form_feedback']['success']) : ?>
                <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="POST" class="contact__form form" id="contact">
                    <?php if(isset($_SESSION['contact_form_feedback'])) : ?>
                        <p><?= __('Oups ! Il y a des erreurs dans le formulaire','dw'); ?></p>
                    <?php endif; ?>
                    <div class="form__field">
                        <label for="firstname" class="form__label">Votre prénom</label>
                        <input type="text" name="firstname" id="firstname" class="form__input" value="<?= portfolio_get_contact_field_value('firstname'); ?>">
                        <?= portfolio_get_contact_field_error('firstname'); ?>
                    </div>
                    <div class="form__field">
                        <label for="lastname" class="form__label">Votre nom</label>
                        <input type="text" name="lastname" id="lastname" class="form__input" value="<?= portfolio_get_contact_field_value('lastname'); ?>">
                        <?= portfolio_get_contact_field_error('lastname'); ?>
                    </div>
                    <div class="form__field">
                        <label for="email" class="form__label">Votre adress email</label>
                        <input type="email" name="email" id="email" class="form__input" value="<?= portfolio_get_contact_field_value('email'); ?>">
                        <?= portfolio_get_contact_field_error('email'); ?>
                    </div>
                    <div class="form__field">
                        <label for="message" class="form__label">Votre message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form__input"><?= portfolio_get_contact_field_value('message'); ?></textarea>
                        <?= portfolio_get_contact_field_error('message'); ?>
                    </div>
                    <div class="form__actions">
                        <?php wp_nonce_field('nonce_submit_contact'); ?>
                        <input type="hidden" name="action" value="submit_contact_form" />
                        <button class="form__button" type="submit">Envoyer</button>
                    </div>
                </form>
            <?php else : ?>
                <p id="contact"><?= __('Merci ! Votre message a bien été envoyé.','dw'); ?></p>
                <?php unset($_SESSION['contact_form_feedback']); endif; ?>
        </aside>
    </main>

<?php get_footer(); ?>