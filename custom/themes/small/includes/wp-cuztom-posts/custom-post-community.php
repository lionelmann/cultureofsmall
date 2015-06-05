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
                'name'        => 'map',
                'label'       => 'Google map',
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