<?php

//https://stackoverflow.com/questions/5299471/php-parsing-a-txt-file
//$path = "C:\\Users\\belia\\OneDrive\\Documents\\Battle-Dev\\BattleDev-vscode\\exercices"
        . "\\BattleDev S11 - Mars 2018\\Exercice 1 - Le meilleur restaurant\\";

$input1 = file_get_contents('input1.txt');
$input2 = file_get_contents('input2.txt');
$input3 = file_get_contents('input3.txt');

echo "\n";

$rows1 = explode("\n", $input1);
$rows2 = explode("\n", $input2);
$rows3 = explode("\n", $input3);

$noteInput1 = [];
$noteInput2 = [];
$noteInput3 = [];
//var_dump($rows1);

echo "Restaurant 1 : \n";

for($i = 1; $i < sizeof($rows1); $i++) {
    $note = explode(" ", $rows1[$i]);
    $resultat = ($note[0] + $note[1] + $note[2]) / 3;
    array_push($noteInput1, $resultat);
}

echo "Meilleur resto 1 : ".ceil(max($noteInput1));
echo "\n";
echo "Restaurant 2 : \n";


for($i = 1; $i < sizeof($rows2); $i++) {
    $note = explode(" ", $rows2[$i]);
    $resultat = ($note[0] + $note[1] + $note[2]) / 3;
    array_push($noteInput2, $resultat);
}

echo "Meilleur resto 2 : ".ceil(max($noteInput2));

echo "\n";
echo "Restaurant 3 : \n";


for($i = 1; $i < sizeof($rows3); $i++) {
    $note = explode(" ", $rows3[$i]);
    $resultat = ($note[0] + $note[1] + $note[2]) / 3;
    array_push($noteInput3, $resultat);
}

echo "Meilleur resto 3 : ".ceil(max($noteInput3));