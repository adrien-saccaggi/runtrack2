<?php

if (isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites', $_COOKIE['nbvisites'] = $_COOKIE['nbvisites'] +1);
}
else{
    setcookie('nbvisites', 0);
    $_COOKIE['nbvisites'] = 0;
    
}
if (isset($_POST['return'])) {
    setcookie('nbvisites', 0);
    $_COOKIE['nbvisites'] = 0;

}
echo 'nombre de visite = '. $_COOKIE['nbvisites'];

?>
<form method = 'post'>
    <input type="submit" value = 'retour' name = 'return'>
</form>
