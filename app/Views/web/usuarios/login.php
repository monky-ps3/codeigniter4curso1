<?= $this->extend('Layouts/dashboard') ?>



<?php echo  $this->section('contenido') ?>

<?= view('partials/_form-error') ?>


<form action="<?= base_url('usuario/login_post') ?>" method="post">
<label for="email">Usuario/Email</label>
<input type="text" name="email" id="email">
<label for="contrasena">contrasena</label>
<input type="password" name="contrasena" id="contrasena">



<!--<input type="submit" value="Enviar">-->
<button type="submit">Iniciar Sesión</button>

</form>


    <?= $this->endSection() ?>