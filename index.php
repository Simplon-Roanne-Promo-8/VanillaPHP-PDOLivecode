<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Livecode</title>
</head>
<body>
    <h1>Livecode PDO</h1>


    <h2>Créer un utilisateur</h2>
    <form action="./process/process_insert_user.php" method="post">
        <input type="text" placeholder="firstname" name="firstname">
        <input type="text" placeholder="lastname" name="lastname">
        <input type="number" placeholder="age" name="age">
        <button type="submit" >Enregister</button>
    </form>
</body>
</html>