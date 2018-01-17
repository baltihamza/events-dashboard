<?php
include 'connexion.php';

session_start();

if($_SESSION['log'] == $_GET['user']) {
    include 'adminPage.php';
} else {
    header("Location:loginAdmin.php");
}
?>
