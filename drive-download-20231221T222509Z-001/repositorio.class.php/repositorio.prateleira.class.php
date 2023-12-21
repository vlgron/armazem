<?php

require '../conexao.class.php';
include '../class.php/prateleira.class.php';

interface RepositorioPrateleira {
    public function cadastrarPrateleira($prateleira);
    public function removerPrateleira($prateleira);
    public function atualizarPrateleira($prateleira);
    public function buscarPrateleira($prateleira);
    public function getListarPrateleira();
}

class RepositorioPrateleiraSQL implements RepositorioPrateleira
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao("localhost", "locadora", "alunolab", "armazem");

        if ($this->conexao->conectar() == false) {
            echo "Erro" . mysql_erro();
        }
    }

    public function cadastrarPrateleira($prateleira)
    {
        $id = $prateleira->getId();
        $codigo = $prateleira->getCodigo();
        $es_codigo = $prateleira->getEs_codigo();
        $ar_codigo = $prateleira->getAr_codigo();
      

        $sql = "INSERT INTO prateleira(
        id,
        codigo,
        es_codigo,
        ar_codigo,
        )

        VALUES(
        NULL,
        '$codigo',
        '$es_codigo',
        '$ar_codigo')";

        $this->conexao->executarQuery($sql);
    }

    public function removerPrateleira($codigo)
    {
        $sql = "DELETE FROM prateleira WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }

    public function atualizarPrateleira($prateleira)
    {   
        $id = $prateleira->getId();
        $codigo = $prateleira->getCodigo();
        $es_codigo = $prateleira->getEs_codigo();
        $ar_codigo = $prateleira->getAr_codigo();


        $sql = "UPDATE prateleira SET
        id = '$id',
        codigo = '$codigo',
        es_codigo = '$es_codigo',
        ar_codigo = '$ar_codigo',
        WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    public function buscarPrateleira($prateleira)
    {

        $linha = $this->conexao->obterPrimeiroRegistroQuery("
            SELECT * FROM prateleira WHERE codigo = '$codigo'");
        $prateleira = new prateleira(
            $linha['id'],
            $linha['codigo'],
            $linha['es_codigo'],
            $linha['ar_codigo']);
        return $prateleira;
    }

    public function getListarPrateleira()
    {
        $listagem = $this->conexao->executarQuery("SELECT * FROM prateleira");

        $arrayPrateleira = array();

        while($linha = mysqli_fetch_array($listagem)){
            $prateleira = new prateleira(
                $linha['id'],
                $linha['codigo'],
                $linha['es_codigo'],
                $linha['ar_codigo']);

            array_push($arrayPrateleira, $prateleira);
        }

        return $arrayPrateleira;
    }
}

$repositorio = new RepositorioPrateleiraSQL();

?>