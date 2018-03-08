<link rel="stylesheet" type="text/css" href="<?php echo  base_url('/assets/css/login.css'); ?>">
<?php echo form_open('certificado/buscar_certificado'); ?>

    <img class="mb-4" src="<?php echo  base_url('/assets/img/wellservices_logo.png'); ?>" alt="" width="460" height="306">

    <h1 class="h3 mb-3 font-weight-normal">Revice su certificado aqui</h1>

    <label for="inputEmail" class="sr-only">Codigo del certificado</label>
    <input type="text" name="codigo" id="inputEmail" class="form-control" placeholder="Codigo del certificado" required autofocus>
    <div class="checkbox mb-3">

    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Consultar</button>
    <p align="center" class="mt-5 mb-3 text-muted">Well Services International Chile - &copy; 2017-2018</p>
<?php echo form_close(); ?>
