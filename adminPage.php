<table>
    <caption>Evenements</caption>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Date</th>
        <th>Durée</th>
    </tr>
<?php
    include "eventsCRUD.php";
    echo "Welcome ".$_GET['user']."<br />";
    $result = $conn->query("SELECT * FROM evenement");
    foreach($result as $event) {
?>
    <tr>
        <td><?php echo $event['id'] ?></td>
        <td><?php echo $event['nom_even'] ?></td>
        <td><?php echo $event['date'] ?></td>
        <td><?php echo $event['duree'] ?></td>
    </tr>
<?php
    }
?>
    <a href="/project/logout.php" alt="logout">logout</a>
</table>
