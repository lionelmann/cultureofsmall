<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta property="og:site_name" content="<?php bloginfo('name') ?>">
    <meta property="og:title" content="<?php bloginfo('name') ?>">
    <meta property="og:image" content="">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php //include_once("analyticstracking.php") ?>

    <!-- Banner with Title -->
    <section role="banner">
        <header>
            <?php if(is_page_template('template-home.php')) : ?>
                <div class="cta">
                    <a href="">Submit a Story</a>
                </div>
                <a href="/home"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-small-bw.png" class=" animated fadeInDown"></a>
                <div class="cta">
                    <a href="/about-us/">Find out More</a>
                </div>
                <p class="tagline">from natural to cultural resources<br>a network for small communities</p>
            <?php else : ?>
                <div class="cta cta__reverse">
                    <a href="/submit-a-story/">Submit a Story</a>
                </div>
                <a href="/home"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-cultureofsmall.png" class=" animated fadeInDown"></a>
                <div class="cta cta__reverse">
                    <a href="">Find out More</a>
                </div>
            <?php endif; ?>
                <?php //dynamic_sidebar('cta'); ?>
        </header>

        <button class="btn menu" data-jv-trigger="right" /></button>
            <nav data-jv-content="right">
                <?php wp_nav_menu( array( 'theme_location' => 'right-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
            </nav>
    </section>

    <input type="checkbox" name="toggle" id="toggle" />
    <label for="toggle" class="btn"></label>
    <div class="container"></div>  
    <div class="message">
        <h1>Search</h2>
    </div>