<?php

//envoyer le formulaire 
if (isset($_POST['submit'])) {   //variables+
    $login = htmlspecialchars(trim($_POST['login']));
    $username = htmlspecialchars(trim($_POST['prenom']));
    $name = htmlspecialchars(trim($_POST['nom']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
    //verifier si les champs sont pas vide
    if (!empty($login) && !empty($username) && !empty($name) && !empty($password) && !empty($repeatpassword)) {
        if ($password == $repeatpassword) {
            $bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion') or die('erreur');
            $user_insert = "INSERT INTO utilisateurs(login, prenom, nom, password) VALUES('$login', '$name' ,'$username','$password');";
            $query = mysqli_query($bdd, $user_insert);
            die("inscription terminé. <a href= 'connexion.php'> connectez vous </a>.");
        } else echo "mots de passe erroné";
    } else echo "veuillez saisir tout les champs";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <title>Inscription</title>
</head>

<body>
    <header>
        <?php
        include('header.php');

        ?>


    </header>
    <h1 class="ins">INSCRIPTION</h1>
    <div class="container">
        <form action="#" method="post">

            <label for="login">login:</label>
            <input type="text" id="name" name="login">

            <label for="prenom">prénom:</label>
            <input type="text" id="prenom" name="prenom">

            <label for="nom">nom:</label>
            <input type="text" id="nom" name="nom">

            <label for="pasword">password:</label>
            <input type="password" id="password" name="password">

            <label for="repeatpasword">confirm the password:</label>
            <input type="password" id="repeatpassword" name="repeatpassword">

            <div class="form-example">
                <input type="submit" name="submit" value="valider!">
            </div>
        </form>
    </div>
</body>

</html>