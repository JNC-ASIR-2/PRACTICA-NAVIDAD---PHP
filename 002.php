<?php
$carrito =[
    ["producto" => "Portatil","precio"=>1200, "cantidad"=>1],
    ["producto" => "Raton","precio"=>25, "cantidad"=>2],
    ["producto" => "Teclado","precio"=>45, "cantidad"=>1],
];

//Funcion Calcular total
function calcularTotal($carrito){
    $totalcuenta = 0;
    foreach($carrito as $producto){
        $subtotal =$producto["precio"]*$producto["cantidad"];
        $totalcuenta += $subtotal;

        echo "<u>Producto</u>: "  .$producto["producto"]." ---- ";
        echo "<u>Precio del producto</u>: " .$producto["precio"]."$ ---- ";
        echo "<u>Cantidad de producto</u>: " .$producto["cantidad"]." --- ";
        echo "Precio total {$subtotal}$<br><br>";
                
    }

    $descuento = 0;

    if($totalcuenta>1000){
        $descuento = $totalcuenta*0.1;
        
    }else if($totalcuenta>500){
        $descuento = $totalcuenta*0.05;
    }

    echo "Total de la cuenta SIN descuento: ".$totalcuenta."$<br>";
    echo "Descuento aplicado: -".$descuento."$<br><br>";
    echo "<strong>Total final: ".($totalcuenta-$descuento)."$</storng>";
}

echo "<strong>CARRITO DE LA COMPRA</strong><br><br>";
echo calcularTotal($carrito);