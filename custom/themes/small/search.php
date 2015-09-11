<?php get_header(); ?>

<!-- Get post thumbnail url -->
<?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "half-banner" );
?>

<!-- Banner with Title -->
<section role="hero" class="center" style="background-image: url(<?php echo $src[0]; ?>);">
    <header>
        <hgroup>
            <h1 class="headline"><?php echo $wp_query->found_posts; ?> <?php _e( 'results for', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>
        </hgroup>
    </header>
</section>

<main>
    <article class="center">

    <!-- Loop starts -->
    <?php 
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $s = get_search_query();
        $args = array(
            'paged' =>  $paged,
            's' => $s
        ); 

        $the_query = new WP_Query( $args ); 
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words( get_the_content(), 40, '...' );?><a href="<?php the_permalink(); ?>">read more</a></p>
    
    <?php endwhile; else: ?>

        <h4>No Results</h4>
        <p>Please feel free try again!</p>
       
    <?php endif;  ?>

    <?php pagination(); ?>
</article>
</main>

<?php get_footer(); ?>