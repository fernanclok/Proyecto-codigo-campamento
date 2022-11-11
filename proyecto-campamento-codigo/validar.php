<?php 
include('conexionDB.php');

class admin extends conexionDB{
        private $correo;
        private $pass;
        /*private $dataset;*/
    
      public function getAdmin($correo,$pass){
        $result = $this->conectar();
        if($result){
            $sql= "select * from admin where correoAD ='$correo' and passAD ='$pass';";
           //0 echo $sql;
           $dataset=$this->consultar($sql);
        }else{
            echo "no hay datos ";
            $dataset="vacio";
        }
       
        return $dataset;
      }
     
}
?>