<?php

if(isset($_POST['forma'])){
    echo 'Nom: '.$_POST['nom'].'<br>'.'Prénom: '.$_POST['prenom'].'<br>'.'Sexe: '.$_POST['sexe'].'<br>'.'Couleur cheveux: '.$_POST['couleur'].'<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>td1</title>
</head>
<body>
<h1>Gros titre du formulaire</h1>

<method="POST" action="">

    <input type="text" name="nom" placeholder="Nom" id="nom" />
    <input type="text" name="prenom" placeholder="Prénom" id="prenom" />

    <input type="radio" name="sexe" id="radio0">Masculin
    <input type="radio" name="sexe" id="radio1">Féminin

    <input type="text" name="couleur" id="couleur" />

    <input type="submit" name="submit" id="forma" value="Envoyer" />
    <input type="reset" name="reset" value="Reset" />
</form>

</body>
</html>
