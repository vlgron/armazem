<?php

require '../repositorio.class.php/repositorio.posicao.class.php';

$armazemCadastrado = new posicao  (NULL, $_REQUEST['codigo']);

$repositorio->cadastrarArmazem($armazemCadastrado);

echo "<script> alert('cadastrado com sucesso!') </script>";
echo "<script> location.href='../index.php' </script>";

?>	                