<?php

function Primaire($nombre) {
    for ($i = 2; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
 
    return true;
}
 
for ($i = 2; $i < 1000; $i++) {
    if (Primaire($i)) {
        echo $i.'<br>';
    }
}
?>