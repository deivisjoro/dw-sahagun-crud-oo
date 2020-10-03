<?php

    include_once('app/model/conexion.php');
    class Model{
        private $conexion;
        private $table;

        public function __construct($table){
            $db = new Conexion;
            $this->conexion = $db->connect();
            $this->table = $table;
        }

        public function list(){
            try{
                $sql = "SELECT * FROM ".$this->table;
                $result = $this->conexion->query($sql);
                return $result->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                return "Error: ".$e.getMessage();
            }
        }

        public function find($id){
            try{
                $sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
                $result = $this->conexion->query($sql);
                return $result->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                return "Error: ".$e.getMessage();
            }
        }

        public function add($datos){
            try{
                $sql = "INSERT INTO ".$this->table." VALUES ('', ".$datos.")";
                $result = $this->conexion->query($sql);
                return $result;
            }
            catch(Exception $e){
                return "Error: ".$e.getMessage();
            }
        }

        public function edit($datos, $id){
            try{
                $sql = "UPDATE ".$this->table." SET ".$datos." WHERE id=".$id;
                $result = $this->conexion->query($sql);
                return $result;
            }
            catch(Exception $e){
                return "Error: ".$e.getMessage();
            }
        }

        public function delete($id){
            try{
                $sql = "DELETE FROM ".$this->table." WHERE id=".$id;
                $result = $this->conexion->query($sql);
                return $result;
            }
            catch(Exception $e){
                return "Error: ".$e.getMessage();
            } 
        }

    }

?>