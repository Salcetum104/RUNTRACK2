<?php
$mysqli = mysqli_connect("localhost", "root", "", "Jour09");
$result = mysqli_query($mysqli, "SELECT * FROM `salles` ORDER BY capacite DESC;");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<table>";

echo "<tr>
        <th> Capacité décroissante des salles </th>
        <th> ID </th>
        <th> Nom </th>
        <th> Etage </th>
        <th> Capacité </th>
    </tr>";
foreach ($rows as $row){ 
echo "<tr>
    <th> </th>
    <td>{$row['id']}</td>
    <td>{$row['nom']}</td>
    <td>{$row['id_etage']}</td>
    <td>{$row['capacite']}</td>
    </tr>";
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10_Job08</title>
    <link rel= "stylesheet" href="./index.css">
</head>
<body>
    
</body>
</html>
