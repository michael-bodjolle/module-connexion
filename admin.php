<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
<header>
    <?php
    include("header.php");
    ?>
</header>
<main>
    <?php
 

        $bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion') or die('erreur');
        $requete = "SELECT * FROM utilisateurs";
        $query = mysqli_query($bdd, $requete);
        $recup = mysqli_fetch_all($query);
        // foreach ($recup as $utilisateur) {
        //     // echo "$utilisateur[1], $utilisateur[2], $utilisateur[3],$utilisateur[4],";
        //     echo "<table>
        //         <div class='tab'>
        //         <table>
        //         <tr>
        //           <th>pseudo</th>
        //           <th>nom</th> 
        //           <th>prenom</th>
        //           <th>mot de passe</th>
        //         </tr>
        //         <tr>
        //           <td>$utilisateur[1]</td>
        //           <td>$utilisateur[2]</td>
        //           <td>$utilisateur[3]</td>
        //           <td>$utilisateur[4]</td>
        //         </tr>
              
               
        //       </table>
               
        //     </table>
        //     <div>";
        // }
    
    ?>
    <table>
        <thead>
            <tr>
                <th>login</th>
                <th>nom</th>
                <th>prenom</th>
                <th>mot de passe</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recup as $utilisateur) {  ?>
            <tr>
              <td><?php echo$utilisateur[1] ?></td>  
              <td><?php echo$utilisateur[2]  ?></td>
              <td><?php echo$utilisateur[3] ?></td>
              <td><?php echo$utilisateur[4] ?></td>
                
            </tr>
       <?php } ?>
        </tbody>
    </table>


</main>

<body>

</body>

</html>