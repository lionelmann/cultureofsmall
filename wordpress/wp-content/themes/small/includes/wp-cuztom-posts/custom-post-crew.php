<?php //Connect CPT

$args = array(
	'has_archive' => true,
	'hierarchical' => true,
	'menu_icon' => 'dashicons-smiley', //http://melchoyce.github.io/dashicons/
	'supports'	=> array( 'title', 'page-attributes')
 	);

$crew = register_cuztom_post_type( 'Crew', $args);

$crew->add_meta_box(
	'crew',
	'Member',	
	array(
		array(
			'name'          => 'title',
			'label'         => 'Title',
			'description'   => '',
			'type'          => 'text',          
			),
     	array(
			'name'          => 'image',
			'label'         => 'Image',
			'description'   => 'Dimensions 350px x 350px',
			'type'          => 'image',	
			),
     	array(
			'name'          => 'Bio',
			'label'         => 'Bio',
			'description'   => '',
			'type'          => 'wysiwyg',	
			)
		)
	);	
?>