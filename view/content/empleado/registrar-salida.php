<?php
// Procesar el parámetro 'alert' para mostrar la alerta
if (isset($_GET['alert'])) {
    $alert_type = $_GET['alert'];
    if ($alert_type == 'warning') {
        echo '<script>alert("Usuario ya registro hora de salida"); window.location.href = "registrar-salida.php";</script>';
    } 
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/gestion-asistencia/gestion-asistencia/view/css/header.css">
    <link rel="stylesheet" type="text/css" href="/gestion-asistencia/gestion-asistencia/view/css/re-section.css">
    <title>Document</title>
</head>

<body>
    <?php
        require_once("/xampp/htdocs/gestion-asistencia/gestion-asistencia/view/inc/header.php");
    ?>

    <section class="section-form-find">
        <form action="" method="GET" class="form-find-container">
            <label for="ci" class="form-lbl">Cédula de Identidad:</label>
            <input type="number" id="ci" name="ci" class="form-input" required <?php echo isset($_GET['ci']) ? 'value="' . $_GET['ci'] . '"' : ''; ?>>
            <button type="submit" class="form-btn">Validar</button>
            <a href="../../../index.php" class="form-atras-btn"></a>
        </form>
    </section>

    <?php
        require_once("/xampp/htdocs/gestion-asistencia/gestion-asistencia/controller/personalController.php");
        $obj = new personalController();
        
        // Verificar si el campo de entrada 'ci' está establecido y no está vacío
        if(isset($_GET['ci']) && !empty($_GET['ci'])){
            
            $band = $obj->find_id($_GET['ci']);
            //print_r($obj->find_id($_GET['ci']))
            if($band==false){
                //print_r("Usuario no encontrado");
    ?>
                <script>
                    alert("Usuario no encontrado en el sistema");
                </script>
    <?php
            }else{
                echo "<script>document.getElementById('ci').disabled = true;</script>"; //Para deshabilitar el input de la cédula
                $data = $obj->find_id($_GET['ci']);

                date_default_timezone_set('America/Guayaquil');//Establecer zona horaria
                $fecha = date('y-m-d');
                $hora = date('H:i:s');

                //Formulario con la data obtenida para el respectivo registro de hora del empleado
    ?>
                <section class="section-form-result">
                    <form method="POST" class="form-result-container" id="form-registro">
                        <div class="box">
                            <label for="apellido-p" class="form-lbl">Apellido Paterno:</label>
                            <input type="text" id="apellido-p" name="apellido-p" class="form-input" value="<?= $data[2]?>" disabled>
                        </div>
                        <div class="box">
                            <label for="apellido-m" class="form-lbl">Apellido Materno:</label>
                            <input type="text" id="apellido-m" name="apellido-m" class="form-input" value="<?= $data[3]?>" disabled>
                        </div>
                        <div class="box">
                            <label for="nombre" class="form-lbl">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-input" value="<?= $data[1]?>" disabled>
                        </div>
                        <div class="box">
                            <label for="area" class="form-lbl">Área:</label>
                            <input type="text" id="area" name="area" class="form-input" value="<?= $data[4]?>" disabled>
                        </div>
                        <div class="box">
                            <label for="fecha-entrada" class="form-lbl">Fecha de Entrada:</label>
                            <input type="text" id="fecha-entrada" name="fecha-entrada" class="form-input" value="<?= $fecha?>" disabled>
                        </div>
                        <div class="box">
                            <label for="hora" class="form-lbl">Hora de Salida:</label>
                            <input type="text" id="hora" name="hora" class="form-input" value="<?= $hora?>" disabled>
                        </div>
                    </form>
                    <button type="submit" class="form-result-btn" form="form-registro" name="registrar_salida">Registrar Hora Salida</button>
                </section>
    <?php
                // Verificar si se envió el formulario
                if (isset($_POST['registrar_salida'])){
                    $obj->add_hora_salida($data[0],$fecha,$hora);
                }
                    
                //$obj->add_hora_ingreso($data[0],$_POST['fecha-entrada'],$_POST['hora-emtrada']);
            }
        }
    ?>
</body>

</html>