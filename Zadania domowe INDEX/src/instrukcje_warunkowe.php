<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Instrukcje warunkowe
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $liczba = 8;
    $liczbaInna = 10;
    $jeszczeInnaLiczba = 7;

    if($liczba < 10):
        echo 'True' . '</br>';
    else:
        echo 'False' . '</br>';
    endif;
   
    if($liczbaInna < 10):
        echo 'Mniejsze niz 10' . '</br>';
    elseif($liczbaInna == 10):
        echo 'Równe do 10' . '</br>';
    else:
        echo 'Musi byc wieksze niz 10' . '</br>';
    endif;

    switch ($jeszczeInnaLiczba) {
        case 7:
            echo "To musi być siedem!";
            break;
        case 8:
            echo "To musi być osiem!";
            break;
        case 9:
            echo "To musi być dziewięć!";
            break;
    }

  ?>
</div>