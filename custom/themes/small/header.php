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

    <section role="banner">
        <header>
        <?php if(!is_page_template('template-home.php')): ?> <!--NEED TO CHANGE ONCE PAGE IS LIVE -->
            <a href="/"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-cultureofsmall.png"></a>
        <?php endif ?>
            <!--<a href="http://www.google.ca"><button class="btn search" /></button></a>-->
            <button class="btn menu" data-jv-trigger="right" /></button>
            <nav data-jv-content="right">
                <?php wp_nav_menu( array( 'theme_location' => 'right-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
            </nav>
        </header>
    </section>

<input type="checkbox" name="toggle" id="toggle" />
<label for="toggle" class="btn"></label>
<div class="container">
</div>  
<div class="message"><h1>Search</h2>
</div>