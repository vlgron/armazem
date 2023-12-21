<?php

require '../conexao.class.php';
include '../class.php/posicao.class.php';

interface RepositorioArmazem {
    public function cadastrarArmazem($armazem);
    public function removerArmazem($armazem);
    public function atualizarArmazem($armazem);
    public function buscarArmazem($armazem);
    public function getListarArmazem();
}

class RepositorioArmazemSQL implements RepositorioArmazem
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao("localhost", "locadora", "alunolab", "armazem");

        if ($this->conexao->conectar() == false) {
            echo "Erro" . mysql_erro();
        }
    }

    public function cadastrarArmazem($armazem)
    {   
        $id = $armazem->getId();
        $codigo = $armazem->getCodigo();
      

        $sql = "INSERT INTO posicao(
        id,
        codigo,
        )

        VALUES(
        NULL,
        '$codigo',
        )";

        $this->conexao->executarQuery($sql);
    }

    public function removerArmazem($codigo)
    {
        $sql = "DELETE FROM posicao WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }

    public function atualizarArmazem($armazem)
    {   
        $id = $armazem->getId();
        $codigo = $armazem->getCodigo();


        $sql = "UPDATE posicao SET
        id = '$id',
        codigo = '$codigo',
        WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    public function buscarArmazem($armazem)
    {

        $linha = $this->conexao->obterPrimeiroRegistroQuery("
            SELECT * FROM posicao WHERE codigo = '$codigo'");
        $armazem = new armazem(
            $linha['id'],
            $linha['codigo']);
        return $armazem;
    }

    public function getListarArmazem()
    {
        $listagem = $this->conexao->executarQuery("SELECT * FROM posicao");

        $arrayArmazem = array();

        while($linha = mysqli_fetch_array($listagem)){
            $armazem = new armazem(
                $linha['id'],
                $linha['codigo']);

            array_push($arrayArmazem, $armazem);
        }

        return $arrayArmazem;
    }
}

$repositorio = new RepositorioArmazemSQL();

?>