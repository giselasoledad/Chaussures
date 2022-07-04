<?php

class ConnecionMySQL{
	//definicion de atributos
	private $host;
	private $user;
	private $password;
	private $database;
	private $conn;
	//conn es la conexion prodria llamarlo directamente conexion

	public function __construct(){
	//constructor que hace la accion de construir es como un balde donde dentro yo tendria las divisiones 
	//para poner la cal, la arena, el agua y sirve para construir, es una accion osea un metodo

	require_once "database.php";
	// solo lo levanta una vez y luego lo libera si yo usara require o include quedaria pegado al mismo archivo 
	//y no lo liberaria
	$this->host=HOST;
	$this->user=USER;
	$this->password=PASSWORD;
	$this->database=DATABASE;
	}
	//-> significa hace referencia ya que por que estoy dentro de la misma clase no puedo usar dos veces la variable


	public function CreateConnection(){
		// metodo que crea y retoma la conecion a la base de datos (BD)
		$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($this->conn->connect_errno){
			die("Error al conectarse a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error);
		}
	}

	public function CloseConnection(){
		//metodo que cierra la conexion a la base de datos (BD)
		$this->conn->close();
	}

	public function ExecuteQuery($sql){
		//metodo que ejecuta un query osea una consulta y ($sql) es lo que le voy a poner adentro de la consulta para luego darme un resultado que va a ser tambien en base a la consulta que yo hice osea ($sql). El resultado es un SELECT*
		$result = $this->conn->query($sql);
		return $result;
	}

	public function GetCountAffectedRows(){
		//metodo que retoma la cantidad de filas afectadas con el ultimo query realizado.
		return $this->conn->affected_rows;
	}

	public function GetArray($result){
		//metodo que retoma la ultima fila de un resultado en forma de arreglo
		return $result->fetch_array();
	}

	public function SetFreeResult($result){
		//metodo que libera o borra el resultado para dejar todo limpio para la proxima consulta (query)
		$result->free_result();
		
	}
}