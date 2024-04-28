# Resultado

## Arquitectura MVC
> La arquitectura que se utilizó para la organizacion y desarrollo de la aplicacin web fue el **Modelo-Vista-Controlador**.
<p style='text-align:center'>
<img src="./img/arquitectura_mvc.png" alt="mvc" width="500px">
</p>

## Diagrama Entidad Relación
> Para el tratamiento de los datos en la DataBase se creo dos tablas **empleado** y **registro**.
<p style='text-align:center'>
<img src="./img/der.png" alt="der" width="400px">
</p>

## Aplicación Web
> **Página de inicio (*index.php*)**: Muestra un menú compuesto por cuatro opciones para navegar en el sistema.
<p style='text-align:center'>
<img src="./img/view_index.png" alt="view" width="400px">
</p>

> **Sección Buscar por Cédula (*registrar_entrada.php y registrar_salida*)**: Dicha sección es para buscar en la db si pertenece a la empresa. (Tomando como restrinción que no todos los usuarios pueden registrar su hora de entrada y salida si no pertenece a la empresa).
<p style='text-align:center'>
<img src="./img/find_ci.png" alt="find" width="400px">
</p>

> **Página Registrar Entrada (*registrar_entrada.php*)**: Después de la validación de la cédula, muestra los datos obtenidos de la db, adicionalmente la fecha y hora actual para luego guardar dichos datos en la db.
<p style='text-align:center'>
<img src="./img/registrar_entrada.png" alt="re-entrada" width="400px">
</p>

> **Página Registrar Salida (*registrar_salida.php*)**: Después de la validación de la cédula, muestra los datos obtenidos de la db, adicionalmente la fecha y hora actual para luego guardar dichos datos en la db.
<p style='text-align:center'>
<img src="./img/registrar_salida.png" alt="re-salida" width="400px">
</p>

> **Página Listado de Asistencia (*listado_asistencia.php*)**: Se muestra todos los registro de asistencia para el día actual.
<p style='text-align:center'>
<img src="./img/listado_asistencia.png" alt="listado-asistencia" width="400px">
</p>