<?php

/**
* Conexion a la base de datos
*/
class ClassConexion
{
	public $host 	= 'localhost';
	public $nomBD 	= 'sekuritas';
	//public $nomBD 	= 'sek1124208043374';
	public $user 	= 'root';
	public $pass	= '';

	/*public $nomBD 	= 'sialen5_pagina';
	public $user 	= 'sialen5_PaginaOw';
	public $pass	= 's14l3n2013';*/
	
	public $conexion; public $total_consultas;

	public function MySQL(){ 
		if(!isset($this->conexion)){
			$this->conexion = (mysql_connect($this->host,$this->user,$this->pass)) or die(mysql_error());
			mysql_select_db($this->nomBD,$this->conexion) or die(mysql_error());
		}
	}

	public function consulta($consulta){
		$this->total_consultas++; 
		$resultado = mysql_query($consulta,$this->conexion);
		if(!$resultado){ 
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}
		return $resultado;
	}

	public function fetch_array($consulta){
		return mysql_fetch_array($consulta);
	}

	public function num_rows($consulta){
		return mysql_num_rows($consulta);
	}

	public function getTotalConsultas(){
		return $this->total_consultas; 
	}

	public function insert_id(){
		return mysql_insert_id();
	}

	public function close_con(){
		return mysql_close();
	}
}

?>