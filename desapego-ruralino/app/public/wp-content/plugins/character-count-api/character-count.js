jQuery(document).ready(function($) {
    $('#count-button').on('click', function() {
        var text = $('#text-input').val();

        $.ajax({
            url: characterCountApi.ajax_url,
            method: 'POST',
            data: {
                action: 'character_count',
                text: text
            },
            success: function(response) {
                if (response.success) {
                    var result = response.data;
                    $('#result').html(
                        '<p>Caracteres: ' + result.characterCount + '</p>' +
                        '<p>Palavras: ' + result.wordCount + '</p>' +
                        '<p>Linhas: ' + result.lineCount + '</p>'
                    );
                } else {
                    $('#result').html('<p>' + response.data.message + '</p>');
                }
            },
            error: function() {
                $('#result').html('<p>Erro ao fazer a requisição.</p>');
            }
        });
    });
});