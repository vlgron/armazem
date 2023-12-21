<?php

require 'repositorio.class.php';

$repositorio = atualizarPrateleira($_REQUEST['codigo']);

$repositorio->atualizarPrateleira($prateleiraRecibido);

echo "<script> alert('prateleira alterado com sucesso!'); </script>";
echo "<script> location.href='index.php' </script>";

?>	

