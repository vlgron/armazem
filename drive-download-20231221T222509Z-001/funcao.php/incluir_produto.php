<?php

require '../repositorio.class.php/repositorio.produto.class.php';

$produtoCadastrado = new produto(NULL, $_REQUEST['nome'], $_REQUEST['armazem'], $_REQUEST['estante'], $_REQUEST['prateleira'], $_REQUEST['posicao']);

$repositorio->cadastrarProduto($produtoCadastrado);

echo "<script> alert('cada com sucesso!'); </script>";
echo "<script> location.href='../index.produto.php' </script>";

?>	                