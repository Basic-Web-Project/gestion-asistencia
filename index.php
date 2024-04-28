<?php
// Procesar el parámetro 'alert' para mostrar la alerta
if (isset($_GET['alert'])) {
    $alert_type = $_GET['alert'];
    if ($alert_type == 'success') {
        echo '<script>alert("Hora registrada con éxito"); window.location.href = "index.php";</script>';
    } 
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./view/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="./view/css/header.css">
    <link rel="stylesheet" type="text/css" href="./view/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./view/css/menu.css">
    <link rel="stylesheet" type="text/css" href="./view/css/section-home.css">
    <title>Document</title>
</head>

<body>
    <?php
        require_once("./view/inc/header.php");
    ?>
    <?php
        require_once("./view/content/home/seccion-home.php")
    ?>
    <?php
        require_once("./view/inc/footer.php")
    ?>
</body>

</html>