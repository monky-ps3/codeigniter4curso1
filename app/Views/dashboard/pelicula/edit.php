<?= $this->extend('Layouts/dashboard') ?>

<?php echo  $this->section('contenido'); ?>
<?php echo view('partials/_form-error');?>
<form action="<?php echo base_url() ?>dashboard/pelicula/update/<?php echo $pelicula['id'] ?>" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo old('titulo', $pelicula['titulo']) ?>">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" id="descripcion" cols="30">
    <?php echo old('descripcion', $pelicula['descripcion']) ?>
         </textarea>
    <button type="submit">Enviar</button>
</form>

<?= $this->endSection() ?>