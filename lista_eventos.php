<?php
include "conexion.php";

$registos=$conn->prepare("select * from mis_eventos");
$registos->execute();

$lista_eventos = $registos->get_result();

$eventos_json = [];

while($evento = $lista_eventos->fetch_assoc())
{
  $eventos_json [] = [
    'id'=>$evento['id'],
    'title'=>$evento['titulo'],
    'color'=>$evento['color'],
    'start'=>$evento['inicio'],
    'end'=>$evento['fin']
  ];
}

echo json_encode($eventos_json);
?>