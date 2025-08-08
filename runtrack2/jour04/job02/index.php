<?php 
$argument = array(
    'Prenom' => ''
,   'Nom' => '');
foreach ($argument as $key => $value) {
    // if(isset($key)) {
    //     echo($key);
    //     echo $_GET[$key];
    // } else {
    //     echo "Ton nom existe pas";
    // }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
</head>
<body>
    <form method="get">
    <label for = "Nom">Nom</label>
    <input type = "text" ; placeholder = "Nom" id= "Nom" name="Nom"><br><br>
    <label for = "Prenom">Prenom </label>
    <input type = "text" ; placeholder = "Prenom" id = "Prenom" name = "Prenom"><br><br>
    <input type = "submit" value = "envoyer">
    </form>
<table border = '1'>
        <thead>
            <tr>
                <th>Arguments</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($argument as $key => $value) {
            
            ?>
        <tr>
            <td><?php echo ($key);?></td>
            <td><?php echo ($_GET[$key]) ?? "" ?></td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
</body>
</html>



