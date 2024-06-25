<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>

<body>
    <h1>estos es una pelicula</h1>
    <div>
        <table>
        <td><a href="pelicula/new/">Crear</a></td>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>


            <?php
            foreach ($nombrevariablevista2 as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['titulo'] ?></td>
                    <td><?php echo $value['descripcion'] ?></td>
                    <td><a href="pelicula/show/<?php echo $value['id'] ?>">Mostrar</a></td>
                    <td><a href="pelicula/edit/<?php echo $value['id'] ?>">Edit</a></td>
                    <td>
                    <form action="pelicula/delete/<?php echo $value['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                    </td> 
                </tr>

            <?php
            }

            ?>
        </table>
    </div>

</body>

</html>