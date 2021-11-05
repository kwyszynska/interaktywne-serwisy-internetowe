<?php
$wartoscZapytania = $_POST['wartosci'];
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'phpdb';

$connect = new mySQLi($hostname, $username, $password, $databasename);
$query1 = "INSERT INTO wartosci (wartosci) VALUE ('" . $wartoscZapytania . "')";

$rezultat = $connect -> query($query1);
echo $rezultat;


header("Location: " . $_SERVER['HTTP_REFERER']);

?>