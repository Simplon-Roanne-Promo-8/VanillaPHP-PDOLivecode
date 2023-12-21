<?php

    // Connexion à la BDD
    
    $connexion = new PDO("mysql:host=127.0.0.1;port=3306;dbname=livecode_pdo", 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
