<?php
    class Records extends Database{
        public function view(){
            $query = "SELECT * FROM `student`";
            $stmt = parent::connect()->prepare($query);
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