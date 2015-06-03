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
        <?php 
            $terms = wp_get_post_terms($post->ID, 'community');

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                echo '<ul>';
                foreach ( $terms as $term ) {
                    
                    $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
                    $description    = term_description($term->term_id, $term->taxonomy );
                    $title          = $term->name;
                    $population     = $meta_data['_population'];
                    $map            = $meta_data['_map'];
                    $income         = $meta_data['_income'];

                    echo '<h6>' . $title . '</h6>';
                    if($description):
                        echo $description;
                    endif;
                    if($population):
                        echo '<li>' . $population . '</li>';
                    endif;
                    if($map):
                        echo '<li>' . $map . '</li>';
                    endif;
                    if($income):
                        echo '<li>' . $income . '</li>';
                    endif;
                }
                echo '</ul>';   
            }
        ?>
    </aside>
</main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer();?>