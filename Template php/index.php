<?php

include 'connexion.php'; 


$req = mysqli_query($conn,"SELECT * FROM utilisateurs ORDER BY id DESC" ); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
               
                <?php
                $i =0; 
            while ($row = mysqli_fetch_row($req)) {
                $i++; 
               ?>
               
            <th>Nom : <?php echo $row[$i]; ?></td>
            <th>Prenom : <?php echo $row[$i]; ?></td>
            <th>Age : <?php echo $row[$i]; ?></td> 
        <?php 
            }
            
            ?>

        
            </tr>

            

        </table>




    </div>
</body>

</html>