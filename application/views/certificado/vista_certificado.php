<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-4">
            <img src="<?php echo  base_url('assets/img/wellservices_cap_logo.png');?>" style="margin-left:30px; margin-right:10px;" width="55%" class="img-fluid float-right ">
        </div>
        <div class="col-6">

            <h2>Datos Personales</h2>

            <table class="table table-striped table-bordered">
                <thead class="thead-dark" class="thead class="thead-dark"-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>

                    </tr>
                <thead>

                <tbody>
                    <tr>
                        <td><?php echo $cliente->nombre; ?></td>
                        <td><?php echo $cliente->apellido; ?></td>
                    </tr>
                </tbody>


                <thead class="thead-dark">
                    <tr>
                        <th>Rut ó Pasaporte</th>
                        <th>Fecha de nacimiento</th>
                    </tr>

                <thead>
                <tbody>
                    <tr>
                        <td><?php echo number_format( substr ( $cliente->rut, 0 , -1 ) , 0, "", ".") . '-' . substr ( $cliente->rut, strlen($cliente->rut) -1 , 1 ); ?></td>
                        <td>
                            <?php
                                $fecha  = DateTime::createFromFormat('Y-m-d', $cliente->fecha_nacimiento );
                                echo $fecha->format('d-m-Y');
                            ?>

                        </td>
                    </tr>
                </tbody>


            </table>
        </div>
    </div>
    <hr>
    <?php foreach ($certificados as $certificado): ?>
        <div class="row" style="margin-bottom:20px;">
            <div class="col-6 mb-6">
                <img src="<?php echo base_url('/certificados/' . $certificado['certificado']->diploma_img .'.png'); ?>" alt="">
            </div>
            <div class="col-6 mb-6">
                <h3>Certificado</h3>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Codigo del certificado</th>
                            <th>Nombre del Curso</th>
                        </tr>
                    <thead>

                    <tbody>
                        <tr>
                            <td><?php echo $certificado['certificado']->codigo ?></td>
                            <td><?php echo $certificado['certificado']->nombre_curso ?></td>
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
                                    $fecha  = DateTime::createFromFormat('Y-m-d', $certificado['certificado']->fecha_emision );
                                    echo $fecha->format('d-m-Y');
                                ?>
                            </td>
                            <td>
                                <?php
                                    $fecha  = DateTime::createFromFormat('Y-m-d', $certificado['certificado']->fecha_vencimiento );
                                    echo $fecha->format('d-m-Y');
                                ?>
                            </td>
                        </tr>
                    </tbody>

                </table>

                <br>
                <h3>Cursos que te podrian interesar:</h3>

                <ul>
                    <?php foreach ($certificado['cursos'] as $curso): ?>
                        <li><?php echo $curso->curso; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>

</div>
