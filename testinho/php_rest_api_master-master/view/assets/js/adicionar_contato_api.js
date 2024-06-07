$(document).ready(function() {
    $("#contato-form").submit(function(event) {
        event.preventDefault();

        var formData = {
            empresa: {
                nome: $("#nomeEmpresa").val()
            },
            contato: {
                nome: $("#nome").val(),
                sobrenome: $("#sobrenome").val(),
                data_nascimento: $("#data_nascimento").val(),
                telefone: $("#telefone").val(),
                celular: $("#celular").val(),
                email: $("#email").val()
            }
        };

        $.ajax({
            type: "POST",
            url: "http://localhost:8085/php_rest_api_master-master/api/create.php",
            data: JSON.stringify(formData),
            contentType: "application/json",
            success: function(data) {
                console.log(data); // Verifique se os dados da resposta são exibidos corretamente
                if (data.message === "Contato criado com sucesso.") {
                    $("#message-container").html(data.message).css("color", "white").css("background-color", "green");

                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 3000);
                }
            },

        });
    });
});