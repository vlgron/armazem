<?php

require 'repositorio.class.php'

$repositorio = removerEstante($_REQUEST['codigo']);

header('location: index.php');
echo "<script> alert('excluido com sucesso!'); </script>";

?>                              