<?php

require '../conexao.class.php';
include '../class.php/produto.class.php';

interface RepositorioProduto{
    public function cadastrarProduto($produto);
    public function removerProduto($produto);
    public function atualizarProduto($produto);
    public function buscarProduto($produto);
    public function getListarProduto();
}

class RepositorioProdutoSQL implements RepositorioProduto
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao("localhost", "locadora", "alunolab", "armazem");

        if ($this->conexao->conectar() == false) {
            echo "Erro" . mysql_erro();
        }
    }

    public function cadastrarProduto($produto)
    {   
        $codigo = $produto->getCodigo();
        $nome = $produto->getNome();
        $armazem = $produto->getArmazem();
        $estante = $produto->getEstante();
        $prateleira = $produto->getPrateleira();
        $posicao = $produto->getPosicao();
      

        $sql = "INSERT INTO produto(
        codigo,
        nome,
        armazem,
        estante,
        prateleira,
        posicao,
        )

        VALUES(
        NULL,
        '$nome',
        '$armazem',
        '$estante',
        '$prateleira',
        '$posicao')";

        $this->conexao->executarQuery($sql);
    }

    public function removerProduto($codigo)
    {
        $sql = "DELETE FROM produto WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }

    public function atualizarProduto($produto)
    {   
        $codigo = $produto->getCodigo();
        $nome = $produto->getNome();
        $armazem = $produto->getArmazem();
        $estante = $produto->getEstante();
        $prateleira = $produto->getPrateleira();
        $posicao = $produto->getPosicao();


        $sql = "UPDATE produto SET
        codigo = '$codigo',
        nome = '$nome',
        armazem = '$armazem',
        estante = '$estante',
        prateleira = '$prateleira',
        posicao = '$posicao',
        WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    public function buscarProduto($produto)
    {

        $linha = $this->conexao->obterPrimeiroRegistroQuery("
            SELECT * FROM produto WHERE codigo = '$codigo'");
        $produto = new produto(
            $linha['codigo'],
            $linha['nome'],
            $linha['armazem'],
            $linha['estante'],
            $linha['prateleira'],
            $linha['posicao']);
        return $produto;
    }

    public function getListarProduto()
    {
        $listagem = $this->conexao->executarQuery("SELECT * FROM produto");

        $arrayProduto = array();

        while($linha = mysqli_fetch_array($listagem)){
            $produto = new produto(
                $linha['codigo'],
                $linha['nome'],
                $linha['armazem'],
                $linha['estante'],
                $linha['prateleira'],
                $linha['posicao']);

            array_push($arrayProduto, $produto);
        }

        return $arrayProduto;
    }
}

$repositorio = new RepositorioProdutoSQL();

?>