<?php

require_once "../config/db_connexion.php";

if (!empty($_POST['firstname'])
&& !empty($_POST['lastname'])
&& !empty($_POST['age'])) {
    // Enregistrer en BDD
    
    //Etape 2 Créer la requete SQL
    
    $sql = "INSERT INTO `user`(`firstname`, `lastname`, `age`) VALUES ('"
            . $_POST['firstname']. "', '" 
            . $_POST['lastname'] . "', "
            . $_POST['age'] .")";
    var_dump($sql);
    $connexion->query($sql);
    header('Location: ../list_user.php');
    
}else{
    header('Location: ../index.php');
}