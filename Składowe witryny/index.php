<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Składowe witryny</title>
</head>

<body>


    <form method="get" action="src/potwierdzenieGET.php">
        <div>
            Metoda GET
        </div>
        <div>
            <label for="imie">
                Imię
            </label>
            <input name="imie">
        </div>
        <div>
            <label for="nazwisko">
                Nazwisko
            </label>
            <input name="nazwisko">
        </div>
        <div>
            <label for="mail">
                Mail
            </label>
            <input name="mail">
        </div>
        <button type="submit" name="zatwierdź" value="wartość zatwierdzona">
            Wyślij
        </button>
    </form>


    <form method="POST" action="src/potwierdzeniePOST.php">
        <div>
            metoda POST
        </div>
        <div>
            <label for="imie">
                Imię
            </label>
            <input name="imie">
        </div>
        <div>
            <label for="nazwisko">
                Nazwisko
            </label>
            <input name="nazwisko">
        </div>
        <div>
            <label for="mail">
                Mail
            </label>
            <input name="mail">
        </div>
        <button type="submit" name="zatwierdź" value="wartość zatwierdzona">
            Wyślij
        </button>
    </form>

    <?php
    include 'src/ciasteczko.php';
    include 'src/sesja.php';
    ?>


    <form method="POST" action="src/ciasteczkoPOST.php">
        <div>
            zad7
        </div>
        <div>
            <label for="imie">
                Imię
            </label>
            <input name="imie">
        </div>

        <button type="submit" name="zatwierdź" value="wartość zatwierdzona">
            Wyślij
        </button>
    </form>

    <form method="POST" action="src/sesjaPOST.php">
        <div>
            zad9
        </div>
        <div>
            <label for="nazwisko">
                Nazwisko
            </label>
            <input name="nazwisko">
            <button type="submit" name="zatwierdź" value="wartość zatwierdzona">
                Wyślij
            </button>
    </form>


</body>

</html>