<?php

class Student{

    // 1. ZONA ATRIBUTOS:
    private $_name;
    private $_id_teacher;
    private $_birthdate;
    private $_basics;
    private $_experience;

    private $_arrStudents;

    // 2. ZONA CONSTRUCTOR:
    public function __construct($name,$id_teacher,$birthdate,$basics,$experience){
        $this->_name = $name;
        $this->_id_teacher = $id_teacher;
        $this->_birthdate = $birthdate;
        $this->_basics = $basics;
        $this->_experience = $experience;
    }

    // 3. ZONA GETTERS-SETTERS


    // 4. ZONA METODOS ESPECIFICOS
    public function showAllStudents(){
    
        $strQueryStudentsAll = "SELECT * FROM students";  // WHERE id_profesor = $idProfe
        $recordsetStudents = mysqli_query($cnn,$strQueryStudentsAll);  
        $this->_arrStudents = $recordsetStudents;
        return $recordsetStudents;  
    }

    public function exists($nom){
        $match = false;
        foreach ($this->_arrStudents as $student) {
            // echo "var_dump de $ user : " . var_dump($user) . "<br>";
            if ($student[1] == $nom) {
                $match = true;
            }
        }
        return $match;
    }

}

?>