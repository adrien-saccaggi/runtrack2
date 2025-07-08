<?php
$val = 1234;
echo gettype($mybool);
echo $mybool ." ". $val;

echo "
<table>
 <thead>
    <tr>
      <th>type</th>
      <th>nom</th>
      <th>valeur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>boolean</td>
      <td>mybool</td>
      <td>true</td>
    </tr>
    <tr>
      <td>type</td>
      <td>gettype</td>
      <td>mybool</td>
    </tr>
    <tr>
      <td>entier</td>
      <td>val</td>
      <td>1234</td>
    </tr>
  </tbody>
</table>";
?>