
<?php
function occurrences($str, $char)
{
    $compteur = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $char) {
            $compteur++;
        }
    }
    return $compteur;
}
echo "il y a ";
echo occurrences("bonjour", "o");
echo " fois o dans bonjour";
?>