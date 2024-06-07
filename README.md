
# Desafio API de contatos
O projeto de API de contatos é desenvolver uma API de cadastro de contatos. A API deve ser capaz de criar, atualizar, deletar e listar contatos.

<div style="display: flex; align-items: center;">
  <img src="https://github.com/abraao69/ApiRestful-teste/blob/main/logo.png" alt="Logo" width="200" height="100">
  <img src="https://github.com/abraao69/abraao69-portfolio-abraao/blob/master/testinho/portfolio/1679067787215.jpeg" alt="Logo" width="70" height="100" style="border-radius: 100%;">
<br><br>
      <img src="https://github.com/abraao69/abraao69-portfolio-abraao/blob/master/testinho/portfolio/screen.jpeg" alt="Logo" width="900" height="600" style="border-radius: 100%;">

</div>

A API pode ser criada com um framework.

A entidade/modelo de contato deve possuir nome, sobrenome, data de nascimento, telefone, celular, e-mail.

Esses contatos devem pertencer a uma outra entidade chamada empresa, a empresa deve conter somente o campo nome.

A API deve receber parametros de filtro para os campos empresa, nome + sobrenome, telefone, celular e e-mail.

O projeto deve ser compatível com PHP 8.

# Modo de uso 

Você pode testar essa api usando Imsomnia

# GET http://localhost:8085/php_rest_api_master-master/api/single_read.php?id=32

# {
	"message": "Contato encontrado",
	"itemCount": 1,
	"body": {
		"id": "32",
		"nome": "Thiago",
		"sobrenome": "martins",
		"data_nascimento": "1790-01-01",
		"telefone": "1334576543210",
		"celular": "8334567890",
		"email": "novonome@example.com",
		"empresa_id": "95",
		"nome_empresa": "Casas pedro"
	}
}

# POST http://localhost:8085/php_rest_api_master-master/api/create.php

# {
  "empresa": {
    "nome": "PontoFrio"
  },
  "contato": {
    "nome": "João",
    "sobrenome": "Silva",
    "data_nascimento": "1985-10-20",
    "telefone": "1234567890",
    "celular": "9876543210",
    "email": "joao.silva@example.com"
  }
}

# GET http://localhost:8085/php_rest_api_master-master/api/read.php

# {
	"message": "Estes são os contatos no banco de dados",
	"itemCount": 7,
	"body": [
		{
			"id": "32",
			"nome": "Thiago",
			"sobrenome": "martins",
			"data_nascimento": "1790-01-01",
			"telefone": "1334576543210",
			"celular": "8334567890",
			"email": "novonome@example.com",
			"empresa_id": "95",
			"empresa_nome": "Casas pedro"
		},
		{
			"id": "33",
			"nome": "Pedro",
			"sobrenome": "Ribeiro",
			"data_nascimento": "1989-08-25",
			"telefone": "7777777777",
			"celular": "8888888888",
			"email": "pedro.ribeiro@example.com",
			"empresa_id": "96",
			"empresa_nome": "Microsoft"
		},
		{
			"id": "34",
			"nome": "Ana",
			"sobrenome": "Ferreira",
			"data_nascimento": "1995-12-10",
			"telefone": "1111111111",
			"celular": "2222222222",
			"email": "ana.ferreira@example.com",
			"empresa_id": "97",
			"empresa_nome": "Amazon"
		},
		{
			"id": "35",
			"nome": "Carlos",
			"sobrenome": "Martins",
			"data_nascimento": "1978-03-30",
			"telefone": "5555555555",
			"celular": "6666666666",
			"email": "carlos.martins@example.com",
			"empresa_id": "98",
			"empresa_nome": "Apple"
		},
		{
			"id": "36",
			"nome": "Maria",
			"sobrenome": "Pereira",
			"data_nascimento": "1990-05-15",
			"telefone": "9876543210",
			"celular": "1234567890",
			"email": "maria.pereira@example.com",
			"empresa_id": "99",
			"empresa_nome": "Coca-Cola"
		},
		{
			"id": "37",
			"nome": "João",
			"sobrenome": "Silva",
			"data_nascimento": "1985-10-20",
			"telefone": "1234567890",
			"celular": "9876543210",
			"email": "joao.silva@example.com",
			"empresa_id": "100",
			"empresa_nome": "PontoFrio"
		},
		{
			"id": "44",
			"nome": "João",
			"sobrenome": "Silva",
			"data_nascimento": "1985-10-20",
			"telefone": "1234567890",
			"celular": "9876543210",
			"email": "joao.silva@example.com",
			"empresa_id": "107",
			"empresa_nome": "PontoFrio"
		}
	]
}

# DELETE http://localhost:8085/php_rest_api_master-master/api/delete.php?id=42

# UPDATE http://localhost:8085/php_rest_api_master-master/api/update.php

{
  "empresa": {
    "id": 95,
    "nome": "Casas pedro"
  },
  "contato": {
    "id": 32,
    "nome": "Thiago",
    "sobrenome": "martins",
    "data_nascimento": "1790-01-01",
    "telefone": "1334576543210",
    "celular": "8334567890",
    "email": "novonome@example.com",
    "empresa_id": 95
  }
}


# GET http://localhost:8085/php_rest_api_master-master/api/single_read.php?id=32

{
	"message": "Contato encontrado",
	"itemCount": 1,
	"body": {
		"id": "32",
		"nome": "Thiago",
		"sobrenome": "martins",
		"data_nascimento": "1790-01-01",
		"telefone": "1334576543210",
		"celular": "8334567890",
		"email": "novonome@example.com",
		"empresa_id": "95",
		"nome_empresa": "Casas pedro"
	}
}
