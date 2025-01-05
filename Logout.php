<?php
    session_start();
    unset($_SESSION['course']);
    unset($_SESSION['year']);
    unset($_SESSION['section']);
    $_SESSION['status'] = 'invalid';
    header('Location: index.php');
?>