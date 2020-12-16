<?php

// PHP Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

// leggo i parametri GET
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// verifico che name sia più lungo di 3 caratteri
$name_ok = check_name($name);
// $name_ok = (strlen($name) > 3);

// verifico che mail contenga un punto e una chiocciola
$mail_ok = check_email($mail);
// $mail_ok = (strpos($mail, '.') !== false && strpos($mail, '@') !== false);

// verifico che age sia un numero
$age_ok = check_age($age);
// $age_ok = (is_numeric($age) && $age > 0);

function check_name($input_name) {
    return strlen($input_name) > 3;
}

function check_email($input_email) {
    return (strpos($input_email, '.') !== false && strpos($input_email, '@') !== false);
}

function check_age($input_age) {
    return (is_numeric($input_age) && $input_age > 0 && $input_age < 120);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 2</title>
    </head>
    <body>
        <h1>
            <?php
            // verifico che tutti i controlli siano stati superati
            if($name_ok && $mail_ok && $age_ok) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
            ?>
        </h1>
    </body>
</html>
