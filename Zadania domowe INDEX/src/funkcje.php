<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    //zad2
        function pierwszaFunkcja() {
            echo "Wiadomosc z pierwszej funkcji";
          }
          pierwszaFunkcja() . '<br>';

    //zad3
          function funkcjaZArgumentami($imie, $nazwisko = "Nowak") {
          echo '<br>' . "Hello " . $imie . $nazwisko; 
          }
         
          funkcjaZArgumentami("Jan ");
          funkcjaZArgumentami("Mateusz ", "NieNowak");

    //zad4
    function funkcjaZNieznanaLiczbaArgumentow() {
    $val = "";
    $count = func_num_args();
    $tab = func_get_args();
    for($i = 0; $i < $count; $i++){
        echo 'arg ' . ($i+1) . ': ' . $tab[$i] . " ";
      }
    
    }
    echo '</br>';
    funkcjaZNieznanaLiczbaArgumentow("cytryny ", "kamienie");
    echo '</br>';
    funkcjaZNieznanaLiczbaArgumentow("kwiatki ", "NieKwiatki");
    echo '</br>';

    // zad5
    function funkcjaZReferencja(&$imie) {
        $imie = 'imie';
          }
        $imieDoReferencji = "imie zmienione";
        echo $imieDoReferencji . "poprzez referencje do zmiennej";
      
       
        funkcjaZReferencja($imieDoReferencji);
       


  ?>
</div>