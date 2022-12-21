<?php

    echo "<br><br> <b>Estamos en TeacherController.php </b> ... y aquí haremos: <br>";
    echo "1. buscaremos Datos Teachers (usando métodos de TeacherModel.php) <br>";
    echo "2.1. SI EXISTE el profe -> pintaremos Grid Students (redireccionando al StudentsView.php) <br><br>";
    echo "2.2. SI NO EXISTE el profe -> pintamos Login Profe (redireccionando al Login.php) <br><br>";

    // ANALISIS - PSEUDO-CODIGO:

    // 1. Buscaremos Datos:

    echo "<br> buscando datos... <br>";
    exit;

    // include "../models/TeacherModel.php";
    // $arrTeachers --> será un array de objetos en donde cada objeto será un PROFESOR con campos definidos en el Model
    // por tanto: 
    // 1.1. crearemos $objTeacher = new Teacher() ... y los añadiremos al $arrTeachers haciendo Push
    // 1.2. o bien ejecutamos el método del Model que trae los datos ($query = SELECT * FROM Teachers WHERE username like %'$nom')
    //      ... que con mysqli($cnn,$query) nos devuelve ya el array de objetos 
    // return de $arrTeacher  <-- con una sola posición llenada que será un objeto Teacher (registro) o vacío si NO existe


    // ---------------------------------------------------------------------------------------------
    // 2. Tenemos 2 posibles resultados:
    
    // 2.1. Si Existe -> Pintaremos Grid (mostramos StudentsView.php ruta /studentslist ):

    if (teacherCheck()!=NULL){
        header("Location: ../views/StudentsView.php");    /* Redirect browser */

    // 2.2. Si NO existe -> volvemos a Login view:
    }else{
        header("Location: ../views/Login.php");    /* Redirect to LOGIN mostrando mens "no existe, desea registrar?"  */
    }

?>