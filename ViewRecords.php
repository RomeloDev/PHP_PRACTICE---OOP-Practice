<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
</head>
<body>
    <div class="container">
        <h2>View Records</h2>
        <?php
            
            require_once './class/Database.php';
            require_once './class/Records.php';
            require_once './session.php';

            $Records = new Records();
            $Records->view();
        ?>
        <br>
        <form action="Logout.php" method="get">
            <button name="logout">Logout</button>
        </form>
    </div>
</body>
</html>