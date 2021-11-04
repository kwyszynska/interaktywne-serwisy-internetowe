<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Operatory
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $pierwszaLiczba = 20;
    $drugaLiczba = 10;

    echo 'Pierwsza liczba: ' . $pierwszaLiczba . '</br>';
    echo 'Druga liczba: ' . $drugaLiczba . '</br></br>';

    echo "Dodawanie: " . $pierwszaLiczba + $drugaLiczba . '</br>';
    echo "Odejmowanie: " . $pierwszaLiczba - $drugaLiczba . '</br>';
    echo "Mnożenie: " . $pierwszaLiczba * $drugaLiczba . '</br>';
    echo "Dzielenie: " . $pierwszaLiczba / $drugaLiczba . '</br>';

    echo 'Dzielenie przez zero: (odkomentować!)' . '</br>';
    // echo $pierwszaLiczba / 0;
  ?>
</div>