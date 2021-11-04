<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tablice
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
        $tablica= ["pierwszy", "drugi", "czwarty"];
        echo $tablica[2] . "</br>";

        foreach ($tablica as $klucz){
            echo ("$klucz </br>");
        }

        print_r($tablica); 
        echo "</br>". "</br>";

        echo count($tablica) . "</br>". "</br>";

        $nowaTablica = ["klucz1" => "wartosc1", "klucz2" => "wartosc2"];
        echo $nowaTablica["klucz2"]. "</br>";
        $nowaTablica["klucz2"] = "wartosc2b";
        echo $nowaTablica["klucz2"]. "</br>";

        print_r(array_reverse($nowaTablica)); 
        echo "</br>". "</br>";


        function sprawdzCzyJest($wartoscSzukana, $tablica) {
            if (array_key_exists($wartoscSzukana, $tablica)) {
              echo "Jest" . "</br>";
            }
            else {
              echo "Nie ma" . "</br>";
            }
          };

        sprawdzCzyJest("1",$tablica);
        sprawdzCzyJest("3",$tablica);
        echo "</br>";

        $imiona = ['Jan', 'Monika', 'Dominik', 'Patryk'];
        natcasesort($imiona);
        print_r($imiona);

        $tablicaLiczbowa = [1, 2, 4, 9, 8, 7, 6];
        rsort($tablicaLiczbowa);
        print_r($tablicaLiczbowa);
        echo "</br>";
        shuffle($tablicaLiczbowa);
        print_r($tablicaLiczbowa);
        echo "</br>"."</br>";

        $owoce = ['a' => 'ananas', 'b' => 'banan', 'c' => 'cytryna'];
        $warzywa = ['m' => 'marchew', 'z' => 'ziemniak'];
        print_r(array_merge($owoce, $warzywa));
        echo "</br>"."</br>";

        $male = ['wszytkie', 'te', 'slowa', 'sa', 'wielkimi', 'literami'];
        $duze = array_map('strtoupper', $male);
        print_r($duze);
        echo "</br>"."</br>";

    





  ?>
</div>