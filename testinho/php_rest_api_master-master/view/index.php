<?php include("config/database.php");?>
<html>

<head>
    <title>Api Testinho</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.22.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <script>
        $(document).ready(function() {

            function load_data(query) {
                $.ajax({
                    url: "searchresult.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }

            load_data();

            $('#search').keyup(function() {
                var search = $(this).val();
                if (search !== '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });
    </script>
</head>

<body>
    <div class="container-fluid" id="myTable">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <h1 class="mt-5">Api teste contatos que faz parte de uma empresa.</h1>
                    <div class="form-group mx-sm-3">
                        <label for="search" class="sr-only">Pesquisar:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Digite o valor de pesquisa">
                            <div class="input-group-append">
                                <a href="create.php" class="btn btn-success"><i class="bi bi-plus">Adicionar</i></a>
                            </div>
                        </div>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/delete_contato_api.js"></script>

</body>
</html>