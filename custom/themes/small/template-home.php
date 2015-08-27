<?php 
/*
 * Template Name: Home
 */
get_header();?>

<!-- Filter Menu -->

<main>
    <div class="filters">
        <ul>
            <li class="filter"><a href="/category/culture-of-outports/">Outports</a></li>
            <li class="filter"><a href="/category/culture-of-fishing/">Fishing</a></li>
            <li class="filter"><a href="/category/culture-of-mining/">Mining</a></li>
            <li class="filter"><a href="/category/culture-of-logging/">Logging</a></li>
            <li class="filter"><a href="/category/culture-of-energy/">Energy</a></li>
            <li class="filter"><a href="/category/culture-of-farming/">Farming</a></li>
            <li class="filter"><a href="/category/culture-of-service/">Service</a></li>
        </ul>
    </div>
</main>

<!-- Filter Images -->
<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 9
); 

$loop = new WP_Query($args); ?>

<div id="container">
    <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(400, 500) ); ?>

        <?php $category_classes = ''; ?>

        <?php $categories = get_the_terms($post->ID , 'category'); 
            $terms = wp_get_post_terms($post->ID, 'community'); 
        ?>

        <?php if($categories){
            foreach($categories as $category){
                $category_classes .= ' '.$category->slug;
            };
            foreach ( $terms as $term ) {
                $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
                $description    = term_description($term->term_id, $term->taxonomy );
            };
        }; 
        ?>

        <a href="<?php the_permalink(); ?>">
            <div class="mix<?php echo $category_classes; ?>" data-myorder="<?php echo get_the_ID(); ?>" style="background-image: url(<?php echo $src[0]; ?>);">
                <div class="header">
                    <span><?php the_title(); ?></span>
                </div>
            </div>
        </a>
          
    <?php endwhile; endif; ?>
</div>
 
<?php get_footer();?>