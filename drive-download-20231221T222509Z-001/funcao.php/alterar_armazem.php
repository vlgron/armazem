<?php

require 'repositorio.class.php';

$repositorio = atualizarArmazem($_REQUEST['codigo']);

$repositorio->atualizarArmazem($armazemRecibido);

echo "<script> alert('calterado com sucesso!'); </script>";
echo "<script> location.href='index.php' </script>";

?>	

