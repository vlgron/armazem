<?php

require 'menu.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<!-- cadastro de armazens-->
<form action="funcao.php../incluir_armazem.php" method="post">
    <label for="nome">Nome do Armazém:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="codigo">Código do Armazém:</label>
    <select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    </select><br><br>
    <input type="submit" value="Adicionar Armazém">

</form><hr>
<!--fim do codigo-->

<!--cadastro de estante-->
<form action="funcao.php/incluir_estante.php" method="post">
    <label for="nome">Nome da estante:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label>codigo da estante:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="codigo">Código do Armazém:</label>
    <select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    </select><br><br>
    <input type="submit" value="Adicionar estante">

</form><hr>
<!--fim do codigo-->

<!--cadastro de prateleira-->
<form action="funcao.php/incluir_prateleira.php" method="post">
    <label for="nome">Nome da prateleira:</label>
    <input type="text" id="nome" name="nome"><br><br>
    

 <label for="codigo">Código do Armazém:</label>
    <select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    </select><br><br>


    <label for="codigo">Código da estante:</label>

    <select id="codigo" name="codigo">
        <?php
        for ($i = 1; $i <= 99; $i++) {
            $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
            echo "<option value='$codigo'>$codigo</option>";
        }
        ?>
    </select><br><br>
    <input type="submit" value="Adicionar prateleira">

</form><hr>
<!--fim do codigo-->


<form action="<?=$destino;?>" method="POST">
    <?=@$oculto;?>

    <label>Posição:</label>
    <input type="text" name="posicao"><br><br>
    <input type="submit" name="enviar" value="Cadastrar">
</form>
<hr>

<button onclick="redirecionarParaPagina()">avançar</button>
<script>
        function redirecionarParaPagina() {
            window.location.href = 'index.produto.php';
        }
</script>

<button onclick="redirecionarParainicio()">concluir</button>
<script>
        function redirecionarParaPagina() {
            window.location.href = 'inicio.php';
        }
</script>



</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>


<link href="css/bootstrap.min.css" rel="stylesheet" >
