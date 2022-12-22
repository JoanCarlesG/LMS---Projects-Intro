<?php 
class Exercise{
    //Attributes
    public $title = "";
    public $subject = "";
    public $exercise = "";
    public $module = "";
    public $grade = 0.0;
    public $deliveryDate = "";
    public $attach = "";
    
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

    public function getAll($id_student, $id_exercise){
        self::getTitle($id_student, $id_exercise);
        self::getSubject($id_student, $id_exercise);
        self::getExercise($id_student, $id_exercise);
        self::getModule($id_student, $id_exercise);
        self::getGrade($id_student, $id_exercise);
        self::getDelivery($id_student, $id_exercise);
        self::getAttach($id_student, $id_exercise);
    }

}

?>