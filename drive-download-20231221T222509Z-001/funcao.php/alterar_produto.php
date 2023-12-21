<?php

require 'repositorio.produto.class.php';

$repositorio = atualizarProduto($_REQUEST['codigo']);

$repositorio->atualizarProduto($produtoRecibido);

echo "<script> alert('calterado com sucesso!'); </script>";
echo "<script> location.href='index.php' </script>";

?>	

