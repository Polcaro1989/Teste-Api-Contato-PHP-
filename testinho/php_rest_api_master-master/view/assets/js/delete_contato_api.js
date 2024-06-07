$(document).ready(function() {
    $('.deleteContatoBtn').click(function(e) {
        e.preventDefault();
        var currentURL = window.location.href;
        var match = currentURL.match(/[?&]id=(\d+)/);
        if (match) {
            var contato_id = match[1];
            if (confirm('Tem certeza de que deseja excluir este contato?')) {
                $.ajax({
                    url: 'http://localhost:8085/php_rest_api_master-master/api/delete.php?id=' + contato_id,
                    type: 'DELETE',
                    success: function(data) {
                        if (data.message === "Contato e empresa vinculada excluídos com sucesso.") {
                            $("#message-container").html(data.message).css("color", "white").css("background-color", "red");

                            // Aguardar 5 segundos e, em seguida, redirecionar para index.php
                            setTimeout(function() {
                                window.location.href = "index.php";
                            }, 3000);
                        }
                    },
                    error: function(xhr, status, error) {
                        $("#message-container").html("Erro na requisição de edição: " + error);
                    }
                });
            }
        } else {
            alert('ID não encontrado na URL');
        }
    });
});