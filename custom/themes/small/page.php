<?php get_header();?>

<!-- Loop starts -->
<?php if(have_posts()):while(have_posts()):the_post();?>

<!-- Get post thumbnail url -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
?>

<!-- Banner with Title -->
<section role="slider" style="background-image: url(<?php echo $src[0]; ?>); height: 400px; width: 100%; overflow: hidden;">
    <header>
        <hgroup>
            <h1 class="page-headline"><?php the_title(); ?><h1>
        </hgroup>
    </header>
</section>

<!-- Main Article and Aside -->
<main>
    <article>
        <?php the_content(); ?>
    </article>
    <aside>
        <p>sidebar here</p>
    </aside>
</main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>