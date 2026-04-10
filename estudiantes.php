<?php
//datos
$nombre = "Isabella Estrada";
$edad = 17;
$notas = [85, 91, 82];
$imagen="file:///C:/Users/computacion/Desktop/sofia.jpg";


function mensajeSistema() 
{
    return "registro de estudiante";
}


function CalcularPromedio($notas){
$suma - 0;
Scantidad = 0;
foreach($notas as $nota){
Ssuma += $nota;
Scantidad++;
return $suma / Scantidad; 

if (isset($nombre) && isset($edad)) {

    $nombreSeguro = htmlspecialchars($nombre);
    $nombreURL = urlencode($nombre);

    $promedio = calcularPromedio($notas);

     $datosIndexados = [$nombreSeguro, $edad, $promedio];
      $estudiante = [
        "Nombre" => $nombreSeguro,
        "Edad" => $edad,
        "Promedio" => $promedio,
        "Imagen" => $imagen
    ];
 
      unset($datosIndexados[1]); // elimina edad del arreglo indexado
}
?>


 