<?php

    require_once("Autoload.php");

    class Usuario extends Conexion{
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $connection;

        public function __construct(){
            $this->connection = new Conexion();
            $this->connection = $this->connection->connection();
        }

        public function insertUsuario(string $nombre, int $telefono, string $email){
            $this->strNombre = $nombre;
            $this->intTelefono = $telefono;
            $this->stsEmail = $email;

            $sql = "INSERT INTO usuario VALUES(?,?,?)";
            $insert = $this->connection->prepare($sql);
            $arrayData = array($this->strNombre,$this->intTelefono,$this->strEmail);
            $resInsert = $insert->execute($arrayData);
            $idInsert = $this->connection->lastInsertId();
            return $idInsert;
        }

        public function getUsuarios(){
            $sql = "SELECT*FROM usuario";
            $execute = $this->connection->query($sql);
            $resquest = $execute->fetchall(PDO::FETCH_ASSOC);
            return $resquest;
        }

        
    }
?>