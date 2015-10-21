<?php 
/*
 * Template Name: Home
 */
get_header();?>

<main>
    <div class="nav-home">
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

<?php 
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' =>  $paged,
        'post__not_in' => get_option( 'sticky_posts' ),
        'ignore_sticky_posts' => 1,
); 

$the_query = new WP_Query( $args ); ?>
<div id="container">

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(400, 500) ); ?>

        <a href="<?php the_permalink(); ?>">
            <div class="mix" style="background-image: url(<?php echo $src[0]; ?>);">
                <div class="header">
                    <span><?php the_title(); ?></span>
                </div>
            </div>
        </a>
    <?php endwhile; endif; wp_reset_postdata();?>
</div>

<?php pagination(); ?>
 
<?php get_footer();?>