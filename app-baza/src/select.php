<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'phpdb';

$connect = new mySQLi($hostname, $username, $password, $databasename);

$query2 = "SELECT * FROM wartosci";

$rezultat = $connect -> query($query2);

if ($rezultat){
    while ($wiersz = $rezultat -> fetch_assoc()){
        echo $wiersz['wartosci'] . "</br>";
    }
}

?>