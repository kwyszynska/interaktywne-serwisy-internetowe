<?php

$cookie_name = 'imie';
$_COOKIE[$cookie_name] = "";



if (!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie "
        . $cookie_name
        . " nie jest ustawione </br>";
} else {
    echo "Ciasteczko o nazwie "
        . $cookie_name
        . " jest ustawione </br>";

    echo "Wartosc: " . $_COOKIE[$cookie_name];
}
?>
