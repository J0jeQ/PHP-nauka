<?php 
$name = "Janusz";
echo "Imie: $name\n";

$age = 20;
if($age >=18):
echo "Pelnoletni\n";

else:
echo "Osoba niepelnoletnia";
endif;

$tab = ['a','b','c'];
foreach($tab as $taby){
    echo "<br>".$taby;
}



function add($a,$b){
    return $a+$b;
}

echo add(5,4);

$surname = "nowak";
//heardock
echo <<< DATA
    <br>
    Imie:Janusz<br>
    Nazwisko:$surname;
    DATA;

//nowdoc
echo <<< 'DATA'
<br>
Imie:Janusz<br>
Nazwisko:$surname 
DATA;

$name = "Anna";
$surname = "Nowak";


?>