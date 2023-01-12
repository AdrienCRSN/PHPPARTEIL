<?php
  include 'connexion.php'; 

  //récupération de l'id dans le lien
  $id = 
  //requête de suppression
  $req = ("DELETE * from uitilisateurs where id = '$id'"); 
  $res = mysqli_query($conn, $req); 
  //redirection vers la page index.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPPRIMER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Supprimer l'employé : <? echo $row['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
        <input type="submit" value="Supprimer" name="button">
        </form>
    </div>
    </body>

</html>