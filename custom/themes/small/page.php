<?php get_header();?>

<!-- Loop starts -->
<?php if(have_posts()):while(have_posts()):the_post();?>

<!-- Get post thumbnail url -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
?>

<!-- Banner with Title -->
<section role="hero" class="center" style="background-image: url(<?php echo $src[0]; ?>); height: 500px; width: 100%; overflow: hidden;">
    <header>
        <hgroup>
            <h1 class="headline"><?php the_title(); ?><h1>
        </hgroup>
    </header>
</section>

<!-- Main Article -->
<main>
    <article class="center">
        <?php the_content(); ?>
    </article>
</main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>