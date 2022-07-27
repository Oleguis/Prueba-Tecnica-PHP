<?php

    //Llama al Modelo o BD

    require_once("models/Estudiantes_model.php");

    $estudiantes=new Datos_estudiantes();

    $datos_estudiantes=$estudiantes->get_datosEstudiantes();

    require_once("views/Estudiantes_view.php");

?>