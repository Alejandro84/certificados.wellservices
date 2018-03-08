<div class="container">
    <?php foreach ($certificados as $certificado): ?>
        <div class="row" style="margin-bottom:20px;">
            <div class="col-6 mb-6">
                <img src="<?php echo base_url('/certificados/' . $certificado->diploma_img .'.png'); ?>" alt="">
            </div>
            <div class="col-6 mb-6">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark" class="thead class="thead-dark"-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rut ó Pasaporte</th>
                        </tr>
                    <thead>

                    <tbody>
                        <tr>
                            <td><?php echo $certificado->nombre; ?></td>
                            <td><?php echo $certificado->apellido; ?></td>
                            <td>
                                <?php echo number_format( substr ( $certificado->rut, 0 , -1 ) , 0, "", ".") . '-' . substr ( $certificado->rut, strlen($certificado->rut) -1 , 1 ); ?></td>
                        </tr>
                    </tbody>


                    <thead class="thead-dark">
                        <tr>
                            <th>Razon social</th>
                            <th>Fecha de nacimiento</th>
                        </tr>

                    <thead>
                    <tbody>
                        <tr>
                            <td><?php echo $certificado->razon_social ?></td>
                            <td>
                                <?php
                                    $fecha  = DateTime::createFromFormat('Y-m-d', $certificado->fecha_nacimiento );
                                    echo $fecha->format('d-m-Y');
                                ?>

                            </td>
                        </tr>
                    </tbody>


                </table>

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Codigo del certificado</th>
                            <th>Nombre del Curso</th>
                        </tr>
                    <thead>

                    <tbody>
                        <tr>
                            <td><?php echo $certificado->codigo ?></td>
                            <td><?php echo $certificado->nombre_curso ?></td>
                        </tr>
                    </tbody>

                    <thead class="thead-dark">
                        <tr>
                            <th>Fecha de emisión</th>
                            <th>Fecha de vencimiento</th>
                        </tr>
                    <thead>

                    <tbody>
                        <tr>
                            <td>
                                <?php
                                    $fecha  = DateTime::createFromFormat('Y-m-d', $certificado->fecha_emision );
                                    echo $fecha->format('d-m-Y');
                                ?>
                            </td>
                            <td>
                                <?php
                                    $fecha  = DateTime::createFromFormat('Y-m-d', $certificado->fecha_vencimiento );
                                    echo $fecha->format('d-m-Y');
                                ?>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    <?php endforeach; ?>

</div>
