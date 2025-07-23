<?php
        $hauteur = 5;
        $nbrWhite = $hauteur;
        $nbrblanc = $hauteur;
    for($i = 0 ; $i <= $hauteur ; $i++){
        for($h = $nbrWhite ; $h >= 0 ; $h--){
            echo "<span style='color:white'>_</span>";//x5
         }
        
        echo "/";
        for($p = $hauteur ; $p <= $nbrblanc ; $p++){
            echo " <span style='color:white'>_</span>";
        }

        echo "\\"; 
        echo "<br>";
        $nbrblanc++;
        $nbrWhite--;
        
        
    }
     for($i = 0 ; $i <= $hauteur ; $i++){
         echo " --";
     }
?>