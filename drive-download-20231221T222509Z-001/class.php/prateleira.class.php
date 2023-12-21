<?php

class prateleira
{

	private $id;
	private $es_codigo;
	private $ar_codigo;
	
	public function __construct($id, $es_codigo, $ar_codigo)
	{
		$this->id = $id;
		$this->es_codigo = $es_codigo;
		$this->ar_codigo = $ar_codigo;
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

	public function setEs_codigo($es_codigo)
	{
		$this->es_codigo = $es_codigo;
	}

	public function getEs_codigo()
	{
		return $this->es_codigo;
	}


	public function setAr_codigo($ar_codigo)
	{
		$this->ar_codigo = $ar_codigo;
	}

	public function getAr_codigo()
	{
		return $this->ar_codigo;
	}

}