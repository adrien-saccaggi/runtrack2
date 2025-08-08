<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = "aeiouyO";

$dic = [
    'voyelles' => 0,
    'consonnes' => 0
];
for ($i=0; $i < 66; $i++) { 
    $char = $str[$i];

    if(!(($char >= "a") and ($char <= "z") or ($char >= "A") and ($char <= "Z"))){
        continue;
    }
    $isVoyelle = false;
    for ($j=0; $j < 7 ; $j++) { 
        if ($char == $voyelles[$j]) {
            $isVoyelle = true;
            break;
        }
    }
    if($isVoyelle){
        $dic["voyelles"]++;
    }
    else{
        $dic["consonnes"]++;
    }

    
}
?>

<html>
<table border>
 <thead>
    <tr>
      <th>voyelles</th>
      <th>consonnes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($dic as $key => $value) { ?>
    
      <td><?php echo htmlspecialchars($value) ?> </td>
    
    <?php } ?>
    </tr>
  </tbody>
</table>
</html>