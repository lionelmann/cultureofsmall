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
            <h1 class="page-headline"><?php the_title();?><h1>
        </hgroup>
    </header>
</section>

<main>
    <div class="filters">
        <ul>
            <li class="filter" data-filter="all"><a class="anchor" href="#">Show All</a></li>
            <li class="filter" data-filter=".culture-of-outports"><a class="anchor" href="#">Outports</a></li>
            <li class="filter" data-filter=".culture-of-fishing"><a class="anchor" href="#">Fishing</a></li>
            <li class="filter" data-filter=".culture-of-mining"><a class="anchor" href="#">Mining</a></li>
            <li class="filter" data-filter=".culture-of-logging"><a class="anchor" href="#">Logging</a></li>
            <li class="filter" data-filter=".culture-of-energy"><a class="anchor" href="#">Energy</a></li>
            <li class="filter" data-filter=".culture-of-farming"><a class="anchor" href="#">Farming</a></li>
            <li class="filter" data-filter=".culture-of-service"><a class="anchor" href="#">Service</a></li>
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

    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "medium" ); ?>

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
    <a href="<?php the_permalink(); ?>">
    <div class="mix<?php echo $category_classes; ?> desaturate" data-myorder="1" style="background-image: url(<?php echo $src[0]; ?>);">
        <?php the_title(); ?>
    </div>
    </a>
<?php endwhile; endif; ?>


</div>  
</main>

<?php get_footer();?>