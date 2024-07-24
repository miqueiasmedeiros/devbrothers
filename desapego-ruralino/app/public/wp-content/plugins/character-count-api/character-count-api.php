<?php
/*
Plugin Name: Character Count API Integration
Description: Integra a API de contagem de caracteres, palavras e linhas ao WordPress.
Version: 1.0
Author: Seu Nome
*/

// Enqueue o JavaScript que fará a requisição AJAX
function enqueue_character_count_scripts() {
    wp_enqueue_script('character-count-script', plugin_dir_url(__FILE__) . 'character-count.js', array('jquery'), '1.0', true);
    wp_localize_script('character-count-script', 'characterCountApi', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'api_url' => 'http://desapego-ruralino.local/characterCountApi.php' // Altere para a URL correta da sua API
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_character_count_scripts');

// Adiciona um shortcode para exibir o formulário
function character_count_form() {
    return '<form id="character-count-form">
                <textarea id="text-input" rows="10" cols="50" placeholder="Digite o texto aqui..."></textarea>
                <button type="button" id="count-button">Contar</button>
                <div id="result"></div>
            </form>';
}
add_shortcode('character_count_form', 'character_count_form');

// Manipula a requisição AJAX
function handle_character_count_ajax() {
    // Pega o texto enviado pela requisição AJAX
    $text = isset($_POST['text']) ? wp_unslash($_POST['text']) : '';

    // Faz a requisição para a API externa
    $api_url = 'http://desapego-ruralino.local/characterCountApi.php'; // Altere para a URL correta da sua API
    $response = wp_remote_post($api_url, array(
        'body' => json_encode(array('text' => $text)),
        'headers' => array('Content-Type' => 'application/json')
    ));

    if (is_wp_error($response)) {
        wp_send_json_error(array('message' => 'Erro ao conectar com a API.'));
    } else {
        wp_send_json_success(json_decode(wp_remote_retrieve_body($response), true));
        if (isset($data['characterCount']) && isset($data['wordCount']) && isset($data['lineCount'])) {
            wp_send_json_success($data);
        } else {
            wp_send_json_error(array('message' => 'Resposta inválida da API.'));
        }
    }
}
add_action('wp_ajax_nopriv_character_count', 'handle_character_count_ajax');
add_action('wp_ajax_character_count', 'handle_character_count_ajax');
?>
