<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Unfiltered analysis on the Dead Internet Theory, synthetic reality, and NPC politics. Verify your humanity, bypass the algorithm, and access the raw intel.">
<meta name="keywords" content="Dead Internet Theory, Independent Intel, Simulation, AI Politics, NPC, Cyberpunk News, Reality Check, Synthetic Media, Digital Resistance">
<meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site-wrapper">

<header class="main-header">
    <div class="header-inner">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                ZEVA<span class="accent-dot">.</span>TECH
            </a>
        </div>
        
        <nav class="main-nav">
            <?php
            if ( has_nav_menu('primary') ) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-list',
                ]);
            }
            ?>
        </nav>

        <div class="header-actions">
            <span class="system-status">
                <span class="pulse-dot"></span> Online
            </span>
        </div>
    </div>
</header>

<main class="content-area">
