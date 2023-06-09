<?php 

    include("database.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM materiales WHERE material_ID = $id";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['material_nombre'];
            $unidad = $row['material_unidad'];
            $precio = $row['material_precio'];
            $stock = $row['material_stock'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = strtoupper($_POST['nombre']);
        $unidad = strtoupper($_POST['um']);
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $sql = "UPDATE materiales SET material_nombre = '$nombre', material_unidad = '$unidad', material_precio = $precio, material_stock = $stock WHERE material_ID = $id;";
        echo $sql;
        mysqli_query($conn, $sql);
        header("Location: index.php");
    }
    
?>

<?php include("header.php");?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editMaterial.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" placeholder="Actualizar Nombre">
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="text" name="um" id="um" value="<?php echo $unidad;?>" placeholder="Actualizar unidad de medida">
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="number" name="precio" id="nombre" value="<?php echo $precio;?>" placeholder="Actualizar precio">
                    </div> 
                    <div class="form-group">
                        <input class="form-control" type="number" name="stock" id="nombre" value="<?php echo $stock;?>" placeholder="Actualizar cantidad en stock">
                    </div> 
                    <button class="btn btn-primary" name="update">
                        Actualizar informacion
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php");?>