<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Event Attendance</title>
</head>
<body>
    <div class="container">
        <h1>Student Event Attendance</h1>
        <form action="./helpers/register.helper.php" method="post">
            <label for="student_id">Student ID:</label><br>
            <input type="text" name="student_id" id="student_id" required><br><br>
            <label for="name">Student Name:</label><br>
            <input type="text" name="name" id="name" required><br><br>
            <label for="course">Course:</label><br>
            <input type="radio" name="course" value="BSIT" required>BSIT<br>
            <input type="radio" name="course" value="BSCS" required>BSCS<br><br>
            <label for="year">Year:</label><br>
            <input type="number" name="year" id="year" required><br><br>
            <label for="section">Section:</label><br>
            <input type="radio" name="section" value="A" required>A<br>
            <input type="radio" name="section" value="B" required>B<br>
            <input type="radio" name="section" value="C" required>C<br>
            <input type="radio" name="section" value="D" required>D<br>
            <input type="radio" name="section" value="" required>None<br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>