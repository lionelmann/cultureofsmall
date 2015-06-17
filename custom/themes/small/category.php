<?php get_header();?>
<!-- Loop starts -->
<ul>
<?php if(have_posts()):while(have_posts()):the_post();?>

<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?>asdf</a></li>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</ul>
<?php get_footer();?>