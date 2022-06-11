<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= portfolio_mix('css/style.css'); ?>"/>
    <script type="text/javascript" src="<?= portfolio_mix('js/script.js'); ?>"></script>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <h1 class="header__title hidden"><?= get_bloginfo('name'); ?></h1>
    <nav class="header__nav nav">
        <h2 class="nav__title hidden">Navigation principale</h2>
        <div class="nav__logo logo">
            <xml version="1.0" encoding="UTF-8"?><svg class="logo__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 267.13 249.79"><defs><style>.d{fill:#fff;}</style></defs><g id="a"/><g id="b"><g id="c"><path class="d" d="M266.45,41.7l-118.73,205.61c-.93,1.62-2.55,2.44-4.18,2.48-1.72,.04-3.45-.78-4.44-2.48L.67,7.47C-.36,5.7-.14,3.69,.85,2.21,1.72,.91,3.19,0,4.98,0H137.1c2.75,0,4.98,2.23,4.98,4.98V29.25c0,2.75,2.23,4.98,4.98,4.98h35.04c3.83,0,6.22,4.15,4.31,7.47l-39.31,68.09c-1.92,3.32-6.71,3.32-8.63,0L96.27,36.69c-.88-1.52-2.5-2.47-4.25-2.49l-29.65-.34c-1.9-.02-3.46,.99-4.32,2.41-.88,1.46-1.02,3.37-.05,5.06l66.73,115.54,4.39,7.62,8.64,14.95c.97,1.67,2.67,2.49,4.36,2.48,1.66-.01,3.32-.84,4.27-2.49l5.9-10.23,7.1-12.33L228.77,36.72c.89-1.54,2.54-2.49,4.31-2.49h29.06c3.83,0,6.23,4.15,4.31,7.47Z"/></g></g></svg>
        </div>

        <div class="nav__name">
            <p class="name__lastname">VINCENT</p>
            <p class="name__firstname">Justin</p>
        </div>

        <ul class="nav__container nav__flex">
            <li class="nav__item"><a href="#projects">Projects</a></li>
            <li class="nav__item item_2"><a href="">Contact</a></li>
        </ul>
    </nav>
</header>
