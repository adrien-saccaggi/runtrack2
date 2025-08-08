<?php
    $hauteur = (int) ($_POST["hauteur"]);
    $largeur = (int) ($_POST["largeur"]);

for ($l=0 ; $l < $largeur ; $l++){
    echo str_repeat("&nbsp;&nbsp", $largeur - $l);
    echo"/";
    echo str_repeat("_" , $l+$l);
    echo "\<br>";
}
for ($h = 0 ; $h < $hauteur; $h++){
    if($h == $hauteur - 1){
        echo "|";
        echo str_repeat("_", $l+$l);
        echo "|<br>";
    }
    else{
        echo "|";
        echo str_repeat("&nbsp;&nbsp", $l+$l);
        echo "|<br>";
    }
}


    

?>

    <!-- // for ($i = 0; $i <= $hauteur; $i++) {
//     for ($j = 0; $j <= $hauteur - $i; $j++) echo "  "; {
//         echo "/";
//     }
//     for ($j = 0; $j <= $i + $i; $j++) echo "_"; {

//     }
//     echo "\\<BRE>";
    
// }

// echo"<br>";
// echo "<pre>";
// for ($y = 1; $y <= $hauteur; $y++) {
//     echo "&nbsp&nbsp";
//     for ($x = 1; $x <= $largeur; $x++) {
//         // echo "*";
//         echo "&nbsp";
//         // echo strrepeat("&nbsp &nbsp", 9);
//         if ($x == 1 || $x == $largeur) {
//             echo "|"; //echo "|";
//         }

//         else {
//             echo "&nbsp";
//         }

//         if ($y == $hauteur && $x < $largeur){
//             echo "_"; //echo "-";
//         }
//         // elseif ($y == 1 && $x < $largeur){
//         //     echo "_";
//         // }
//         else {
//             echo "&nbsp";
//         }

//     }

// echo "<br/>";

// }
// echo "</pre>";

?> -->
<form method = 'post'>
    <input type="text" placeholder = "hauteur" name = "hauteur"><br>
    <input type="text" placeholder = "largeur" name = "largeur"> <br>
    <input type="submit" value = "envoyer">
</form>