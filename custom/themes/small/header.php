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
    <link rel='stylesheet' href='<?php bloginfo('template_url' ); ?>/style.css' async='async' type='text/css' media='all' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php //include_once("analyticstracking.php") ?>

    <section role="banner">
        <header class="jv-fixed">
            <div class="logo">
                <img src="http://placehold.it/150x70&text=Small Logo">
            </div>
            <div>
                <button class="btn" data-jv-trigger="left"></button>
                <button class="btn" data-jv-trigger="right"></button>  
                <nav data-jv-content="left" data-jv-order="0">
                    <ul role="navigation">
                        <li>Left</li>                                                                                                                                                                         
                    </ul>
                </nav>
                <nav data-jv-content="right" data-jv-order="0">
                    <ul role="navigation">
                        <li>Right</li>                                                                                                                                                                        
                    </ul>
                </nav>                    
            </div>
        </header>
    </section>