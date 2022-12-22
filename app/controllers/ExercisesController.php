<?php 
echo "<br><br> <b>Estamos en ExercisesController.php </b> ... y aquí haremos: <br>";
echo "1. buscaremos Datos Exercises (usando métodos de ExercicesModel.php) <br>";
echo "2. pintaremos Grid Exercises (redireccionando al ExercicesView.php) <br><br>";

// ANALISIS - PSEUDO-CODIGO:

// 1. Buscaremos Datos:

// include "../inc/ExercisesModel.php";
// $arrExercises --> será un array de objetos en donde cada objeto será un ejercicio con campos definidos en el Model
// por tanto: 
// 1.1. crearemos $objExercises = new Exercise() ... y los añadiremos al $arrExercises haciendo Push
// 1.2. o bien ejecutamos el método del Model que trae los datos ($query = SELECT * FROM Exercic+ses WHERE id_student='$id_student')
//      ... que con mysqli($cnn,$query) nos devuelve ya el array de objetos 
// return de $arrExercises

// 2. Pintaremos Grid:
header("Location: ../views/exercisesView.php");    /* Redirect browser */
?>