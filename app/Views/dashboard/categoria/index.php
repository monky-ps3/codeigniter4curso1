<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Listado de categoías
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>



<div>
    <?php echo view('partials/_session'); ?>
    <table>
        <td><a href="categoria/new/">Crear</a></td>
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
                <!--impresion para arreglos  <td>/*echo $value['id']*/</td>-->
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->titulo ?></td>

                <td><a href="categoria/show/<?php echo $value->id ?>">Mostrar</a></td>
                <td><a href="categoria/edit/<?php echo $value->id ?>">Edit</a></td>
                <td>
                    <form action="categoria/delete/<?php echo $value->id ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>

        <?php
        }

        ?>
    </table>
    <?= $this->endSection() ?>


