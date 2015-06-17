<?php get_header();?>

<!-- Loop starts -->
<?php if(have_posts()):while(have_posts()):the_post();?>

<!-- Get post thumbnail url -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
?>

<!-- Banner with Title -->
<section role="slider" style="background-image: url(<?php echo $src[0]; ?>); height: 500px; width: 100%; overflow: hidden;">
    <header>
        <hgroup>
            <h2 class="headline"><?php the_title(); ?><h2>
        </hgroup>
    </header>
</section>

<!-- Main Article and Aside -->
<main>
    <article>
        <?php the_content(); ?>
    </article>
    <?php get_sidebar(); ?>
</main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

    <?php 
        $terms = wp_get_post_terms($post->ID, 'community');
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
       
            foreach ( $terms as $term ) {
                $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
                $map            = $meta_data['_map'];
                if($map):    
                 echo '<iframe src="http://maps.google.com/maps?z=9&t=m&q=loc:38.9419+-78.3020&output=embed" width="100%"></iframe>';
                endif;
            }
       
        }
    ?>
<?php get_footer();?>