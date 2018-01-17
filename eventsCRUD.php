<?php
include "connexion.php";

if(isset($_POST['operation'])) {
    switch ($_POST['operation']) {
        case "CREATE":
            $conn->query("INSERT INTO evenement (id, nom_even, date, duree, img) VALUES ({$_POST['id']}, '{$_POST['nom_even']}', '{$_POST['date']}', '{$_POST['duree']}', '{$_POST['img']}');");
            break;
    
        case "UPDATE":
            $values = "";
            $values .= isset($_POST['nom_even']) ? "nom_even='{$_POST['nom_even']}'" : "";
            $values .= isset($_POST['date']) ? ", date='{$_POST['date']}'" : "";
            $values .= isset($_POST['duree']) ? ", duree='{$_POST['duree']}'" : "";
            $values .= isset($_POST['img']) ? ", img='{$_POST['img']}'" : "";
    
            $conn->query("UPDATE evenement SET {$values} WHERE id={$_POST['id']};");
            break;
        
        case "DELETE":
            $conn->query("DELETE FROM evenement WHERE id={$_POST['id']}");
            break;   
    }
}
?>
