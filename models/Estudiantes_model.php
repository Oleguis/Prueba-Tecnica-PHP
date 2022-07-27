<?php
    class Datos_estudiantes{

        private $db;
        private $datos_estudiantes;

        public function __construct(){
            require_once "Conexion.php";
            $this->db=Conectar::conexion();
            $this->datos_estudiantes=array();
        }

        public function get_datosEstudiantes(){
            $consul=$this->db->query("SELECT * FROM estudiante");
            while($fila=$consul->fetch(PDO::FETCH_ASSOC)){
                $this->datos_estudiantes[]=$fila;
            }
            return $this->datos_estudiantes;
        }   
    }
?>