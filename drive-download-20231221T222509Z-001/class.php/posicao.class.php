<?php

class posicao
{

	private $id;
	private $codigo;
	
	public function __construct($id, $codigo)
	{
		$this->id = $id;
		$this->codigo = $codigo;
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
}