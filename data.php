<?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
$name = htmlspecialchars($_GET['name']); 
$email = htmlspecialchars($_GET['email']); 
$message = htmlspecialchars($_GET['message']); 

echo <<< DATA
<h2>Dane pobrane z formularza:</h2>
<p><strong>Imie:<?strong>$name</p>
<p><strong>Email:<?strong>$email</p>
<p><strong>Wiadomosc:<?strong>$message</p>

DATA;
}
else{
    echo "Formularz nie zostal wyslany poprawnie";
    echo '<br><a href="form.html">Wroc do formularza</a>';
}






/*
echo"php";
var_dump($_GET);
echo "<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
*/
