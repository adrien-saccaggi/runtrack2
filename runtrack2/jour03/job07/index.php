<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$NewStr = '';
$compteur = strlen($str);


for ($i= 1; $i < $compteur ; $i++) { 
    $NewStr = substr($str, 1 , $compteur -1) ;
}
$NewStr .= substr($str , 0 , 1);
echo $NewStr;
?>