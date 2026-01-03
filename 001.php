<?php
//Estudiantes y notas
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

$contAprobados = 0;
$contSuspensos = 0;
$mayorpromedio = '';
$i = 0;

//Salida por pantalla
foreach($estudiantes as $estudiante => $notas){
    $promedio=calcularPromedio($estudiantes[$estudiante]);

    if($promedio>$i){
        $mayorpromedio=$estudiante;
        $i=$promedio;
    }

    echo "Nomre: ".$estudiante."<br>";
    echo "Promedio: ".$promedio."<br>";
    
    if($promedio>=6){ 
        echo "Aprobado<br><br>";
        $contAprobados++;
    }else{
        echo "Suspenso<br><br>";
        $contSuspensos++;
    }
}

echo "Aprobados: ".$contAprobados."<br>";
echo "Suspensos: ".$contSuspensos."<br><br>";

echo "El estudiante con mayor promedio en este curso academico ha sido (redoble de tambores...) ".$mayorpromedio.".";

//Funcion Calcular promedio
function calcularPromedio($notas){
    $division = count($notas);
    $sumaNotas = 0;
    foreach ($notas as $nota){
        $sumaNotas += $nota;
    }

    $promedio = $sumaNotas/$division;
    return $promedio;
}