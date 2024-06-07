$(document).ready(function() {
    $("#btn_search").click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "http://localhost:8085/php_rest_api_master-master/api/filter.php",
            method: "GET",
            data: {
                field: $("#field").val(),
                search: $("#search").val()
            },
            dataType: "json",
            success: function(data) {
                $("#result tbody").empty();
                $.each(data, function(index, item) {
                    var row = "<tr>";
                    row += "<th scope='row'>" + item.id + "</th>";
                    row += "<td>" + item.nome + "</td>";
                    row += "<td>" + item.sobrenome + "</td>";
                    row += "<td>" + item.data_nascimento + "</td>";
                    row += "<td>" + item.telefone + "</td>";
                    row += "<td>" + item.celular + "</td>";
                    row += "<td>" + item.email + "</td>";
                    row += "<td>" + item.empresa_nome + "</td>";
                    row += "<td>" + item.empresa_id + "</td>";
                    row += "</tr>";
                    $("#result tbody").append(row);
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Erro na chamada AJAX: " + errorThrown);
            }
        });
    });
});