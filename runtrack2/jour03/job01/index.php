<?php
  $nombres = [200, 202 , 173, 98, 171, 404, 459]; //je nome tout mes nombres dans un tabeau []=tableau//
  foreach($nombres as $l){//$nombres deviens $l//
    if($l % 2 == 0){//si le reste de $l est 0 quand il est divisé par 2(pour les nombres pairs)//
        echo $l . " est pair<br>";//il echo $l avec  est pair et il reviens a la ligne//
    }
    else{
        echo $l . " est impair<br>";//sinon il echo $l avec impair et il reviens a la ligne//
    }
  }
    
    
    
    //ancien code//
    // $i = array
    //     ("<br>200" => "est paire<br>", "202" => "est paire<br>", "173" => "est impaire<br>", "98" => "est paire<br>", "171" => "est impaire<br>","404" => "est paire<br>","459" => "est impaire<br>");
    // print_r($i);
?>