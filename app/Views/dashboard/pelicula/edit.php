<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pelicula</title>
</head>
<body>
    <form action="<?php echo base_url()?>dashboard/pelicula/update/<?php echo $pelicula['id']?>" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo $pelicula['titulo']?>">
         <label for="descripcion">Descripcion</label>
         <textarea name="descripcion" id="descripcion" cols="30">
         <?php  echo $pelicula['descripcion']?>
         </textarea>
         <button type="submit">Enviar</button>
    </form>
</body>
</html>