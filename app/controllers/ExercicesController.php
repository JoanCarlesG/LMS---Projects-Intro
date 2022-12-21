<?php 
echo "<br><br> <b>Estamos en ExercicesController.php </b> ... y aquí haremos: <br>";
echo "1. buscaremos Datos Exercices (usando métodos de ExercicesModel.php) <br>";
echo "2. pintaremos Grid Exercices (redireccionando al ExercicesView.php) <br><br>";

// ANALISIS - PSEUDO-CODIGO:

// 1. Buscaremos Datos:

// include "../inc/ExercicesModel.php";
// $arrExercices --> será un array de objetos en donde cada objeto será un ejercicio con campos definidos en el Model
// por tanto: 
// 1.1. crearemos $objExercices = new Exercice() ... y los añadiremos al $arrExercices haciendo Push
// 1.2. o bien ejecutamos el método del Model que trae los datos ($query = SELECT * FROM Exercices WHERE id_student='$id_student')
//      ... que con mysqli($cnn,$query) nos devuelve ya el array de objetos 
// return de $arrExercices

// 2. Pintaremos Grid:
header("Location: ../views/exercicesView.php");    /* Redirect browser */
?>