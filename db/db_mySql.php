<?php	

    $nomServerBaseDeDades = "localhost";
    $nomUsuariBaseDeDades = "root";
    $pwdUsuariBaseDeDades = "";
    $nomNostraBaseDeDades = "LMS";

    // crear objecte cnn de tipus class mysqli(server,user,pwd,nameBD)
    //      també es pot fer:  $cnn = mysqli_connect('localhost','root','','php_mysql_crud');
    $cnn = new mysqli($nomServerBaseDeDades, 
                      $nomUsuariBaseDeDades, 
                      $pwdUsuariBaseDeDades, 
                      $nomNostraBaseDeDades);
        
    // debugar
    printf("Server: " . $nomServerBaseDeDades . " / ");
    printf("Usuari: " . $nomUsuariBaseDeDades . " / ");
    printf("Passwd: " . $pwdUsuariBaseDeDades . " / ");
    printf("BDades: " . $nomNostraBaseDeDades . " / ");

    // comprobar conexió:
    if (isset($cnn)){
        echo "DB is connected. / ";
    }

    if ($cnn->connect_error)
    {
        printf("Error de connexió a la BD.");
    }
    else
    {
        printf("Connexió ok!");
    }

    // DEBUG: dades students i teachers (solo comprobar que lee bien)
    $strQueryStudentsAll = "SELECT * FROM students";
    $recordsetStudents = mysqli_query($cnn,$strQueryStudentsAll);
    var_dump($recordsetStudents);

    $strQueryTeachersAll = "SELECT * FROM teachers";
    $recordsetTeachers = mysqli_query($cnn,$strQueryTeachersAll);
    var_dump($recordsetStudents);
