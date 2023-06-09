<?php include("database.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="./index.php" class="navbar-brand">CRUD</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" id="btn-agregar">Agregar Nuevo</button>
            </div>
            <div class="col-12 col-xl-9 col-sm-7">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Ingresa el nombre de un material" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>


    <div class="material">

        <form action="newMaterial.php" method="POST" class="add-material bg-dark">
            <div class="entrada">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="entrada">
                <label for="nombre">Unidad de Medida</label>
                <input type="text" name="um" id="um" required>
            </div>
            <div class="entrada">
                <label for="nombre">Precio</label>
                <input type="number" name="precio" id="precio" required>
            </div>
            <div class="entrada">
                <label for="nombre">Stock</label>
                <input type="number" name="stock" id="stock" required>
            </div>

            <div class="botones">
                <input class="boton-crear" type="submit" name="agregar_material" value="Crear">
                <button class="boton-cerrar">Cerrar</button>
            </div>

        </form>
    </div>

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Unidad de medida</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM materiales';
                $results_materials = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($results_materials)){ ?>
                    <tr>
                        <td><?php echo $row['material_nombre'];?></td>
                        <td><?php echo $row['material_unidad'];?></td>
                        <td><?php echo $row['material_precio'];?></td>
                        <td><?php echo $row['material_stock'];?></td>
                        <td><?php echo $row['material_total'];?></td>
                    </tr>

                <?php }

                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
</body>

</html>