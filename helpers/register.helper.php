<?php
    if(isset($_POST['submit'])){
        $student_id = trim($_POST['student_id']);
        $student_name = capitalize(trim($_POST['name']));
        $course = $_POST['course'];
        $year = trim($_POST['year']);
        $section = $_POST['section'];

        require_once '../class/Database.php';
        require_once '../class/Register.php';

        $Student = new Register($student_id, $student_name, $course, $year, $section);
        $Student->validate();
    }

    function capitalize($name){
        $string = explode(' ', $name);
        foreach($string as $key => $value){
            $string[$key] = ucfirst($value);
        }
        return implode(' ', $string);
    }
?>