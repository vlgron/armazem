<?php

require 'conexao.class.php';
include 'armazem.class.php';

interface RepositorioArma {
    public function cadastrarArma($arma);
    public function removerArma($arma);
    public function atualizarArma($arma);
    public function buscarArma($arma);
    public function getListarArma();
}
P
class RepositorioArmaSQL implements RepositorioArma
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao("localhost", "locadora", "alunolab", "armazem");

        if ($this->conexao->conectar() == false) {
            echo "Erro" . mysql_erro();
        }
    }

    public function cadastrarArma($arma)
    {   
        $nome = $arma->getNome();
        $id = $arma->getId();
        $codigo = $arma->getCodigo();
        $localizacao = $arma->getLocalizacao()
      

        $sql = "INSERT INTO armazem_local(
        nome,
        id,
        codigo,
        localizacao,
        )

        VALUES(
        '$nome',
        NULL,
        '$codigo',
        '$localizacao')";

        $this->conexao->executarQuery($sql);
    }

    public function removerArma($codigo)
    {
        $sql = "DELETE FROM armazem_local WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }

    public function atualizarArma($arma)
    {   
        $nome = $arma->getNome();
        $id = $arma->getId();
        $codigo = $arma->getCodigo();
        $localizacao = $arma->getAr_codigo();


        $sql = "UPDATE armazem_local SET
        nome = '$nome',
        id = '$id',
        codigo = '$codigo',
        localizacao = '$localizacao',
        WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    public function buscarArma($arma)
    {

        $linha = $this->conexao->obterPrimeiroRegistroQuery("
            SELECT * FROM armazem_local WHERE codigo = '$codigo'");
        $arma = new arma(
            $linha['nome']
            $linha['id']
            $linha['codigo']
            $linha['localizacao']);
        return $arma;
    }

    public function getListarArma()
    {
        $listagem = $this->conexao->executarQuery("SELECT * FROM armazem_local");

        $arrayArma = array();

        while($linha = mysqli_fetch_array($listagem)){
            $arma = new arma(
                $linha['nome']
                $linha['id']
                $linha['codigo']
                $linha['localizacao']);

            array_push($arrayArma, $arma);
        }

        return $arrayArma;
    }
}

$repositorio = new RepositorioPrateleiraSQL();

?>