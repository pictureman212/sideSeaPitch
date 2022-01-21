
<?php
/* 
This is code used to create the custom post type of Program. I know that this should live within the mu-plugins folder to allow user to access this information if they change themes. However, I am including here in this specific instance to consolidate my code within the parameters I was given and to make it easier to see. 
*/
function program_function(){
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all-items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-admin-site'
    ));
}

add_action('init', 'program_function');

?>