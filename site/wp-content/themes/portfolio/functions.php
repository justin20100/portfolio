<?php
require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');
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

// Enregistrer les zones de menus
register_nav_menu('primary', 'Navigation principale (haut de page)');

// Fonction pour récupérer les éléments d'un menu sous forme d'un tableau d'objets
function portfolio_get_menu_items($location)
{
    $items = [];

    // Récupérer le menu Wordpress pour $location
    $locations = get_nav_menu_locations();

    if(! ($locations[$location] ?? false)) {
        return $items;
    }

    $menu = $locations[$location];

    // Récupérer tous les éléments du menu récupéré
    $posts = wp_get_nav_menu_items($menu);

    // Formater chaque élément dans une instance de classe personnalisée
    // Boucler sur chaque $post
    foreach($posts as $post) {
        // Transformer le WP_Post en une instance de notre classe personnalisée
        $item = new PrimaryMenuItem($post);

        // Ajouter au tableau d'éléments de niveau 0.
        if(! $item->isSubItem()) {
            $items[] = $item;
            continue;
        }

        // Ajouter $item comme "enfant" de l'item parent.
        foreach($items as $parent) {
            if(! $parent->isParentFor($item)) continue;

            $parent->addSubItem($item);
        }
    }

    // Retourner un tableau d'éléments du menu formatés
    return $items;
}

// Générer un lien vers la première page utilisant un certain template

function portfolio_get_template_page(string $template)
{
    // Créer une WP_Query
    $query = new WP_Query([
        'post_type' => 'page', // uniquement récupérer des pages
        'post_status' => 'publish', // uniquement les pages publiées
        'meta_query' => [
            [
                'key' => '_wp_page_template',
                'value' => $template . '.php', // Filtrer sur le template utilisé
            ]
        ]
    ]);

    // Retourner le premier Post en question
    return $query->posts[0] ?? null;
}