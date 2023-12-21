<?php

require '../repositorio.class.php/repositorio.estante.class.php';

$estanteCadastrado = new estante  (NULL, $_REQUEST['codigo'], $_REQUEST['ar_codigo']);

$repositorio->cadastrarEstante($estanteCadastrado);

echo "<script> alert('cadastrado com sucesso!') </script>";
echo "<script> location.href='../index.php' </script>";

?>	                