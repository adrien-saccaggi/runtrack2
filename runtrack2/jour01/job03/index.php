<?php
$booleanVar = true; 
$intVar = 50;
$stringVar = "Texte";
$floatVar = 5.30;

$fonctionArray = [
    [1, 2],
    [3, 4],
];

$variables = [
    'booleanVar' => $booleanVar,
    'intVar' => $intVar,
    'stringVar' => $stringVar, 
    'floatVar'  => $floatVar

];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
    </head>
<body>

<table>
    <thead>
        <tr>
            <th> Type des variables</th>
            <th> Nom des variables </th>
            <th> Valeurs </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $name => $value): ?>
            <tr>
            <td><?php echo gettype($value); ?> </td>
            <td><?php echo $name; ?></td>
            <td> 
            <?php if (is_bool($value)) {
                echo $value ? 'true' : 'false'; 
            }
                else { 
                    echo htmlspecialchars((string) $value); 
                }
            ?>
            </td>
            </tr> 
        <?php endforeach; ?>
