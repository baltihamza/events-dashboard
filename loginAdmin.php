<?php
include 'connexion.php';

if(isset($_POST['submit']))
{
    $username = htmlentities(trim($_POST['username']));
    $password = htmlentities(trim($_POST['password']));
    if ($username && $password) 
    {
        $result = $conn->query("SELECT log, pwd FROM aut WHERE log='$username' AND pwd='$password'"); 
        if ($result->rowCount()==0) {
            echo "login ou pwd incorrect";
        } else {
            $users = $result->fetchAll();
            session_start();
            $_SESSION['log']=$users[0]['log'];
            $_SESSION['pwd']=$users[0]['pwd'];
            header("Location:gererAdmin.php?user=$username");
        }
    }
    else echo"veuillez saisir tous les champs";
}
?>

<form method="POST" action="loginAdmin.php">
    <p>login:</p>
    <input type="text" name="username">
    <p>votre password:</p>
    <input type="password" name="password"></br></br>
    <input type="submit" value="s'inscrie" name="submit">
</form>
