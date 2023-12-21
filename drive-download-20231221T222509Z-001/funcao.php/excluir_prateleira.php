<?php

require 'repositorio.class.php'

$repositorio = removerPrateleira($_REQUEST['codigo']);

header('location: index.php');
echo "<script> alert('excluido com sucesso!'); </script>";

?>                              