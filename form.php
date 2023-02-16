<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom_utilisateur" id="prenom_utilisateur">
        <input type="text" name="nom_utilisateur" id="nom_utilisateur">
        <input type="email" name="mail_utilisateur" id="mail_utilisateur">
        <input type="password" name="password_utilisateur" id="password_utilisateur">
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
<?php
    include ".accountCreate.php";
?>