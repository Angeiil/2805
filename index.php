<?php
    
    $title = 'Formulaire';
    ini_set('display_errors',1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>echo "$title"</title>
</head>
<body id="top">
    
     <form action="PHP/verif.php" method="post">

    <p>   
            <label for="titre">Titre</label><br>
            <select name="titre" id="titre"> <!-- liste déroulante avec "Madame" par défaut -->
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
            </select> 
    </p>

    <p>
        <label for="nom">Nom</label><br />
        <input name="nom" id="nom" type="text" size="30" maxlength="40" Valeur=" Votre Nom" />
    </p>


    <p>
        <label for="nom">Prenom</label><br />
        <input name="prenom" id="nom" type="text" size="30" maxlength="40" Valeur=" votre Prénom" />
    </p>

    <p>
        <label for="nom">sexe</label><br />
        <input name="sexe" id="nom" type="text" size="30" maxlength="40" Valeur=" votre sexe" />
    </p>

    <p>
        <label for="nom">Date de Naissance</label><br />

        <input name="Date de Naissance" id="nom" type="checkdate" size="30" maxlength="40" Valeur="votre date de naissance" />
    </p>

    <p>
        <label for="nom">Adresse</label><br />
        <input name="Adresse" id="nom" type="text" size="100" maxlength="100" Valeur=" Votre Adresse" />
    </p>

    <!-- <p>
        <label for="nom">Message</label><br />
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </p> -->



    </p>
        <input name="Urgent" id="Urgent" type="checkbox" />
        <label for="Urgent">Urgent</label><br />
    </p>
    <p>
        <input type="submit" value="Envoyer" /> &nbsp; <input type="reset" value="Réinisialiser" />
    </p>

</form>
</body>
</html>