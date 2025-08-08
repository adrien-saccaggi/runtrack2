<?php
$str = "Les choses que l'on possède finissent par nous posséder";
$chars=[];
$compte = mb_strlen($str);

for ($i=0; $i < $compte ; $i++) { 
   $chars[] = mb_substr($str,$i,1);
}
$inverse =' ';

for ($i=count($chars) -1; $i >= 0  ; $i--) { 
$inverse .= $chars[$i];
}
echo $inverse
?>