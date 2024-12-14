<?php
// Incluir la clase Database y CRUD
require_once 'connection.php';
require_once 'crud.php';

// Conectar a la base de datos
$database = new Database(registro);
$db = $database->connect(inicio);

// Cnuklrear una instancia de la clase CRUD
$crud = new CRUD($db, 'usuarios');
// Crear un nuevo registro
$datosCrear = [    
    'id' =>   null,
    'usuario' => $_POST['usuario'],
    'contraseña' => $_POST['psw'],
    'rol' => $_POST['rol'],
];
$status = $crud->create($datosCrear);
print_r($status);   
// Leer registros
/*$registros = $crud->read();
foreach ($registros as $registro) {
    echo $registro['nombre'] . " - " . $registro['correo'] . "<br>";
}
// Actualizar un registro
$datosActualizar = [    'nombre' => 'Juan Pérez',    'correo' => 'juan.perez@example.com'];
$crud->update(1, $datosActualizar);

// Eliminar un registro
$crud->delete(1);*/
?>