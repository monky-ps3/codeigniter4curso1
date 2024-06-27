<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pelicula</title>
</head>
<body>
  
    <form action="<?php echo base_url()?>dashboard/categoria/update/<?php echo $categoria['id']?>" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo $categoria['titulo']?>">
       
       
         <button type="submit">Enviar</button>
    </form>
</body>
</html>