<?php

//require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');
//require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');
//require_once(__DIR__ . '/Forms/BaseFormController.php');
//require_once(__DIR__ . '/Forms/ContactFormController.php');
//require_once(__DIR__ . '/Forms/Sanitizers/BaseSanitizer.php');
//require_once(__DIR__ . '/Forms/Sanitizers/TextSanitizer.php');
//require_once(__DIR__ . '/Forms/Sanitizers/EmailSanitizer.php');
//require_once(__DIR__ . '/Forms/Validators/BaseValidator.php');
//require_once(__DIR__ . '/Forms/Validators/RequiredValidator.php');
//require_once(__DIR__ . '/Forms/Validators/EmailValidator.php');
//require_once(__DIR__ . '/Forms/Validators/AcceptedValidator.php');


// Lancer la sessions PHP pour pouvoir passer des variables de page en page
add_action('init', 'portfolio_boot_theme', 1);

function portfolio_boot_theme()
{
    load_theme_textdomain('portfolio', __DIR__ . '/locales');

    if (!session_id()) {
        session_start();
    }
}


// Désactiver l'éditeur "Gutenberg" de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

// Activer les images sur les articles
add_theme_support('post-thumbnails');
