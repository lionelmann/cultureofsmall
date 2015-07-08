<?php get_header();?>
<!-- Loop starts -->

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
                    echo '<div id="map" style="height: 500px; z-index: -200;"></div>';
                endif;
            }
        }
    ?>



<main>
	<div id="container">

		<!-- Loop starts -->
		<?php if(have_posts()):while(have_posts()):the_post();?>

		<!-- Get post thumbnail url -->
		<?php
		    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
		?>

		<a href="<?php the_permalink(); ?>">
			<div class="mix" style="background-image: url(<?php echo $src[0]; ?>);">
				<div class="overlay">
					<?php the_title(); ?>
				</div>
		    </div>
		</a>

		<?php endwhile; else : ?>
		    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer();?>