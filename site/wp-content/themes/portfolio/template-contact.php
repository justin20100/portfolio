<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout">
        <h1 class="contact__title">Contact me</h1>
        <div class="layout__contact">
            <?php if (!isset($_SESSION['contact_form_feedback']) || !$_SESSION['contact_form_feedback']['success']) : ?>
                <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="POST" class="contact__form form"
                      id="contact">
                    <?php if (isset($_SESSION['contact_form_feedback'])) : ?>
                        <p>There are errors in the form</p>
                    <?php endif; ?>
                    <div class="form__field">
                        <label for="firstname" class="form__label">Firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form__input"
                               value="<?= portfolio_get_contact_field_value('firstname'); ?>">
                        <?= portfolio_get_contact_field_error('firstname'); ?>
                    </div>
                    <div class="form__field">
                        <label for="lastname" class="form__label">Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form__input"
                               value="<?= portfolio_get_contact_field_value('lastname'); ?>">
                        <?= portfolio_get_contact_field_error('lastname'); ?>
                    </div>
                    <div class="form__field">
                        <label for="email" class="form__label">Email</label>
                        <input type="email" name="email" id="email" class="form__input"
                               value="<?= portfolio_get_contact_field_value('email'); ?>">
                        <?= portfolio_get_contact_field_error('email'); ?>
                    </div>
                    <div class="form__field">
                        <label for="message" class="form__label">Your message</label>
                        <textarea name="message" id="message" cols="30" rows="10"
                                  class="form__input"><?= portfolio_get_contact_field_value('message'); ?></textarea>
                        <?= portfolio_get_contact_field_error('message'); ?>
                    </div>
                    <div class="form__field">
                        <label for="rules" class="form__checkbox">
                            <input type="checkbox" name="rules" id="rules" value="1"/>
                            <span class="form__checklabel">I accept the <a
                                        href="#">terms and conditions of use</a>.</span>
                        </label>
                        <?= portfolio_get_contact_field_error('rules'); ?>
                    </div>
                    <div class="form__actions">
                        <?php wp_nonce_field('nonce_submit_contact'); ?>
                        <input type="hidden" name="action" value="submit_contact_form"/>
                        <button class="form__button" type="submit">Send</button>
                    </div>
                </form>
            <?php else : ?>
        </div>
        <p id="contact">Thanks for the message.</p>
        <?php unset($_SESSION['contact_form_feedback']);
        endif; ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>