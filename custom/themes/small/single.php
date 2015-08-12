<?php get_header();?>

<!-- Loop starts -->
<?php if(have_posts()):while(have_posts()):the_post();?>

<!-- Get post thumbnail url -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
?>

<!-- Banner with Title -->
<section role="hero" class="center" style="background-image: url(<?php echo $src[0]; ?>); height: 500px; width: 100%; overflow: hidden; ">
    <header>
        <hgroup>
            <h1 class="headline"><?php the_title(); ?><h1>
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
                $lat            = $meta_data['_map_lat'];
                $lng            = $meta_data['_map_lng'];
                if($lat && $lng):
                    echo '<script>';
                    echo 'var lat = ' . $lat . '; ';
                    echo 'var lng = ' . $lng . ';';
                    echo '</script>';
                    echo '<div id="map"></div>';
                endif;
            }
        }
    ?>

    <div style="height: 300px; background-color: #cccccc;">
    <div style="text-align: center; padding-top: 130px;">
        <?php dynamic_sidebar('cta'); ?>
        </div>
    </div>
<?php get_footer();?>