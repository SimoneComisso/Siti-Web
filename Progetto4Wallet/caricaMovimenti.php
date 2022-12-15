<?php

$fileMovimenti = fopen("movimenti.txt","r");
if($fileMovimenti){
    $risposta = "";
    while(($linea = fgets($fileMovimenti)) !== false){
        $risposta = $risposta.$linea;
    }

    echo $risposta;

    fclose($fileMovimenti);

}

?>