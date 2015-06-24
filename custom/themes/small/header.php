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
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Trykker' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='<?php bloginfo('template_url' ); ?>/style.css' async='async' type='text/css' media='all' />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php //include_once("analyticstracking.php") ?>

    <section role="banner">
        <header>
        <?php if(is_home): ?> <!--NEED TO CHANGE ONCE PAGE IS LIVE -->
            <a href="/"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-cultureofsmall.png"></a>
        <?php endif ?>
            <button class="btn" data-jv-trigger="right" /></button>
            <nav data-jv-content="right">
                <?php wp_nav_menu( array( 'theme_location' => 'right-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
            </nav>
        </header>
    </section>