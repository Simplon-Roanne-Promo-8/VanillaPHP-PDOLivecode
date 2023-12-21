<?php 

require_once "./config/db_connexion.php";


$sql = "SELECT * from user";

$dataObject = $connexion->query($sql);
var_dump($dataObject);

$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($data);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h2>Liste des utilisateurs</h2>
    
    <ul>
        <?php foreach ($data as $user) { ?>

            <li> <?= $user['id'] ?> :  <?= $user['firstname'] ?> <?= $user['lastname'] ?> <?= $user['age'] ?> </li>

        <?php } ?>


    </ul>

</body>
</html>