<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>

    <div class"contactIntro">
        <div class="contactIntro__container">
            <div class="contactIntro__text">
                <h1 class="contactIntro__title"><?php the_field('title') ?></h1>
            </div>
            <img src="<?= get_field('illustration')['url'] ?>" alt="<?= get_field('illustration')['alt'] ?>"
                 class="contactIntro__img">
        </div>
    </div>

    </header>
    <main class="layout contact">
        <h2 class="contact__title"><?= get_the_title(); ?></h2>
        <div class="contact__content">
            <?php the_content(); ?>
        </div>
        <?php if (!isset($_SESSION['contact_form_feedback']) || !$_SESSION['contact_form_feedback']['success']) : ?>
            <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="POST" class="contact__form form"
                  id="contact">
                <?php if (isset($_SESSION['contact_form_feedback'])) : ?>
                    <p>Oups ! Il y a des erreurs dans le formulaire</p>
                <?php endif; ?>
                <div class="form__field">
                    <label for="firstname" class="form__label">Votre prénom</label>
                    <input type="text" name="firstname" id="firstname" class="form__input"
                           value="<?= portfolio_get_contact_field_value('firstname'); ?>">
                    <?= portfolio_get_contact_field_error('firstname'); ?>
                </div>
                <div class="form__field">
                    <label for="lastname" class="form__label">Votre nom</label>
                    <input type="text" name="lastname" id="lastname" class="form__input"
                           value="<?= portfolio_get_contact_field_value('lastname'); ?>">
                    <?= portfolio_get_contact_field_error('lastname'); ?>
                </div>
                <div class="form__field">
                    <label for="email" class="form__label">Votre adress email</label>
                    <input type="email" name="email" id="email" class="form__input"
                           value="<?= portfolio_get_contact_field_value('email'); ?>">
                    <?= portfolio_get_contact_field_error('email'); ?>
                </div>
                <div class="form__field">
                    <label for="message" class="form__label">Votre message</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                              class="form__input"><?= portfolio_get_contact_field_value('message'); ?></textarea>
                    <?= portfolio_get_contact_field_error('message'); ?>
                </div>
                <div class="form__field">
                    <label for="rules" class="form__checkbox">
                        <input type="checkbox" name="rules" id="rules" value="1"/>
                        <span class="form__checklabel">J'accepte les <a href="#">conditions générales d'utilisation</a>.</span>
                    </label>
                    <?= portfolio_get_contact_field_error('rules'); ?>
                </div>
                <div class="form__actions">
                    <?php wp_nonce_field('nonce_submit_contact'); ?>
                    <input type="hidden" name="action" value="submit_contact_form"/>
                    <button class="form__button" type="submit">Envoyer</button>
                </div>
            </form>
        <?php else : ?>
            <p id="contact">Merci ! Votre message a bien été envoyé.</p>
            <?php unset($_SESSION['contact_form_feedback']); endif; ?>
    </main>
<?php get_footer(); ?>