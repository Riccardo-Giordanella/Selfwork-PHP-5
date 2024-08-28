<?php

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$conteggioPari = 0;
$sommaPari = 0;


// Controllo se il numero è pari e lo aggiungo alla variabile d'appoggio, inoltre incremento il conteggio che mi servirà per calcolarmi successivamente la media

foreach($numeri as $numero){
    if($numero % 2 == 0){
        $sommaPari += $numero;
        $conteggioPari++;
    }
}

// Calcolo la media

if ($conteggioPari > 0) {
    $mediaPari = $sommaPari / $conteggioPari;
    echo "La media dei numeri pari è: " . $mediaPari;
} else {
    echo "Non ci sono numeri pari nell'array.";
}


?>