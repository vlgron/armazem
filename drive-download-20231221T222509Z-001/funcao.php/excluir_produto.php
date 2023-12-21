<?php

require 'repositorio.produto.class.php'

$repositorio = removerProduto($_REQUEST['codigo']);

header('location: index.php');

?>                              