<?php

session_start();
if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location:connexion.php');
}
?>



<!-- si je suis connecté accueil  inscription et connexion s'affiche -->
<?php
if (isset($_SESSION['login']) && $_SESSION['login']=='admin'){
echo "<nav>
<div class='nve'>
            <a href='index.php'> accueil</a>
            <a href='profil.php'>profil</a>
            <a href='admin.php'>admin</a>

            </div>
            <form  action='profil.php' method='post'>
                <div class='form-example'>
                <input  type='submit' name='deconnexion' value='Déconnexion'></input>
                </div>
            </form>
            
        </nav>";
}elseif  (isset($_SESSION['login']) && $_SESSION['login'] !='admin') 
{
    echo "<nav>
    <div class='nve'>
            <a href='index.php'> accueil</a>
            <a href='profil.php'>profil</a>
            </div>
            <form  action='profil.php' method='post'>
                <div class='form-example'>
                <input  type='submit' name='deconnexion' value='Déconnexion'></input>
                </div>
            </form>
            
        </nav>";
}
else{
    echo "<nav>
    <a href='index.php'> accueil</a> 
    <a href='inscription.php'>inscription</a>
    <a href='connexion.php'>connexion</a>
        </nav>";
}

?>