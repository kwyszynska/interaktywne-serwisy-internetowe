<?php
$cookie_name = 'imie';

$cookie_name2 = 'imie2';
$_COOKIE[$cookie_name2] = "wys";

if (!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie "
        . $cookie_name
        . " nie jest ustawione </br>";
} else {
    echo "Ciasteczko o nazwie "
        . $cookie_name
        . " jest ustawione </br>";

    echo "Wartosc: " . $_COOKIE[$cookie_name] . "</br>";
}


if (!isset($_COOKIE[$cookie_name2])) {
    echo "Ciasteczko o nazwie "
        . $cookie_name2
        . " nie jest ustawione </br>";
} else {
    echo "Ciasteczko o nazwie "
        . $cookie_name2
        . " jest ustawione </br>";

    echo "Wartosc: " . $_COOKIE[$cookie_name2];
}
