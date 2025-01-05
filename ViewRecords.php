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

            $Records = new Records();
            $Records->view();
        ?>
    </div>
</body>
</html>