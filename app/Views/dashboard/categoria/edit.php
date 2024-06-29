<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>
<?php echo view('partials/_form-error'); ?>
<form action="<?php echo base_url() ?>dashboard/categoria/update/<?php echo $categoria['id'] ?>" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo old('titulo', $categoria['titulo']) ?>">


    <button type="submit">Enviar</button>
</form>
<?= $this->endSection() ?>