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
                //$income_select  = $meta_data['_income_select'];
                $average_income = $meta_data['_income'];
                $city           = stripslashes($meta_data['_city']);

                                  
                if($population):
                    echo '<li>' . '<span>' . $population . '</span>' . ' <br>people live here'. '</li>';
                endif;
                if($distance && $city):
                    echo '<li>' . '<span>' . $distance . '</span>' . '<br>' . 'kilometers from the city of '. stripslashes($city) . '</li>';
                endif;
                if($average_income):
                    echo '<li>' . '<span>' . $average_income . '</span>' . '<br>Average yearly salary' . '</li>';
                endif;
            }
            echo '</ul>';

            echo '<h4><a href="' . get_term_link($term->term_id, $term->taxonomy) . '">' . $title . '</a></h4>'; 
            if($description):
                echo $description;
            endif;
        }
    ?>
    <h4>CULTURE</h4>
    <?php the_category();?>
</aside>