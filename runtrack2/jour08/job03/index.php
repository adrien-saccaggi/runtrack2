<?php
session_start();

if (!isset($_SESSION["prenom"])) {
    $_SESSION["prenom"] = [];
}
if (isset($_POST["prenom"]) and !empty(trim($_POST["prenom"]))) {
    $prenom = $_POST["prenom"];
    $_SESSION["prenom"][] = $prenom;
}



if (isset($_POST["reset"])) {
    $_SESSION["prenom"] = [];
}
?>

<html>
<body>
    <form method="POST" action="">
        <input type="text" placeholder="value" name="prenom">
        
        <button type="submit" name="envoyer" value="submit">Envoyer</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <ul>
        
        <?php
        foreach ($_SESSION["prenom"] as $prenom):
            echo "<li>$prenom</li>";
        endforeach;
        ?>
    </ul>
    </form>
</html>