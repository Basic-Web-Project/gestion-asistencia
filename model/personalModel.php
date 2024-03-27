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

            // Verificar si ya existe una fila con el mismo ci y fecha
            $existing_statement = $this->PDO->prepare("SELECT COUNT(*) AS count FROM registro WHERE ci_empleado = :ci AND fecha_registro = :fecha");
            $existing_statement->bindParam(":ci", $ci, PDO::PARAM_INT);
            $existing_statement->bindParam(":fecha", $fecha);
            $existing_statement->execute();
            $existing_row = $existing_statement->fetch(PDO::FETCH_ASSOC);
            $existing_count = $existing_row['count'];

            // Si no existe realizar la inserción
            if ($existing_count == 0) {
                $stament = $this->PDO->prepare("INSERT INTO registro(ci_empleado,fecha_registro,hora_ingreso) VALUES (:ci,:fecha,:hora_ingreso)");
                $stament->bindParam(":ci", $ci, PDO::PARAM_INT);
                $stament->bindParam(":fecha", $fecha);
                $stament->bindParam(":hora_ingreso", $hora_ingreso);
                return ($stament->execute()) ? $this->PDO->lastInsertId(): false;
            }else{
                return false;
            }
        }

        //Funcion para registar la hora de salida del empleado
        public function add_hora_salida($ci, $fecha, $hora_salida){

            // Verificar si ya existe una fila con el mismo ci y fecha
            $existing_statement = $this->PDO->prepare("SELECT COUNT(*) AS count FROM registro WHERE ci_empleado = :ci AND fecha_registro = :fecha AND hora_salida = :hora_salida");
            $existing_statement->bindParam(":ci", $ci, PDO::PARAM_INT);
            $existing_statement->bindParam(":fecha", $fecha);
            $existing_statement->bindParam(":hora_salida", $hora_salida);
            $existing_statement->execute();
            $existing_row = $existing_statement->fetch(PDO::FETCH_ASSOC);
            $existing_count = $existing_row['count'];

            // Si existe una fila con el mismo ci y fecha, realizar la actualización
            if ($existing_count > 0) {
                $update_statement = $this->PDO->prepare("UPDATE registro SET hora_salida = :hora_salida WHERE ci_empleado = :ci AND fecha_registro = :fecha");
                $update_statement->bindParam(":hora_salida", $hora_salida);
                $update_statement->bindParam(":ci", $ci, PDO::PARAM_INT);
                $update_statement->bindParam(":fecha", $fecha);
                return ($update_statement->execute()) ? true : false;
            } else {
                // Si no existe una fila con el mismo ci y fecha, puedes manejar este caso según tus necesidades
                return false;
            }
        }
    }
?>