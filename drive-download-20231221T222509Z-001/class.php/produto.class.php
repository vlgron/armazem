<?php

class produto
{

	private $codigo;
	private $nome;
	private $armazem;
	private $estante;
	private $prateleira;
	private $posicao;

	
	public function __construct($codigo, $nome, $armazem, $estante, $prateleira, $posicao)
	{	
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->armazem = $armazem;
		$this->estante = $estante;
		$this->prateleira = $prateleira;
		$this->posicao = $posicao;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}
	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setArmazem($armazem)
	{
		$this->armazem = $armazem;
	}
	public function getArmazem()
	{
		return $this->armazem;
	}

	public function setEstante($estante)
	{
		$this->estante = $estante;
	}
	public function getEstante()
	{
		return $this->estante;
	}

	public function setPrateleira($prateleira)
	{
		$this->prateleira = $prateleira;
	}
	public function getPrateleira()
	{
		return $this->prateleira;
	}


	public function setPosicao($posicao)
	{
		$this->posicao = $posicao;
	}
	public function getPosicao()
	{
		return $this->posicao;
	}
}