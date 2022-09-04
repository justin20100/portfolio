<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>

    <div class="contactIntro">
        <div class="contactIntro__container">
            <div class="contactIntro__text">
                <h2 class="contactIntro__title"><?php the_field('title') ?></h2>
                <p class="contactIntro__description"><?php the_field('description') ?></p>
            </div>
            <img src="<?= get_field('illustration')['url'] ?>" alt="<?= get_field('illustration')['alt'] ?>"
                 class="contactIntro__img">
        </div>
    </div>

    </header>
    <main class="layout contact">
        <div class="contact__container">
            <?php if (!isset($_SESSION['contact_form_feedback']) || !$_SESSION['contact_form_feedback']['success']) : ?>
                <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="POST" class="contact__form form"
                      id="contact">
                    <?php if (isset($_SESSION['contact_form_feedback'])) : ?>
                        <p class="contact__alert">There are errors in the form</p>
                    <?php endif; ?>
                    <div class="form__field">
                        <label for="firstname" class="form__label">Firstname</label>
                        <?= portfolio_get_contact_field_error('firstname'); ?>
                        <input type="text" name="firstname" id="firstname" class="form__input" placeholder="ex: Lucas"
                               value="<?= portfolio_get_contact_field_value('firstname'); ?>">
                    </div>
                    <div class="form__field">
                        <label for="lastname" class="form__label">Lastname</label>
                        <?= portfolio_get_contact_field_error('lastname'); ?>
                        <input type="text" name="lastname" id="lastname" class="form__input" placeholder="ex: Dupont"
                               value="<?= portfolio_get_contact_field_value('lastname'); ?>">
                    </div>
                    <div class="form__field">
                        <label for="email" class="form__label">Email</label>
                        <?= portfolio_get_contact_field_error('email'); ?>
                        <input type="email" name="email" id="email" class="form__input" placeholder="ex: lucas.dupont@gmail.com"
                               value="<?= portfolio_get_contact_field_value('email'); ?>">
                    </div>
                    <div class="form__field">
                        <label for="message" class="form__label">Your message</label>
                        <?= portfolio_get_contact_field_error('message'); ?>
                        <textarea name="message" id="message" cols="30" rows="10"
                                  class="form__input" placeholder="what you have to say to me"><?= portfolio_get_contact_field_value('message'); ?></textarea>
                    </div>
                    <div class="form__field">
                        <label for="rules" class="form__checkbox">
                        <?= portfolio_get_contact_field_error('rules'); ?>
                            <input type="checkbox" name="rules" id="rules" value="1"/>
                            <span class="form__checklabel">I agree to <a
                                        href="#">the terms and conditions of use</a>.</span>
                        </label>
                    </div>
                    <div class="form__actions">
                        <?php wp_nonce_field('nonce_submit_contact'); ?>
                        <input type="hidden" name="action" value="submit_contact_form"/>
                        <button class="form__button" type="submit">Send</button>
                    </div>
                </form>
            <?php else : ?>
                <p id="contact__success">Thank you! Your message has been sent.</p>
                <?php unset($_SESSION['contact_form_feedback']); endif; ?>
        </div>
    </main>
<?php get_footer(); ?>