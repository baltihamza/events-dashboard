<?php
    session_start();
    unset($_SESSION['log'], $_SESSION['pwd']);
    session_destroy();
    header('Location: loginAdmin.php');
?>