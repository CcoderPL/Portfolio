<?php

$do = 'pawel.molek@gmail.com'; //tutaj wpisujesz swój adres e-mail
$email = $_POST['email']; //pobieranie danych o e-mailu nadawcy
$wiadomosc = $_POST['wiadomosc']; //pobieranie wiadomości
$temat = $_POST['temat']; //pobieranie tematu
//w $header tworzymy nagłówek e-mail (dane o kodowaniu, gdzie ma być e-mail wysłany itp.
$header = "From: $email \nContent-Type:".
            ' text/plain;charset="UTF-8"'.
            "\nContent-Transfer-Encoding: 8bit";
    if (mail($do, $temat, $wiadomosc, $header))
        {
        echo ('E-mail został wyslany!'); //jeżeli e-mail się wyśle, pokazywanie tego komunikatu
        }
    else
    {
        echo ('Blad podczas wysylania e-maila!');
        }

?>
