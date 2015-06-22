<?php 
/*
 * Template Name: Home
 */
get_header();?>

 <!-- Get post thumbnail url -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
?>

<section role="slider" style="background-image: url(<?php echo $src[0]; ?>); height: 500px; width: 100%; overflow: hidden;">
    <header>
        <hgroup>
            <img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-cultureofsmall.png"><br>
            <p class="tagline">from natural to cultural resources | a network for small communities</p>
        </hgroup>
    </header>
</section>

<main>
    <div class="filters">
        <ul>
            <li class="filter" data-filter=".culture-of-outports"><a class="anchor" href="#">Culture of Outports</a></li>
            <li class="filter" data-filter=".culture-of-fishing"><a class="anchor" href="#">Culture of Fishing</a></li>
            <li class="filter" data-filter=".culture-of-mining"><a class="anchor" href="#">Culture of Mining</a></li>
            <li class="filter" data-filter=".culture-of-logging"><a class="anchor" href="#">Culture of Logging</a></li>
            <li class="filter" data-filter=".culture-of-energy"><a class="anchor" href="#">Culture of Energy</a></li>
            <li class="filter" data-filter=".culture-of-farming"><a class="anchor" href="#">Culture of Farming</a></li>
            <li class="filter" data-filter=".culture-of-service"><a class="anchor" href="#">Culture of Service</a></li>
            <li class="filter" data-filter="all"><a class="anchor" href="#">All</a></li>
            <!--
            <li class="sort" data-sort="default"><a class="anchor" href="#">Default</a></li>
            <li class="sort" data-sort="myorder:asc"><a class="anchor" href="#">Ascending</a></li>
            <li class="sort" data-sort="myorder:desc"><a class="anchor" href="#">Descending</a></li>
            <li class="sort" data-sort="random"><a class="anchor" href="#">Random</a></li>
            -->
        </ul>
    </div>

<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1
); 

$loop = new WP_Query($args); ?>

<div id="container">

<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(300, 400) ); ?>

    <?php $category_classes = ''; ?>

    <?php $categories = get_the_terms($post->ID , 'category'); 
    $terms = wp_get_post_terms($post->ID, 'community'); ?>

    <?php if($categories){
        foreach($categories as $category){
            $category_classes .= ' '.$category->slug;
        };
        foreach ( $terms as $term ) {
            $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
            $description    = term_description($term->term_id, $term->taxonomy );
            $title          = $term->name;
            $population     = $meta_data['_population'];
        };
    }; 
    ?>
    <?php if($src) : ?>
        <a href="<?php the_permalink(); ?>">
            <div class="mix<?php echo $category_classes; ?>" data-myorder="1" style="background-image: url(<?php echo $src[0]; ?>);">
                <div class="overlay">
                <?php the_title(); ?>
                </div>
            </div>
        </a>
    <?php endif ?>
        
<?php endwhile; endif; ?>

</div>  
</main>

<?php get_footer();?>