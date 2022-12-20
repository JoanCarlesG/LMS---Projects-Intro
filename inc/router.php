<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// DEFINICION DE RUTAS:

// ejemplo con Array Asociativo (recomendado pero más laborioso, habría que implementar función de ruteo)
$routes = array(
    // 0. Testejar
	'/test' => 'test#index',
    // 1. Landing-IniSessió (rutes per taula TEACHER):
    '/'         => 'teacher#index',
    '/index'    => 'teacher#index',    
	// 2. rutes per taula STUDENTS
    '/studentslist' => 'student#searchAll',
    '/studentdetails' => 'student#searchById',  // 'StudentController.php?id=3'... rep per GET id i executa dins el Controller la function searchById($_GET[id]) {return $arrData = ...model.php "SELECT...WHERE..."}
    // 3. rutes per taula EXERCISES
    '/exerciseslist' => 'exercises#searchAll'
);

// ATENCION: esta estructura no tiene array routes, es simple, por tanto NO podemos indicar la función concreta 
//           a ejecutar a dentro del xxxController.php
//           ... por tanto, solución rápida: poner varios xxxController con una sola función correspondiente dentro.
function loadContent($id_page) {
    if((!isset($id_page)) || $id_page=="") {
        $id_page="";
    }
    
    switch ($id_page) {
        // dos casos para ir a LOGIN (comprobar si usr/pwd existe en tabla Teachers)
        case "":
            include('app/views/login.php');
            break;
        case "index":
            include('app/views/login.php');
            break;

        // un caso para ir a LISTA-ESTUDIANTES (dentro tendrá una sola function searchAll() { return array de N registros de tabla Students}  )
        //    OJO aquí llamará a StudentsController que de momento solo un ECHO (en vez del search) y un "Location reload:StudentsView.php" <-- un html de grid students
        case "studentslist":
            include('app/controllers/StudentsController.php');
            break;                            

        // un caso para ir a SINGLE-ESTUDIANTE (dentro tendrá 1 sola function searchById() { return array con una sola posición llenada con 1 registro}  )
        case "studentdetails":
            include('app/controllers/StudentController.php');
            break;                            

        // un caso para ir a LISTA-EJERCICIOS (dentro tendrá 1 sola function searchAll() { return array de N registros Students_Make_Exercises filtrado por id_student AND id_exercise}  )
        case "exerciseslist":
            include('app/controllers/ExercisesController.php');
            break;            
            
        // mensaje página no encontrada
        default:
            include('inc/error404.php');
            break;
    }
}
