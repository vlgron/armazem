<?php

require 'menu.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

    <h1>Remover Armazém</h1>
    <form action="excluir.armazem.php" method="post">
        <label for="codigo_remover">Código do Armazém a Remover:</label>
        <select id="codigo_remover" name="codigo_remover">
            <?php
            // Gere opções para seleção do armazém a ser removido
            for ($i = 1; $i <= 99; $i++) {
                $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "<option value='$codigo'>$codigo</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Remover Armazém">
    </form><hr>

    <h1>Remover produto</h1>
    <form action="excluir.armazem.php" method="post">
        <label for="codigo_remover">Código do produto a Remover:</label>
        <select id="codigo_remover" name="codigo_remover">
            <?php
            // Gere opções para seleção do armazém a ser removido
            for ($i = 1; $i <= 99; $i++) {
                $codigo = str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "<option value='$codigo'>$codigo</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Remover produto">
    </form><hr>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</html>

<link href="css/bootstrap.min.css" rel="stylesheet" >

