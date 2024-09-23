<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <title>Associação PG</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner" class="container">
            <div class="first-header">
                <div class="logo">
                    <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="login">
                    <div class="social-networks">
                        <a class="icon facebook" href=""></a>
                        <a class="icon instagram" href=""></a>
                    </div>
                    <div class="form">
                        <div class="username">
                            <div class="icon icon-user"></div>
                            <input type="text" id="username" name="username" placeholder="LOGIN" required>
                        </div>
                        <div class="password">
                            <div class="icon icon-password"></div>
                            <input type="password" id="password" name="password" placeholder="SENHA" required>
                        </div>
                        <button type="submit" class="button button-second send">Entrar</button>
                    </div>
                </div>
    
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" class="menu">
                    <?php 
                        wp_nav_menu(array('
                        theme_location' => 'main-menu',
                        'link_before' => '<span itemprop="name">',
                        'link_after' => '</span>'
                    )); 
                    ?>
                </nav>
            </div>
        </header>
        <div id="container">
            <main id="content" role="main">