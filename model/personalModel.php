<?php
    class personalModel{
        private $PDO;

        public function __construct()
        {
            require_once("/xampp/htdocs/gestion-asistencia/gestion-asistencia/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        //Funcion para buscar empleado por ID (esto es debido a que el empleado debe estar registrado como parte de la empresa)
        public function find_id($ci){
            $stament = $this->PDO->prepare("SELECT * FROM empleado WHERE ci_empleado = :ci");
            $stament->bindParam(":ci", $ci);
            return ($stament->execute()) ? $stament->fetch(): false;
        }

        //Funcion para registar la hora de entrada del empleado
        public function add_hora_ingreso($ci, $fecha, $hora_ingreso){
            $stament = $this->PDO->prepare("INSERT INTO registro(ci_empleado,fecha_registro,hora_ingreso) VALUES (:ci,:fecha,:hora_ingreso)");
            $stament->bindParam(":ci", $ci, PDO::PARAM_INT);
            $stament->bindParam(":fecha", $fecha);
            $stament->bindParam(":hora_ingreso", $hora_ingreso);
            return ($stament->execute()) ? $this->PDO->lastInsertId(): false;
        }
    }
?>