<aside>
    <?php 
        $terms = wp_get_post_terms($post->ID, 'community');

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            echo '<ul>';
            foreach ( $terms as $term ) {
                    
                $meta_data      = get_cuztom_term_meta($term->term_id, $term->taxonomy);
                $description    = wpautop(term_description($term->term_id, $term->taxonomy ));
                $title          = $term->name;
                $slug           = $term->slug;
                $population     = $meta_data['_population'];
                $distance       = $meta_data['_distance'];
                $income_select  = $meta_data['_income_select'];
                $city           = stripslashes($meta_data['_city']);

                echo '<a href="' . get_term_link($term->term_id, $term->taxonomy) . '"><p>' . $title . '</p></a>';                   
                if($population):
                    echo '<li>' . $population . ' people'. '</li>';
                endif;
                if($income):
                    echo '<li>' . $income . '</li>';
                endif;
                if($distance && $city):
                    echo '<li>' . $distance . 'km' . ' to ' . $city . '</li>';
                endif;
                if($income_select != "none"):
                    echo '<li>' . '$' . $income_select . '/per year' . '</li>';
                endif;
            }
            echo '</ul>';
            if($description):
                echo $description;
            endif;
        }
    ?>
    <p>CULTURE</p>
    <?php the_category();?>
    <p>RECENT ARTICLES: </p>
    <?php recentposts(); ?>
</aside>