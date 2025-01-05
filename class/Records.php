<?php

    include './session.php';


    class Records extends Database{
        private $course;
        private $year;
        private $section;

        public function __construct(){
            $this->course = $_SESSION['course'];
            $this->year = $_SESSION['year'];
            $this->section = $_SESSION['section'];
        }

        public function view(){
            $query = "SELECT * FROM `student` WHERE `course` = :course AND `year` = :year AND `section` = :section";
            $stmt = parent::connect()->prepare($query);
            $stmt->bindParam(':course', $this->course);
            $stmt->bindParam(':year', $this->year);
            $stmt->bindParam(':section', $this->section);
            $stmt->execute();

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Student ID</th>";
            echo "<th>Student Name</th>";
            echo "<th>Year</th>";
            echo "<th>Course</th>";
            echo "<th>Section</th>";
            echo "</tr>";

            while($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['year']."</td>";
                echo "<td>".$row['course']."</td>";
                echo "<td>".$row['section']."</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }
?>