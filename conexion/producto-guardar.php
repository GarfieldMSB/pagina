<?php

include('conexion.php');

$id = $_POST['id-producto'];
$nombre = $_POST['nombre-producto'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion-producto'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO productos(id, nombre, categoria, imagen, descripcion) VALUES($id, '$nombre', '$categoria', '$imagen', '$descripcion')";
$resultado = $conexion->query($query);

if($resultado){
    echo "Si se insertó";
}
else{
    echo 'No se insertó';
}
mysqli_close($conexion);

?>