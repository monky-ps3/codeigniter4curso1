<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('contenido') ?>
<?php echo view('partials/_form-error'); ?>
    <form action="create" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo old('titulo')?>" >
      
         <button type="submit">Enviar</button>
    </form>
    <?= $this->endSection() ?>