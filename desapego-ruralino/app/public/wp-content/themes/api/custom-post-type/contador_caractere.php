<?php

function registrar_caractere(){
    register_post_type('contador_caractere', array(
        'label' => 'Contador',
        'description' => 'Contador',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'contador_caractere', 'with_front' => true),
        'query_var' => true,
        'supports' => array('custom-fields', 'author', 'title'),
        'publicly_queryable' => true
    ));
}

add_action('init', 'registrar_caractere');

?>