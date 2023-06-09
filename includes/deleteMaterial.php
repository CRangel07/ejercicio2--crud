<?php

include("database.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $comprobar = "SELECT material_stock FROM materiales WHERE material_ID = $id;";
    $count = mysqli_query($conn, $comprobar);

    if (mysqli_num_rows($count) == 1) {
        $row = mysqli_fetch_array($count);
        $stock = $row['material_stock'];
        if ($stock >= 1) {
            header("Location: ../index.php");
        } else {
            $sql = "DELETE FROM materiales WHERE material_ID = $id";
            $result = mysqli_query($conn, $sql);
            header("Location: ../index.php");
        }
    }
}
