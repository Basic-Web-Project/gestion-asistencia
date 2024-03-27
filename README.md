# Sistema de Gestion de Asistencia de Personal

## Objetivo:
Desarrollar una aplicación web básica para gestionar la asistencia del personal utilizando MySQL, PHP y JavaScript.

## Requisitos:

1. Front-end:

   - Crear una interfaz de usuario con HTML/CSS y JavaScript.
   - La interfaz debe incluir:
     - Formulario para registrar la entrada y salida de los empleados.
     - Visualización de la lista de asistencia del día actual.
     - Opción para generar un reporte de asistencia semanal.
2. Back-end:

   - Utilizar PHP para desarrollar la lógica del servidor.
   - Implementar las siguientes funcionalidades:
     - Registro de entradas y salidas en la base de datos MySQL.
     - Recuperación y visualización de los registros de asistencia.
     - Generación de un reporte de asistencia en formato PDF.
3. Base de Datos:

   - Utilizar MySQL como sistema de gestión de base de datos.
   - Diseñar una base de datos para almacenar los registros de asistencia.
   - Incluir tablas para empleados y registros de asistencia.
   - Implementar consultas SQL para interactuar con la base de datos.

## Evaluación: Consideraremos
- Calidad del Código: Claridad, uso de buenas prácticas, comentarios y organización.
- Funcionalidad: Cumplimiento de los requisitos y funcionamiento sin errores.
- Diseño de la Base de Datos: Estructura lógica y eficiencia de las consultas SQL.
- Interfaz de Usuario: Usabilidad, diseño responsivo y estética.

## Resultado 
- [x] Formulario para registrar la entrada y salida de los empleados.
- [x] Visualización de la lista de asistencia del día actual.
- [ ] Opción para generar un reporte de asistencia semanal.

> [!NOTE]
> Herramientas y Técnologias a utilizada: Arquitectura MVC, XAMPP, MYSQL, VSCODE, GIT, GITHUB.

> [!TIP]
> Para ejecutar la aplicacion debe de clonar el repositorio en la carpeta (xampp)htdocs/gestion-asistencia/repo-clonado
> Cambiar los parametros del archivo config/db.php
> Exportar los archivos de la carpeta db file: (1)asistencia_empleado, (2)asistencia_registro (debido a la foreign key)
> En XAMPP habilitar el servicio de Apache

> [!CAUTION]
> Hay esta en desarrollo la Opción para generar un reporte de asistencia semanal.