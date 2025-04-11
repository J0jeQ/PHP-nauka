<?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

function validateEmail($email){
return filter_var($email,FILTER_VALIDATE_EMAIL);

}
function validatePhone($phone){
return preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/',$phone);
}
function isAdult($birthdate){
    $birth = new DateTime($birthdate);
    $today = new DateTime();
    $age = $today->diff($birth)->y;
    return $age >=18;
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
$name = htmlspecialchars(trim($_GET['name'])); 
$email = htmlspecialchars(trim($_GET['email'])); 
$phone = htmlspecialchars(trim($_GET['phone']));
$birthdate = htmlspecialchars($_GET['birthdate']);
$subject = htmlspecialchars(trim($_GET['subject']));
$contact = htmlspecialchars(trim($_GET['contact-preference']));
$message = htmlspecialchars(trim($_GET['message']));


$errors = [];

if(!isAdult($birthdate)){
    $errors[]= "Musisz miec co najmniej 18 lat";
}
if(!validateEmail($email)){
    $errors[] = "Niepoprawny format adresu e-mail";

}
if(!validatePhone($phone)){
    $errors[] = "Niepoprawny format telefonu";
}


if(empty($message)){
    $errors[] = "Wiadomosc nie moze byc pusta";
}

if(count($errors)){
    echo "<h2>Wystapily bledy</h2>";
    foreach($errors as $error){
        echo "<p>$error</p>";
    }
}
else{
echo <<< DATA
<h2>Dane pobrane z formularza:</h2>
<p><strong>Imie:<?strong>$name</p>
<p><strong>Email:<?strong>$email</p>
<p><strong>Telefon:<?strong>$phone</p>
<p><strong>Temat:<?strong>$subject</p>
<p><strong>Preferencje:<?strong>$contact</p>
<p><strong>Wiadomosc:<?strong>$message</p>


DATA;

}

}
else{
    echo "Formularz nie zostal wyslany poprawnie";
    echo '<br><a href="form.html">Wroc do formularza</a>';
}

// echo"php";
// var_dump($_GET);


// echo "<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

