<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!--
        Tout le contenu de la partie head de mon site
     -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Execution de la fonction wp_head() obligatoire ! -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <!-- Tout le contenu de l entête de mon site -->
    <h1>Bienvenue sur ecolo site!</h1>
    <nav>
        <a href="/edsa-WordPress/ecolosite/index.php">Accueil</a>
        <a href="/edsa-WordPress/ecolosite/a-propos">A propos</a>
        <a href="">Les articles</a>
        <a href="evenement.php">Les evenements</a>
        <a href="">Les actions</a>
    </nav>
</header>

<div class="row"></div>