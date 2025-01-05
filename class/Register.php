<?php

session_start();
    class Register extends Database{
        private $student_id;
        private $student_name;
        private $course;
        private $year;
        private $section;

        public function __construct($student_id, $student_name, $course, $year, $section){
            $this->student_id = $student_id;
            $this->student_name = $student_name;
            $this->course = $course;
            $this->year = $year;
            $this->section = $section;
        }

        public function validate(){
            //check if student is already recorded
            $query = "SELECT * FROM `student` WHERE `id` = :id";
            $stmt = parent::connect()->prepare($query);
            $stmt->bindParam(':id', $this->student_id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row > 0){
                echo "<script>alert('Student is already recorded.');
                window.location.href='../index.php'</script>";
                exit();
            }else{
                $this->register();
            }
        }

        private function register(){
            $query = "INSERT INTO `student`(`id`, `name`, `year`, `course`, `section`) VALUES (:id, :name, :year, :course, :section)";
            $stmt = parent::connect()->prepare($query);
            $stmt->bindParam(':id', $this->student_id);
            $stmt->bindParam(':name', $this->student_name);
            $stmt->bindParam(':year', $this->year);
            $stmt->bindParam(':course', $this->course);
            $stmt->bindParam(':section', $this->section);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $_SESSION['course'] = $this->course;
                $_SESSION['year'] = $this->year;
                $_SESSION['section'] = $this->section;
                header("Location: ../Records.php");
            }else{
                echo "Failed to register student.";
            }
        }
    }
?>