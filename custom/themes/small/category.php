<?php get_header();?>

<?php
	function getPage($id) {
		$page_id 	= $id;
		$page 		= get_post($page_id); 
		$title 		= $page->post_title;
		$content 	= wpautop($page->post_content);
		$image_id 	= get_post_thumbnail_id($page_id);
		$image_src 	= wp_get_attachment_image_src($image_id, 'half-banner');
?>

<!--
<section role="slider">
	<header>
		<hgroup>
			<div class="bgvid" data-vide-bg="http://sugarcoateddoc.com/sugar-30trim.mp4" data-vide-options="loop: true, muted: true, position: 50% 50%"></div>
			<h1 class="page-headline">About Sugar Coated<h1>
		</hgroup>
	</header>
</section>

.bgvid {
    position: fixed; 
    right: 0; 
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    width: auto; 
    height: auto; 
    z-index: -100;
}

-->


	<section role="hero" style="background-image: url(<?php echo $image_src[0]; ?>); overflow: hidden;">
	    <header>
	        <hgroup>
	        
	        	<div style="width: 36.2%; float: left;">
	            <h2 class="headline" style="font-size: 3em; font-weight: 100; margin-top: 50%; padding: .5em; text-align: center; text-shadow: 0px 1px #000;"><?php echo $title; ?></h2>
	            </div>
	            <div style="width: 61.8%; float:right; background-color: rgba(61,152,216, .7); color: white; padding: 4em; height: 100vh;">
	            <div style="overflow: hidden; height: 80vh;">
	            <p><?php echo $content; ?></p>
	            </div>
	            </div>
	        
	        </hgroup>
	    </header>
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


<section style="background-color: white;" >
<main >
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
</section>

<?php get_footer();?>