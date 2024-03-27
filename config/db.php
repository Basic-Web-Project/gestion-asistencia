<?php
    class db{
        private $host="127.0.0.1:3306";
        private $dbname="asistencia";
        private $user="root";
        private $pass="Ed1Sal58@";

        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }

?>