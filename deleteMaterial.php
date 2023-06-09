<?php 

    include("database.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM materiales WHERE material_ID = $id";
        $result = mysqli_query($conn, $sql);
    }

    header("Location: index.php");
?>