<?php
header('Location: http://localhost:8089/');

if ($_POST['zatwierdz7']) {
    $cookie_value = $_POST['imie'];
    setcookie('imie', $cookie_value, time() + (86400 * 30), "/");
}
?>