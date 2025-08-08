<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <form method="post">
    <label for="E-Mail">Adresse E-Mail</label>
    <input type="text"  placeholder="E-Mail" id="E-Mail" name="E-Mail"><br><br>
    <label for="Nom">Prénom </label>
    <input type="text"  placeholder = "Prénom" id = "Nom" name = "Nom"><br><br>
    <label for="MDP">Mot de passe</label>
    <input type = "password" ; placeholder = "Mot De Passe" id  = "MDP" name = "MDP"> <br><br>
    <input type = "submit" value = "envoyer">
    </form>
</body>
</html>
<?php
$nombreArgument = 0;
$Argument = array("E-Mail", "Nom", "MDP");
    foreach($Argument as $Arguments){
if (isset ($_POST[$Arguments]) and $_POST[$Arguments] !== "")  {
$nombreArgument++;

}
    }
echo $nombreArgument;
?>