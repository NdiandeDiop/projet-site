<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
        body {
            width: 1000px;
            margin-left: 170px;

        }
    </style>
    <title>Tableau - Tri - Position</title>
</head>
<body>


<?php



// $position = array($_POST["position"]);



// affichage du tableau par ordre d'entrée

if (isset($_POST['ok'])) {
    echo '<h3 class="text-center">Vous venez d\'entrer vos valeurs : </h3>';
    echo '<p class="text-center">Affichage par ordre d\'entrée: </p>';

    foreach ($_POST["entier"] as $index => $valeur) {

        if ($index != 'ok') {
              
           print_r('- ' . $valeur . ' se trouvant à la position '. $index. '<br/>' ) ;
             }
    }

    echo '<p class="text-center">Affichage par ordre croissant: </p>';
    asort($_POST["entier"]);
    foreach ($_POST["entier"] as $index => $valeur) {
        if ($index != 'ok') {

            echo '- ' . $valeur . ' se trouvant à la position '. $index.'<br/>';
        }
    }
}

?>

</body>
</html>