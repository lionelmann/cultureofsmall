<?php get_header();?>
<!-- Loop starts -->
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