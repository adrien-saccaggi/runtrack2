<?php
if (isset($_POST["pseudo"]) and $_POST["pseudo"] == "Jhon" and $_POST["mdp"] == "Rambo") {
    echo "C'est pas ma guerre";

}
else{
    echo "Votre pire cauchemar";
    }
?>
<form method = "post">
    <input type="text" placeholder="username" name="pseudo">
    <input type="password" placeholder="password" name="mdp">
    <input type="submit" value="envoyer">
</form>