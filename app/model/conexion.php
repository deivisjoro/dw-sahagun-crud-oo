<?php

    include_once('app/config/database.php');
    class Conexion{
        
        private $drive;
        private $host;
        private $username;
        private $password;
        private $database;
        private $charset;

        public function __construct(){
            $this->drive     = constant('DRIVE');
            $this->host      = constant('HOST');
            $this->username  = constant('USERNAME');
            $this->password  = constant('PASSWORD');
            $this->database  = constant('DATABASE');
            $this->charset   = constant('CHARSET');    
        }

        public function connect(){
            try{
                $connection = $this->drive.':host='.$this->host.';dbname='.$this->database.';charset='.$this->charset;
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
                $pdo = new PDO($connection, $this->username, $this->password, $options);
                return $pdo;
            }
            catch(PDOException $e){
                die('Error: '.$e.getMessage());
            }
        }

    }

?>