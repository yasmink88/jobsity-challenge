<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title(); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        
        <!-- Navigation -->
        
            <?php
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-nav',
            'menu_class' => 'menu',
            ]);
            ?>
        
    </div>
</header>