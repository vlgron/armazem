<?php

require 'repositorio.class.php';

$repositorio = atualizarEstante($_REQUEST['codigo']);

$repositorio->atualizarEstante($estanteRecibido);

echo "<script> alert('cadastrado com sucesso!'); </script>";
echo "<script> location.href='index.php' </script>";

?>	

