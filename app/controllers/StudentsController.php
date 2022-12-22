<?php

    echo "<br><br> <b>Estamos en StudentsController.php </b> ... y aquí haremos: <br>";
    echo "1. buscaremos Datos Students (usando métodos de StudentsModel.php) <br>";
    echo "2. pintaremos Grid Students (redireccionando al StudentsView.php) <br><br>";

    // exit;

    // ANALISIS - PSEUDO-CODIGO:

    // 1. Buscaremos Datos:

    // include "../models/StudentModel.php";
    // $arrStudents --> será un array de objetos en donde cada objeto será un estudiante con campos definidos en el Model
    // por tanto: 
    // 1.1. crearemos $objStudent = new Student() ... y los añadiremos al $arrStudents haciendo Push
    // 1.2. o bien ejecutamos el método del Model que trae los datos ($query = SELECT * FROM Students WHERE id_teacher='$id_teacher')
    //      ... que con mysqli($cnn,$query) nos devuelve ya el array de objetos 
    // return de $arrStudents

    // 2. Pintaremos Grid:
    header("Location: app/views/studentsView.php");    /* Redirect browser */
    

?>