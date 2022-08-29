<?php

require_once(__DIR__ . '/customSearchQuery.php');


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

// Fonction qui charge les assets compilés et retourne leure chemin absolu (webpack)

function portfolio_mix($path)
{
    $path = '/' . ltrim($path, '/');

    if (!realpath(__DIR__ . '/public' . $path)) {
        return;
    }

    if (!($manifest = realpath(__DIR__ . '/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest.json
    $manifest = json_decode(file_get_contents($manifest), true);

    // Regarder si on a une clef qui correspond au fichier chargé dans $path
    if (!array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Récupérer & retourner le chemin versionné
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}

// Enregistrer un seul custom post-type pour "projects"
register_post_type('project', [
    'label' => 'Projects',
    'labels' => [
        'name' => 'Projects',
        'singular_name' => 'Project',
    ],
    'description' => 'All the projects by Justin',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 8,
    'menu_icon' => 'dashicons-palmtree',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'projects'],
]);

// Récupérer les projects via une requête Wordpress
function portfolio_get_projects( $search = null)
{
    // 1. on instancie l'objet WP_Query
    $projects = new Portfolio_CustomSearchQuery([
        'post_type' => 'project',
        'orderby' => 'date',
        'order' => 'DESC',
        's' => strlen($search) ? $search : null,
    ]);

    // 2. on retourne l'objet WP_Query
    return $projects;
}

// Fonction permettant d'inclure des "partials" dans la vue et d'y injecter des variables "locales" (uniquement disponibles dans le scope de l'inclusion).

function portfolio_include(string $partial, array $variables = [])
{
    extract($variables);

    include(__DIR__ . '/partials/' . $partial . '.php');
}