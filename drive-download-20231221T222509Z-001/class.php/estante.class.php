<?php

class estante
{

	private $id;
	private $codigo;
	private $ar_codigo;
	
	public function __construct($id, $codigo, $ar_codigo)
	{
		$this->id = $id;
		$this->codigo = $codigo;
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
		$this->es_codigo = $es_codigo;
	}

	public function getCodigo()
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