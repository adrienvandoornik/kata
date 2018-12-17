<!DOCTYPE html>
<html>
<body>

1. Drapeau Americain
<br><br>

<?php
$_5stars = "&nbsp;* * * * * &nbsp;&nbsp;============================<br>";
$_6stars = "* * * * * * ============================<br>";
$_0stars = "====================================<br>";
for ($i = 0; $i < 15; $i++){
    if ($i > 8) {
        echo $_0stars;
    } else {
        if ($i % 2 === 0) {
            echo $_6stars;
        } else {
            echo $_5stars;
        }
    }
}
?>

<br><br>
2. Ecrire un programme qui prends 2 nombres en inputs et affiche le résultat de leur multiplication.
<br><br>

<?php
$first_number = 54;
$second_number = 65;
echo $number_total = $first_number + $second_number
?>

<br><br>
3. Ecrire un programme qui prend deux nombres en entrée et affiche le plus grand des deux: "le nombre le plus grand est 25"
<br><br>

<?php
$a = 25;
$b = 10;
echo max($a, $b);
?>

<br><br>
4. Ecrire un programme qui prend un mot string en entrée et affiche le mot avec les lettres inversées.
<br>Exemple "vache" va affiche "ehcav"
<br><br>

<?php
echo strrev("Vache");
?>
<br><br>
5. Ecrire un programme qui prend une phrase en entrée et compte le nombre d'espaces conttenu dans la phrase et l'affiche.
<br>Exemple "Toto part en bus!" => résultat = 4
<br><br>

<?php
echo ("Toto part en bus !");
echo (" => résultat = ");
echo substr_count("Toto part en bus !"," ");
?>

<br><br>
5. Correction exercice 5
<br><br>

<?php
// compter le nombre d'espace
function spaceCount($string){
    $spaces = 0;
    for($i = 0; $i < strlen($string); $i++){

        if ($string[$i]==" "){
            $spaces++;
        }
    }
    return $spaces;
}

echo spaceCount("Le chocolat c'est bon");


?>

<br><br>
6. Ecrire digital en majuscule
<br><br>

<?php
echo ("Digital = ");
$str = "Digital";
$str = strtoupper($str);
echo $str;

function majuscule ($str){
    $result=" ";
    for($i=0; $i < strlen($str); $i++){
        $result.=strtoupper($str[$i]);
    }
    return $result;
}
echo majuscule("Digital");
?>

<br><br>
7. Ecrire un programme qui prends en entrée 3 mots qui affiche la concaténation de ces 3 mots. Exemple: toto tata titi = tototatatiti
<br><br>

<?php
$a = "toto";
$b = "tata";
$c = "titi";
echo $a.$b.$c;
?>

<br><br>
7. Correction exercice 7
<br><br>

<?php
function concatenation($mot1, $mot2, $mot3){
    return ($mot1.$mot2.$mot3);
}
echo concatenation("titi","tata","toto");
?>

<br><br>
8. Ecrire une fonction qui détermine si un perroquet trouble notre repos ou pas.<br>
Il faut utiliser un booleen parle qui est vrai si le perroquet parle et fait du bruit,<br>
false si le perroquet est silencieux. <br>
Le deuxième paramètre sera un entier entre 0 et 23 qui représente l'heure de la journée.<br>
Perroquet parle entre 22h et 7h du matin il faut afficher le perroquet nous perturbe<br>
S'il ne parle pas ou qu'il parle en dehors de cette horaire le perroquet ne nous dérange pas et on affiche Tout va bien.
<br><br>


<?php
function badperroquet($parle,$heure){
    if($parle == true){
        if($heure > 22 || $heure < 5)
        {
          echo "le perroguet nous perturbe";
        }else{
          echo "tout va bien";
        }
    }
}
badperroquet(true,10);
?>

<br><br>
9. Ecrire une fonction qui va demander à l'utilisateur d'entrer 6 mots l'un après l'autre et va retourner le plus grand mot.
<br><br>

<?php
$mot1 = "qwertzuiop";
$mot2 = "asdfghjkl";
$mot3 = "yxcvbnm";
$mot4 = "1234567890";
$mot5 = "cat";
$mot6 = "qwertzasdfgyxcvbkjhgsaweruztiopljtdsftrefdcmnjhutderwsayxcvbnm";

echo strlen($mot1); // 10 caracteres
echo '<br/>';
echo strlen($mot2); // 9 carateres
echo '<br/>';
echo strlen($mot3); // 7 caracteres
echo '<br/>';
echo strlen($mot4); // 10 caracteres
echo '<br/>';
echo strlen($mot5); // 3 caracteres
echo '<br/>';
echo strlen($mot6); // 62 caracteres
echo '<br/>';
echo "Le mot le plus grand est :" ;
echo '<br/>';
echo '<br/>';

if(strlen($mot1) >= strlen($mot2)){
    //$mot1 est plus grand que $mots2
    echo "qwertzuiop est plus grand que asdfghjkl";
} elseif (strlen($mot1) >= strlen($mot3)){

$string = "Where did the big Elephant go?";
$words  = explode(' ', $string);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
   if (strlen($word) > $longestWordLength) {
      $longestWordLength = strlen($word);
      $longestWord = $word;
   }
}

echo $longestWord;
// Outputs: "Elephant"

//corrigé ex9
$mots = "toto voiture feux dormir jouer suer";
function plusGrandMots($mots){
    // je sépare les mots sur les espaces
    $tabMots = explode(" ", $mots);
    //variable pour stocker le plus grand mot(initialisée avec une taille de 0)
    $plusGrand = "";
    foreach($tabMots as $mots){
        // je récupère la longueur du mot courant
        $longeurMot = strlen($mots);
        // je récupère la longueur du dernier plus grand mot
        $maxLongueur = strlen($plusGrand);
        // si la longueur max est plus petite que lcelle du mot courant
        if($maxLongueur < $longueurMot){
            // le plus grand mot devient mon mot courant
            $plusGrand = $mots;
        }
    }
    return $plusGrand;
}
echo plusGrandMots($mots);

?>

</body>
</html>