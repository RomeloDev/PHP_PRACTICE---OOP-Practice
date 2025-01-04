<?php
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
            if(empty($this->student_id) || empty($this->student_name) || empty($this->course) || empty($this->year) || !isset($this->section)){
                echo "Please fill up all fields.";
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

            echo "Student registered successfully.";
            header("Location: ../index.php");
        }
    }
?>