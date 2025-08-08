<?php
$str = ("I'm sorry Dave I'm afraid I can't do that");
$v = array("a", "e" , "i" , "o", "u" , "y");//je nome le tableau $v//
for($i = 0 ; $i < 41 ; $i++){//$i est egal a 0 $i est inferieur a 41 et il augmente l'incrementation de 1//
foreach($v as $voyelle){//$v deviens $voyelle//
    if($str[$i] == $voyelle){//si $str avec la key $i est pareil que $voyelle//
    echo $voyelle;//il echo la $voyelle//
    }
}
}








// for($i = 0 ; $i <= 10; $i++){
// if($str != "a e i o u y"){
//     echo $i;
// }
//     else{
//         echo $str;
//     }
// }
?>