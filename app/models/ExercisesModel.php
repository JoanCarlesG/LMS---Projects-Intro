<?php 
class Exercise{
    //Attributes
    private $_title;
    private $_subject;
    private $_exercise;
    private $_module;
    private $_grade;
    private $_deliveryDate;
    private $_attach;

    private $_arrExercises;
    
    //CONSTRUCTOR:
    public function __construct($title,$subject,$exercise,$module,$grade, $deliveryDate, $attach){
        $this->_title = $title;
        $this->_subject = $subject;
        $this->_exercise = $exercise;
        $this->_module = $module;
        $this->_grade = $grade;
        $this->_deliveryDate = $deliveryDate;
        $this->_attach = $attach;
    }

    //Getters
    public function getTitle($id_student, $id_exercise){
        $sql = "SELECT title FROM exercises RIGHT JOIN student_make_exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    public function getSubject($id_student, $id_exercise){
        $sql = "SELECT subject FROM exercises RIGHT JOIN student_make_exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    public function getExercise($id_student, $id_exercise){
        $sql = "SELECT exercise FROM exercises RIGHT JOIN student_make_exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    public function getModule($id_student, $id_exercise){
        $sql = "SELECT module FROM exercises RIGHT JOIN student_make_exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    public function getGrade($id_student, $id_exercise){
        $sql = "SELECT grade FROM student_make_exercises RIGHT JOIN exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    public function getDelivery($id_student, $id_exercise){
        $sql = "SELECT delivery FROM student_make_exercises RIGHT JOIN exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    public function getAttach($id_student, $id_exercise){
        $sql = "SELECT attachement FROM student_make_exercises RIGHT JOIN exercises ON id_mak_exe = id_exercise WHERE id_mak_stu = $id_student AND id_mak_exe = $id_exercise";
    }
    
    //Methods

    public function getAllStats($id_student, $id_exercise){
        
    }

}

?>