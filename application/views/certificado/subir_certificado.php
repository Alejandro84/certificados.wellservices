<div class="container">
    <div class="row">
        <h2>Ingresar nuevo Certificado</h2>
    </div>

    <div class="row">

        <div class="col-6">

            <div class="form-group">
                <label>Rut o pasaporte:</label>
                <input type="text" name="rut" class="form-control">
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" name="apellido" class="form-control">
            </div>


            <div class="form-group">
                <label>Fecha de nacimiento</label>
                <div class='input-group date'>
                    <input type='text' name="fecha_nacimiento" id='calendario' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar">
                        </span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label>Razon social:</label>
                <input type="text" name="apellido" class="form-control">
            </div>

        </div><!--div col-6-->

        <div class="col-6">

            <div class="form-group">
                <label>Codigo del Certificado:</label>
                <input type="text" name="codigo_certificado" class="form-control">
            </div>

            <div class="form-group">
                <label>Nombre del curso:</label>
                <input type="text" name="nombre_curso" class="form-control">
            </div>

            <div class="form-group">
                <label>Fecha de Emisión:</label>
                <div class="form-group">
                    <div class='input-group date'>
                        <input type='text' name="fecha_emision" id='calendario_emision' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Fecha de Vencimiento:</label>
                <div class='input-group date'>
                    <input type='text' name="fecha_vencimiento" id='calendario_vencimiento' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar">
                        </span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label>Categoria:</label>
                <select class="form-control" name="id_categoria">
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?php $categoria->id_categoria?>"><?php echo $categoria->categoria?></option>
                    <?php endforeach; ?>
                </select>
            </div>


        </div><!--div col-6-->

    </div><!--div row-->

</div><!--div container-->
