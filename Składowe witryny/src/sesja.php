<?php
    session_start();
    if(isset($_SESSION["nazwisko"])) {
        echo $_SESSION["nazwisko"];
    }
?>
