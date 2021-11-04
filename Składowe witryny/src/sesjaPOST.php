<?php
header('Location: http://localhost:8089/');



if ($_POST['zatwierdz9']) {
    session_start();
  $_SESSION['nazwisko'] = $_POST['nazwisko'];
}

?>