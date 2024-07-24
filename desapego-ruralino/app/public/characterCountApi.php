<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = json_decode(file_get_contents("php://input"), true);
    $text = isset($input['text']) ? $input['text'] : '';

    $characterCount = strlen($text);
    $wordCount = str_word_count($text);
    $lineCount = substr_count($text, "\n") + 1;

    echo json_encode(array(
        'characterCount' => $characterCount,
        'wordCount' => $wordCount,
        'lineCount' => $lineCount
    ));
} else {
    echo json_encode(array('error' => 'Invalid request method'));
}
?>
