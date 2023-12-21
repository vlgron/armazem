<?php

class armazem
{

	private $nome;
	private $id;
	private $codigo;
	private $localizacao;

	
	public function __construct($nome, $id, $codigo, $localizacao)
	{
		$this->nome = $nome;
		$this->id = $id;
		$this->codigo = $codigo;
		$this->localizacao = $localizacao;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}
	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setLocalizacao($localizacao)
	{
		$this->localizacao = $localizacao;
	}
	public function getLocalizacao()
	{
		return $this->localizacao;
	}
}