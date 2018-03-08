<div class="container">
    <div class="row">
        <h2>Ingresar nuevo Certificado</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <?php echo form_open('cliente/buscacliente') ?>
            <div class="form-group form-control">
                <label>Buscar asistente existente</label>
                <input type="text" name="cliente_buscar" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-primary btn-block" style="margin-top:10px;">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</div><!--div container-->
