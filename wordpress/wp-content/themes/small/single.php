<?php get_header();?>
    <main>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
            <aside>
                <p>sidebar here</p>
            </aside>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </main>
<?php get_footer();?>