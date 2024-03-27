<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/gestion-asistencia/gestion-asistencia/view/css/header.css">
    <link rel="stylesheet" type="text/css" href="/gestion-asistencia/gestion-asistencia/view/css/aa-section.css">
    <title>Document</title>
</head>

<body>
    <?php
        require_once("/xampp/htdocs/gestion-asistencia/gestion-asistencia/view/inc/header.php");
        require_once("/xampp/htdocs/gestion-asistencia/gestion-asistencia/controller/personalController.php");

        date_default_timezone_set('America/Guayaquil');//Establecer zona horaria
        $fecha = date('y-m-d');

        $obj = new personalController();
        $rows = $obj->select_asistencia($fecha);
    ?>

    <section class="section-container">
        <p class="section-titulo">Listado de Asistencia del <?php echo $fecha; ?></p>
        <a href="../../../index.php" class="section-atras-btn"></a>
    </section>

    <table class="table">
        <thead class="table-head">
            <tr>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Área</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Hora de Entrda</th>
                <th scope="col">Hora de Salida</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <th><?= $row[0]?></th>
                        <th><?= $row[1]?></th>
                        <th><?= $row[2]?></th>
                        <th><?= $row[3]?></th>
                        <th><?= $row[4]?></th>
                        <th><?= $row[7]?></th>
                        <th><?= $row[8]?></th>
                        <th><?= $row[9]?></th>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay registro en el Sistema</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>