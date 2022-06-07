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
require_once(__DIR__ . '/CustomSearchQuery.php');

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


//// Fonction permettant d'inclure des "partials" dans la vue et d'y injecter des variables "locales" (uniquement disponibles dans le scope de l'inclusion).
function portfolio_include(string $partial, array $variables = [])
{
    extract($variables);
    include(__DIR__ . '/partials/' . $partial . '.php');
}


// Gérer l'envoi de formulaire personnalisé
add_action('admin_post_submit_contact_form', 'portfolio_handle_submit_contact_form');

function portfolio_handle_submit_contact_form()
{
    // Instancier le controlleur du form
    $form = new ContactFormController($_POST);
}

function portfolio_get_contact_field_value($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    return $_SESSION['contact_form_feedback']['data'][$field] ?? '';
}

function portfolio_get_contact_field_error($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    if(! ($_SESSION['contact_form_feedback']['errors'][$field] ?? null)) {
        return '';
    }

    return '<p>Ce champ ne respecte pas : ' . $_SESSION['contact_form_feedback']['errors'][$field] . '</p>';
}


// Fonction qui charge les assets compilés et retourne leur chemin absolu (pour les fichiers css et js)
function portfolio_mix($path)
{
    $path = '/' . ltrim($path, '/');

    if(! realpath(__DIR__ .'/public' . $path)) {
        return;
    }

    if(! ($manifest = realpath(__DIR__ .'/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest.json
    $manifest = json_decode(file_get_contents($manifest), true);

    // Regarder si on a une clef qui correspond au fichier chargé dans $path
    if(! array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Récupérer & retourner le chemin versionné
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}



