<?php
session_start();
if (isset($_POST['return'])) {
    $_SESSION['nbvisites'] = -1;

}
if (isset($_SESSION['nbvisites'])){
$_SESSION['nbvisites']++;

}
else{
    $_SESSION['nbvisites'] = 0;
    
}
echo 'nombre de visite = '. $_SESSION['nbvisites'];





// session_start();
// if (isset($_POST['return'])) {
//      $_SESSION['nbvisites'] = -1;
// }
// if (!isset($_SESSION['nbvisites'])){
//     $_SESSION['nbvisites'] = 0;
//     header("Refresh:0");


// }
// $_SESSION['nbvisites']++;

// echo 'nombre de visite = '. $_SESSION['nbvisites'];

?>
<form method = 'post'>
    <input type="submit" value = 'retour' name = 'return'>
</form>

