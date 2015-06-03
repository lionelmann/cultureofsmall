<?php //Community Taxonomy


$community = register_cuztom_taxonomy( 'Community', 'post' );

$community->add_term_meta (
        array(
            array(
                'name'        => 'population',
                'label'       => 'Population',
                'description' => 'Community population',
                'type'        => 'text'
            ),
            array(
                'name'        => 'income',
                'label'       => 'Average income',
                'description' => 'Average income',
                'type'        => 'text'
            ),
           	array(
                'name'        => 'map',
                'label'       => 'Google Map',
                'description' => 'Google map url',
                'type'        => 'text'
            ),
            array(
                'name'        => 'image',
                'label'       => 'Community Image',
                'description' => 'Community Image',
                'type'        => 'image'
            ),
        )
    );
?>