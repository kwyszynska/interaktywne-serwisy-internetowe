<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tekst
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
        $tekst = "Programowanie w PHP";
        echo strlen ($tekst) . "</br>";

        $zleSformatowyTekst = "Programowanie w PhP";
        echo strtolower ($zleSformatowyTekst) . "</br>";

        $zleSformatowyTekst = "Programowanie w PhP";
        echo strtoupper ($zleSformatowyTekst) . "</br>". "</br>";

        $krotkiTekst = "kasztan";
        echo str_repeat($krotkiTekst, 5). "</br>". "</br>";

        $innyTekst = "dziobak";
        echo str_repeat($innyTekst, 15). "</br>". "</br>";

        $tekstDoOdworcenia = "tekst";
        echo strrev ($tekstDoOdworcenia) . "</br>";

        $tekstDoMieszania = "Tekst do pomieszania";
        echo str_shuffle ($tekstDoMieszania) . "</br>";

        $tekstDoWybrania = "Pierwsza czesc, druga czesc";
        echo substr($tekstDoWybrania,16,20). "</br>". "</br>";

        $tekstDoZamiany = "cytryna";
        echo str_replace( "cytryna", "kiwi",$tekstDoZamiany). "</br>";

        $dlugiTekst = "To jest bardzo  straszliwie, niesłychanie, niespotykanie, mocno, niezmiernie, nieprzeciętnie, nader, ogromnie, strasznie, okropnie, nieprawdopodobnie, niezwykle, przeogromnie, niemiłosiernie, szalenie, nadzwyczajnie, wielce, pioruńsko, niewiarygodnie, wyjątkowo, nad podziw, nieprzytomnie, nad wyraz, niesamowicie, okrutnie, niebywale, potwornie długi tekst. ";
        echo wordwrap($dlugiTekst, 30, "</br>");

  ?>
</div>