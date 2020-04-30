<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$usuarios = [[
    "Genero" => "Masculino",
    "Nombres" => "John Jairo",
    "Apellidos" => "Díaz Torres",
    "Identificación" => "72213456",
    "Edad" => 45,
    "RH" => "A+",
    "Dirección" => "Modelo - Barranquilla",
    "Teléfono" => 3005668795
],

[
    "Genero" => "Femenino",
    "Nombres" => "Lucy María",
    "Apellidos" => "Hernández Hernández",
    "Identificación" => "33222659",
    "Edad" => 33,
    "RH" => "O+",
    "Dirección" => "13 de Junio - Cartagena",
    "Teléfono" => 3005678985
],

[
    "Genero" => "Masculino",
    "Nombres" => "Samuel Adolfo",
    "Apellidos" => "Díaz S.",
    "Identificación" => "10223659874",
    "Edad" => 14,
    "RH" => "O+",
    "Dirección" => "Modelia - Bogotá",
    "Teléfono" => 3005678999
],

[
    "Genero" => "Femenino",
    "Nombres" => "Sarainel Adriana",
    "Apellidos" => "Díaz S.",
    "Identificación" => "10363659874",
    "Edad" => 12,
    "RH" => "A+",
    "Dirección" => "Capellanía - Bogotá",
    "Teléfono" => 3005678777
],
[
    "Genero" => "Femenino",
    "Nombres" => "Nellys",
    "Apellidos" => "Torres T",
    "Identificación" => "AC59874",
    "Edad" => 65,
    "RH" => "O-",
    "Dirección" => "Turbaco - Bolívar",
    "Teléfono" => 3002578777
],
[
    "Genero" => "Masculino",
    "Nombres" => "Antonio",
    "Apellidos" => " Díaz Torres",
    "Identificación" => "AB2359874",
    "Edad" => 40,
    "RH" => "O+",
    "Dirección" => "Turbaco - Bolívar",
    "Teléfono" => 3002898777
],

[
    "Genero" => "Masculino",
    "Nombres" => "Andrés",
    "Apellidos" => " Pérez P.",
    "Identificación" => "2345765",
    "Edad" => 73,
    "RH" => "A+",
    "Dirección" => "Santa María - Cartagena",
    "Teléfono" => 3012895777
],














];

$json= json_encode($usuarios);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $usuarios = ["message"=>"Metodo $method no permitido" ];
    $json= json_encode($usuarios);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>