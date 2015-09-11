<aside>
    <?php 
        $terms = wp_get_post_terms($post->ID, 'community');

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            echo '<ul class="meta animated fadeIn">';
            foreach ( $terms as $term ) {
                    
                $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
                $description    = wpautop(term_description($term->term_id, $term->taxonomy ));
                $title          = $term->name;
                $slug           = $term->slug;
                $population     = $meta_data['_population'];
                $distance       = $meta_data['_distance'];
                $average_income = $meta_data['_income'];
                $city           = stripslashes($meta_data['_city']);
                    
                if($population):
                    echo '<li>' . '<span>' . $population . '</span>' . ' <br>people live here'. '</li>';
                endif;
                if($distance && $city):
                    echo '<li>' . '<span>' . $distance . '</span>' . '<br>' . 'km from '. stripslashes($city) . '</li>';
                endif;
                if($average_income):
                    echo '<li>' . '<span>' . $average_income . '</span>' . '<br>Average yearly salary' . '</li>';
                endif;
            }
            echo '</ul>';

            echo '<h3><a href="' . get_term_link($term->term_id, $term->taxonomy) . '">' . $title . '</a></h3>'; 
            echo '<span style="margin-top: -20px; display: block; font-size: .9rem;">';
            the_category(', ');
            echo '</span>';
            if($description):
                echo $description;
            endif;
        }
    ?>
</aside>