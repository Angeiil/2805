<?php

echo ('ma page php');
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire 1 </title>
</head>
<body>
    <h1>mon formulaire</h1>
    <br/>
    <form method='POST' action="/sessions/190528/index.php">
        First name:<br>
        <input type="text" name="firstname"  required>
        <br>
        Last name:<br>
        <input type="text" name="lastname"  required>
        <br>
        Birthday: <input type="date" name="bday">
        <br><br>
        <input type="submit" value="Submit">
    </form> 

<?php
if ($_POST['firstname']!=NULL||$_POST['lastname']!=NULL||$_POST['bday']!=''){
echo($_POST['firstname'].'<br/>');
echo($_POST['lastname'].'<br/>');
echo($_POST['bday'].'<br/>');
}


?>
</body>
</html>