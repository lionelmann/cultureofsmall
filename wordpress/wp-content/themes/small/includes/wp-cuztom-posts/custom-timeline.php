<?php //Timeline CPT

$args = array(
    'has_archive' => true,
    'menu_icon' => 'dashicons-groups', //http://melchoyce.github.io/dashicons/
    'supports'  => array( 'title' )
    );

$timeline = register_cuztom_post_type( 'Timeline', $args);

$timeline->add_meta_box(
    'timeline',
    'content', 
    array(
        array(
            'name'          => 'text',
            'label'         => 'Story (Optional)',
            'description'   => 'Enter Content',
            'type'          => 'textarea',
        ),
        array(
            'name'          => 'video',
            'label'         => 'Video URL (Optional)',
            'description'   => 'Example: http://www.vimeo.com/...',
            'type'          => 'text',
        ),
        array(
            'name'          => 'type',
            'label'         => 'Media Type',
            'description'   => 'Select the type of content',
            'type'          => 'radios',
            'options'       => array(
                'text'      => 'Text',
                'video'     => 'Video',
                'image'     => 'Image'
            ),
            'default_value' => 'text'
        ),
        
        array(
            'name'          => 'pubdate',
            'label'         => 'Date',
            'description'   => 'Date',
            'type'          => 'date',
        ),
    )
);
?>