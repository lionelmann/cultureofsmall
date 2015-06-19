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
            'name'          => 'income_select',
            'label'         => 'Average income',
            'description'   => 'Average income per year',
            'type'          => 'select',
            'options'       => array(
                'none'      => '',
                '10,000'        => '10',
                '20,000'        => '20',
                '30,000'        => '30',
                '40,000'        => '40',
                '50,000'        => '50',
                '60,000'        => '60',
                '70,000'        => '70',
                '80,000'        => '80',
                '90,000'        => '90',
                '100,000'       => '100',
                '110,000'       => '110',
                '120,000'       => '120',
                '130,000'       => '130',
                '140,000'       => '140',
                '150,000'       => '150',
                '160,000'       => '160',
                '170,000'       => '170',
                '180,000'       => '180',
                '190,000'       => '190',
                '200,000'       => '200',

                ),
                'default_value' => 'none'
            ),
            /*
            array(
                'name'        => 'income',
                'label'       => 'Average income',
                'description' => 'Average income',
                'type'        => 'text'
            ),
            */
            array(
                'name'        => 'distance',
                'label'       => 'Distance to nearest city',
                'description' => 'Distance to nearest city in kilometers',
                'type'        => 'text'
            ),
            array(
                'name'        => 'city',
                'label'       => 'Name of nearest city',
                'description' => 'Name of the closest city',
                'type'        => 'text'
            ),
           	array(
                'name'        => 'map_lat',
                'label'       => 'Google Map Latitude',
                'description' => 'ex: <i>2.357188</i>. Go to <a href="https://support.google.com/maps/answer/18539?hl=en" target="_blank">Google support</a> for help finding coordinates', 
                'type'        => 'text'
            ),
            array(
                'name'        => 'map_lng',
                'label'       => 'Google Map Longitude',
                'description' => 'ex: <i>48.867442</i>. Go to <a href="https://support.google.com/maps/answer/18539?hl=en" target="_blank">Google support</a> for help finding coordinates', 
                'type'        => 'text'
            ),
        )
    );
?>