<?php

require 'menu.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
	<h1> cadastro de produtos</h1>

	<form action="funcao.php/incluir_produto.php" method="post">
		<label for="nome">Nome do Produto:</label>
		<input type="text" name="nome"><br>

		<label for="codigo">Código do Armazém:</label>
   	 	<select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    	</select><br>


    <label for="codigo">Código da estante:</label>

    <select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    </select><br>

     <label for="codigo">Código da prateleira:</label>

    <select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" name="enviar" value="Cadastrar produto">
    </form><hr>

    <button onclick="redirecionarParaPagina()">voltar</button>
	<script>
        function redirecionarParaPagina() {
            window.location.href = "index.php";
        }
	</script>




</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>

<link href="css/bootstrap.min.css" rel="stylesheet" >