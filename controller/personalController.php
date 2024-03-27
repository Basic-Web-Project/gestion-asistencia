<?php
    class personalController{
        private $model;
        public function __construct()
        {
            require_once("/xampp/htdocs/gestion-asistencia/gestion-asistencia/model/personalModel.php");
            $this->model = new personalModel();
        }

         //Funcion para buscar empleado por ID (esto es debido a que el empleado debe estar registrado como parte de la empresa)
         public function find_id($id){
            return ($this->model->find_id($id) != false) ? $this->model->find_id($id): false;
        }

        //Funcion para registar la hora de entrada del empleado
        public function add_hora_ingreso($ci, $fecha, $hora_ingreso){
            $id = $this->model->add_hora_ingreso($ci, $fecha, $hora_ingreso);
            return ($id != false) ? header("Location:../../../index.php?alert=success") : header("Location:registrar-entrada.php?alert=warning");
        }

        //Funcion para registar la hora de salida del empleado
        public function add_hora_salida($ci, $fecha, $hora_salida){
            $id = $this->model->add_hora_salida($ci, $fecha, $hora_salida);
            return ($id != false) ? header("Location:../../../index.php?alert=success") : header("Location:registrar-salida.php?alert=warning");
        }

        // Funcion para el Select
        public function select_asistencia($fecha_actual){
            return ($this->model->select_asistencia($fecha_actual)) ? $this->model->select_asistencia($fecha_actual) : false;
        }
    }
?>