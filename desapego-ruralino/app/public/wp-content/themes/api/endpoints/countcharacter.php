<?php

function api_countcharacter($request){

    $response = array(
        "nome" => "Miqueias"
    );

    return rest_ensure_response($response);


}

function retristrar_api_contador(){
    register_rest_rout('api', '/countword', array(
        array(
            'methods' => 'GET' , //WP_REST_Server::CREATABLE,
            'callback' => 'api_countcharacter'
        ),
        ));
}

add_action('rest_api_init', 'registrar_api_contador');

?>