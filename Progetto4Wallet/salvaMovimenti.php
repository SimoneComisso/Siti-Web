<?php

    $file_salvataggio = fopen("movimenti.txt", "a");

    $testo_da_salvare = $_POST["nuovaData"].";".$_POST["nuovoMotivo"].";".$_POST["nuovoImporto"]."\n";  

    fwrite($file_salvataggio, $testo_da_salvare);


    fclose($file_salvataggio);

?>