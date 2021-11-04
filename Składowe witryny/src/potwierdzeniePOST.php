<?php
echo $_POST["imie"]."</br>";
  echo $_REQUEST["nazwisko"]."</br>";
  echo $_POST["mail"]."</br>";
  echo $_REQUEST["zatwierdź"]."</br>";


 session_start();
    $_SESSION["nazwisko"] = $_REQUEST["nazwisko"];
?>