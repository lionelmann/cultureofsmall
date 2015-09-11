<?php get_header(); ?>

<main>
<article class="center">

    <?php 
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $s = get_search_query();
        $args = array(
            'paged' =>  $paged,
            's' => $s
    ); 

    $the_query = new WP_Query( $args ); ?>

    <h3><?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h3>

    

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="excerpt-content">
            <?php echo wp_trim_words( get_the_content(), 40, '...' );?><a href="<?php the_permalink(); ?>">read more</a></p>
        </div>

        <?php endwhile; else: ?>

        <div class="no-results">
            <h2>No Results</h2>
            <p>Please feel free try again!</p>
            <?php get_search_form(); ?>
        </div>

    <?php endif;  ?>

    <?php //wp_reset_query(); ?>

    <?php pagination(); ?>

</article>
</main>

<?php get_footer(); ?>