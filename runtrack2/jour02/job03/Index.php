<?php
for ($i=0; $i<101; $i++){
    if($i > 0 and $i < 20){
    echo '<i>' . $i . '</i><br>';
        
    }elseif($i > 25 and $i < 50 and $i != 42){
        echo '<u>' . $i . '</u><br>';
        
    }
    elseif($i == 42){
        echo 'LaPlateforme<br>';
    }
    else{
        echo $i . '<br>';
    }
};
?>
