<?php

   class Conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "123456789";
        private $db = "femsa";
        private $conexion;

        public function __construct(){
            $connectionString = "mysql:hot=".$this->host.";dbname=".$this->db.";charset=utf8";
            echo "Todo Bien";
            try {
                $this->conexion = new PDO($connectionString,$this->user,$this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                $this->conexion="Error";
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function connection(){
            return $this->conexion;
        }
        
   }
//    $conexion = new Conexion();

?>