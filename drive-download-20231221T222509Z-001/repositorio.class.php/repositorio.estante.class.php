<?php

require '../conexao.class.php';
include '../class.php/estante.class.php';

interface RepositorioEstante {
    public function cadastrarEstante($estante);
    public function removerEstante($estante);
    public function atualizarEstante($estante);
    public function buscarEstante($estante);
    public function getListarEstante();
}

class RepositorioEstanteSQL implements RepositorioEstante
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new conexao("localhost", "locadora", "alunolab", "armazem");

        if ($this->conexao->conectar() == false) {
            echo "Erro" . mysql_erro();
        }
    }

    public function cadastrarEstante($estante)
    {
        $id = $estante->getId();
        $codigo = $estante->getCodigo();
        $ar_codigo = $estante->getAr_codigo();
      

        $sql = "INSERT INTO estante(
        id,
        codigo,
        ar_codigo,
        )

        VALUES(
        NULL,
        '$codigo',
        '$ar_codigo')";

        $this->conexao->executarQuery($sql);
    }

    public function removerEstante($codigo)
    {
        $sql = "DELETE FROM estante WHERE codigo = '$codigo'";
        $this->conexao->executarQuery($sql);
    }

    public function atualizarEstante($estante)
    {   
        $id = $estante->getId();
        $codigo = $estante->getCodigo();
        $ar_codigo = $estante->getAr_codigo();


        $sql = "UPDATE estante SET
        id = '$id',
        codigo = '$codigo',
        ar_codigo = '$ar_codigo',
        WHERE codigo = '$codigo'";

        $this->conexao->executarQuery($sql);
    }

    public function buscarEstante($estante)
    {

        $linha = $this->conexao->obterPrimeiroRegistroQuery("
            SELECT * FROM estante WHERE codigo = '$codigo'");
        $estante = new estante(
            $linha['id'],
            $linha['codigo'],
            $linha['ar_codigo']);
        return $estante;
    }

    public function getListarEstante()
    {
        $listagem = $this->conexao->executarQuery("SELECT * FROM estante");

        $arrayEstante = array();

        while($linha = mysqli_fetch_array($listagem)){
            $estante = new estante(
                $linha['id'],
                $linha['codigo'],
                $linha['ar_codigo']);

            array_push($arrayEstante, $estante);
        }

        return $arrayEstante;
    }
}

$repositorio = new RepositorioEstanteSQL();

?>