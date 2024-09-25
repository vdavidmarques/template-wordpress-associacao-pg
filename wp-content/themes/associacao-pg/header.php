<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <title>Associação PG</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
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
                <?php
                $args = array(
                    'name' => 'informacoes-gerais',
                    'post_type' => 'page',
                );

                $query = new WP_Query($args);
                while ($query->have_posts()) :
                    $query->the_post();
                    $socialMedias = get_field('redes_sociais');
                    $facebook = $socialMedias['facebook'];
                    $instagram = $socialMedias['instagram'];
                ?>
                    <div class="login">
                        <div class="social-networks">
                            <?php if ($facebook): ?>
                                <a class="icon facebook" href="<?php echo $facebook; ?>" target="_blank"></a>
                            <?php endif; ?>
                            <?php if ($instagram): ?>
                                <a class="icon instagram" href="<?php echo $instagram; ?>" target="_blank"></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>

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
                        wp_nav_menu(array(
                            '
                        theme_location' => 'main-menu',
                            'link_before' => '<span itemprop="name">',
                            'link_after' => '</span>'
                        ));
                        ?>
                    </nav>
            </div>
        </header>
        <main role="main">