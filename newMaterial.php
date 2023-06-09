<?php 

include("database.php");

if(isset($_POST['agregar_material'])){
    $nombre = $_POST['nombre'];
    $unidad = $_POST['um'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO materiales (material_nombre, material_unidad, material_precio, material_stock) VALUES (\"$nombre\", \"$unidad\", $precio, $stock);";

    echo $sql;
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die('Query Failed');
    }

    $_SESSION['message'] = 'Material agregado correctamente';

    header("Location: index.php");

}
