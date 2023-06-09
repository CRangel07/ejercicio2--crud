<?php include("database.php") ?>


<?php include("header.php") ?>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="./index.php" class="navbar-brand">CRUD - Materiales de Construccion</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" id="btn-agregar">Agregar Nuevo</button>
            </div>
            <div class="col-12 col-xl-9 col-sm-7">
                <form class="d-flex" role="search" action="index.php" method="POST">
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
                <input type="text" name="nombre" id="nombre" autocomplete="off" required>
            </div>
            <div class="entrada">
                <div class="um">Unidad de medida</div>
                <div class="radios">
                    <label for="nombre">Kg</label>
                    <input type="radio" name="um" value="Kilogramos" required autocomplete="off">
                    <label for="nombre">Litro</label>
                    <input type="radio" name="um" value="Litros" required autocomplete="off">
                    <label for="nombre">Pieza</label>
                    <input type="radio" name="um" value="Piezas" required autocomplete="off">
                       
                </div>
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
                        <td>
                            <a href="editMaterial.php?id=<?php echo $row['material_ID'];?>">Editar</a>
                            <a href="deleteMaterial.php?id=<?php echo $row['material_ID'];?>">Eliminar</a>
                        </td>
                    </tr>

                <?php }

                ?>
            </tbody>
        </table>
    </div>

    <?php include("footer.php");?>
</body>

</html>