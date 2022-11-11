<?php

class conexionDB{
	//atributos o variables
	private $HOST;
	private $USER;
	private $PASSW;
	private $DB;
	private $connection;
	private $consulta;
	//constructores
	public function __construct(){
		$this->HOST="localhost";
		$this->USER="root";
		$this->PASSW="";
		$this->DB="camping";
	}

public function conectar(){
    $this->connection=@mysqli_connect($this->HOST,
            $this->USER, $this->PASSW, $this->DB);
    if($this->connection){
        //echo 'si hay conexion';
        return true;
    }
    else{
        //echo 'no hay conexion';
        return false;
    }
}//fin conectar
public function consultar($sql){
    $this->dataset=mysqli_query($this->connection,$sql);
    if($this->dataset){
        //echo "consulta ejecutada";
        return $this->dataset;
    }
    else{
        //echo "consulta no realizada";
        return 0;
    }
}//end consultar
}
?>