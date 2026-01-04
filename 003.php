<?php

$texto = "PHP no está muerto... solo sigue trabajando silenciosamente en el 80% de Internet";

//Pasar a minusculas
$texto_min = strtolower($texto);

//Contar las palabras
$limpio = preg_replace('/[^\p{L}\p{N}\s]+/u', '', $texto_min);
$palabras = explode(' ', $limpio);
$num_palabras = count($palabras);

//Contar la repetición de una palabra (ignorando aquellas con menos de 3 letras)
$palabras_largas = array_filter($palabras, function($p){
    return strlen($p) >= 3;
});
$rep_palabras = array_count_values($palabras_largas);

//Mostrar la palabra más repetida
$max_veces = 0;
$mas_repetida = '';
foreach($rep_palabras as $palabra => $veces){
    if($veces > $max_veces && $palabra !==''){
        $max_veces = $veces;
        $mas_repetida = $palabra;
    }
}

echo "<strong>Texto original:</strong><br>".$texto.".<br><br>";
echo "<strong>Texto en minusculas:</strong><br>".$texto_min.".<br><br>";
echo "<strong>Numero de palabras:</strong><br>".$num_palabras." palabras.<br><br>";
echo "<strong>Palabras que aparecen mas de una vez y tienen más de 3 letras:</strong><br>";

foreach($rep_palabras as $palabra => $veces){
    if($veces >= 1 && $palabra !== ''){
        echo "La palabra *".$palabra."* aparece este numero de veces: ".$veces.".<br>";
    }
}
$cont_palabra = 0;
$i = false;
$a = false;
foreach($rep_palabras as $palabra => $veces){
    if($veces > 1 && $palabra !== ''){
        $i = true;
        echo "<br><strong>La/s palabra/s que se repite/n mas de 1 vez es/son:</strong> *".$palabra."*.<br>";
    }
    $cont_palabra ++;

    if($cont_palabra == count($palabras_largas) && $i == false){
        echo "<br><strong>No hay ninguna palabra que se repita mas de una vez.</strong><br>";
        $a = true;
    }
}

if ($a == false){
    echo "<br><strong>La plabra mas repetida es:</strong> *".$mas_repetida."* con ".$max_veces." apariciones.";
}


