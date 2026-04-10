<?php
function CalcularPromedio($notas){
    $suma = 0;
    $cantidad = count($notas);

    foreach($notas as $nota){
        $suma += $nota;
    }

    return $cantidad > 0 ? $suma / $cantidad : 0;
}

function AumentoEdad($edad, $años){
    return $edad + $años;
}

$nombre = "Isabella Estrada";
$edad = 17;
$notas = [82, 90, 93, 86];
$imagen = "file:///C:/Users/estro/Downloads/foto.jpg";

$nombreSeguro = htmlspecialchars($nombre);
$promedio = CalcularPromedio($notas);
$edadFutura = AumentoEdad($edad, 5);

unset($notas[2]);

$estudiante = [
    "nombre" => $nombreSeguro,
    "edad" => $edad,
    "promedio" => $promedio,
    "edadFutura" => $edadFutura,
    "imagen" => $imagen
];
?>