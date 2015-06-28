<aside>
    <?php 
        $terms = wp_get_post_terms($post->ID, 'community');

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            echo '<ul class="meta">';
            foreach ( $terms as $term ) {
                    
                $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
                $description    = wpautop(term_description($term->term_id, $term->taxonomy ));
                $title          = $term->name;
                $slug           = $term->slug;
                $population     = $meta_data['_population'];
                $distance       = $meta_data['_distance'];
                $income_select  = $meta_data['_income_select'];
                $city           = stripslashes($meta_data['_city']);

                                  
                if($population):
                    echo '<li>' . '<span>' . $population . '</span>' . ' <br>people'. '</li>';
                endif;
                if($distance && $city):
                    echo '<li>' . '<span>' . $distance . '</span>' . '<br>' . stripslashes($city) . '</li>';
                endif;
                if($income_select != "none"):
                    echo '<li>' . '<span>' . $income_select . '</span>' . '<br>Average salary' . '</li>';
                endif;
            }
            echo '</ul>';

            echo '<h5><a href="' . get_term_link($term->term_id, $term->taxonomy) . '">' . $title . '</a></h5>'; 
            if($description):
                echo $description;
            endif;
        }
    ?>
    <h6>CULTURE</h6>
    <?php the_category();?>
    <h6>RECENT ARTICLES: </h6>
    <?php recentposts(); ?>
</aside>