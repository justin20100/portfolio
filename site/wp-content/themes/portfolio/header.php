<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="js/script.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="nav__container">
        Navigation TO DO
    </nav>

    <div class="nav__languages">
        Navigation langues TO DO
    </div>

    <h1 class="header__title"><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline"><?= get_bloginfo('description'); ?></p>
</header>
