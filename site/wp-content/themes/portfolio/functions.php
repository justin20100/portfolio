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


// custom post-type pour les projets
register_post_type('project', [
    'label' => 'Projects',
    'labels' => [
        'name' => 'Projects',
        'singular_name' => 'Project',
    ],
    'description' => 'Tous les projects realisé par Justin Vincent',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-category',
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'projet'],
]);

// recuperer les projets via une requete wordpress
function portfolio_get_projets($search = null)
{
    // 1. on instancie l'objet WP_Query
    $projets = new Portfolio_CustomSearchQuery([
        'post_type' => 'projet',
        'orderby' => 'date',
        'order' => 'DESC',
        's' => strlen($search) ? $search : null,
    ]);

    // 2. on retourne l'objet WP_Query
    return $projets;
}

//// Fonction permettant d'inclure des "partials" dans la vue et d'y injecter des variables "locales" (uniquement disponibles dans le scope de l'inclusion).

function portfolio_include(string $partial, array $variables = [])
{
    extract($variables);

    include(__DIR__ . '/partials/' . $partial . '.php');
}







