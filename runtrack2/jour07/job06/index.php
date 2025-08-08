<?php
function leetSpeak($str)//la fonction prend une chaine de caractères qui est $str
{
    $ausecours = "";//je fais une variable $ausecours qui est vide

    $tableau = array(//je fais le tableau qui fais devenir les lettre en leur equivalent en leet
        "A" => "4",//A deviens 4
        "B" => "8",
        "E" => "3",
        "G" => "6",
        "L" => "1",
        "S" => "5",
        "T" => "7",
        "a" => "4",
        "b" => "8",
        "e" => "3",
        "g" => "6",
        "l" => "1",
        "s" => "5",
        "t" => "7",
    );
    for ($i = 0; isset($str[$i]); $i++) { // je fais une boucle for qui parcours tout les caractères de la chaine $str
        $bool = false;//je fais ma variable bool et je lui assigne la valeur false

        //pour chaque caractere il parcourt le tableau si le caractère est dans le tableau alors il se fais remplacer par sa version leet
        foreach ($tableau as $key => $value) {
            if ($str[$i] == $key) {
                $ausecours = $ausecours . $tableau[$key];
                $bool = true;
            }

        }

        //Si ce n'est pas une lettre du tableau alors 
        if ($bool != true) {
            $ausecours = $ausecours . $str[$i];
        }
    }
    return $ausecours;
}
echo leetSpeak("Salut la france");
?>