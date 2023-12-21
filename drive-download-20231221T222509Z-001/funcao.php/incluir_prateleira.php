<?php

require '../repositorio.class.php/repositorio.prateleira.class.php';

$prateleiraCadastrado = new prateleira  (NULL, $_REQUEST['codigo'], $_REQUEST['ar_codigo'], $_REQUEST['es_codigo']);

$repositorio->cadastrarPrateleira($prateleiraCadastrado);

echo "<script> alert('prateleira cadastrado com sucesso!') </script>";
echo "<script> location.href='../index.php' </script>";

?>	                