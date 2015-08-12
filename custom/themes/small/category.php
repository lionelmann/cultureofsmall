<?php get_header();?>

<?php
	function getPage($id) {
		$page_id 	= $id;
		$page 		= get_post($page_id); 
		$title 		= $page->post_title;
		$content 	= wpautop($page->post_content);
		$image_id 	= get_post_thumbnail_id($page_id);
		$src 	= wp_get_attachment_image_src($image_id, 'half-banner');
?>

	<!-- Banner with Title -->
	<section role="hero" class="center" style="background-image: url(<?php echo $src[0]; ?>);">
	    <header>
	        <hgroup>
	            <h1 class="headline"><?php echo $title; ?><h1>
	        </hgroup>
	    </header>
	</section>

	<section class="category-content">
		<div class="category-content-inner">
			<?php echo $content; ?>
		</div>
	</section>

<?php } ?>

<?php if (is_category('Culture of Energy')) :
	getPage(133);
	elseif (is_category('Culture of Farming')) :
	getPage(128);
	elseif (is_category('Culture of Fishing')) :
	getPage(95);
	elseif (is_category('Culture of Logging')) :
	getPage(112);
	elseif (is_category('Culture of Mining')) :
	getPage(92);
	elseif (is_category('Culture of Outports')) :
	getPage(135);
	elseif (is_category('Culture of Service')) :
	getPage(131);
endif; ?>


	<div id="container">

		<!-- Loop starts -->
		<?php if(have_posts()):while(have_posts()):the_post();?>

		<!-- Get post thumbnail url -->
		<?php
		    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
		?>

		<a href="<?php the_permalink(); ?>">
            <div class="mix" style="background-image: url(<?php echo $src[0]; ?>);">
            <div class="header">
                <span><?php the_title(); ?></span>
                </div>
            </div>
        </a>

		<?php endwhile; else : ?>
		    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>


<?php get_footer();?>