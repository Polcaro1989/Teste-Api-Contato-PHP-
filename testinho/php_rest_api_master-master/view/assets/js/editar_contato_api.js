$(document).ready(function() {
    $("#contato-form").submit(function(event) {
        event.preventDefault();
        var formData = {
            empresa: {
                id: $("#empresa_id").val(),
                nome: $("#nomeEmpresa").val()
            },
            contato: {
                id: $("#contato_id").val(),
                nome: $("#nome").val(),
                sobrenome: $("#sobrenome").val(),
                data_nascimento: $("#data_nascimento").val(),
                telefone: $("#telefone").val(),
                celular: $("#celular").val(),
                email: $("#email").val(),
                empresa_id: $("#empresa_id").val()
            }
        };

        $.ajax({
            type: "PUT",
            url: "http://localhost:8085/php_rest_api_master-master/api/update.php",
            data: JSON.stringify(formData),
            contentType: "application/json",
            success: function(data) {
                if (data.message === "Contato atualizado com sucesso.") {
                    $("#message-container").html(data.message).css("color", "white").css("background-color", "green");

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
    });
});