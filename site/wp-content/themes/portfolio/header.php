<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('name'); ?></title>
    <link rel="icon" href="<?= get_field('illustration_about')['url']; ?>">
    <link rel="stylesheet" type="text/css" href="<?= portfolio_mix('css/style.css'); ?>"/>
    <script type="text/javascript" src="<?= portfolio_mix('js/script.js'); ?>"></script>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <h1 class="header__title hidden"><?= get_bloginfo('name'); ?></h1>

    <ul class="nav__container navbar">
        <?php foreach (portfolio_get_menu_items('primary') as $link): ?>
            <li class="<?= $link->getBemClasses('nav__item'); ?> <?= 'nav__' . $link->label; ?>">
                <a href="<?= $link->url; ?>"<?= $link->title ? ' title="' . $link->title . '"' : ''; ?>class="nav__link"><?= $link->label; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</header>