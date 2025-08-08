<?php
    if(isset($_GET) and (int) $_GET["Nombres"] % 2 == 0){
        echo $_GET["Nombres"] . " est pair";
    }
    else {
        echo $_GET["Nombres"] . " est impair";
    }



?>
<form method = "get">
    <input type="text" placeholder="Nombres" name="Nombres">
    <input type="submit" value="envoyer">
</form>