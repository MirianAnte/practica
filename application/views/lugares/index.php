

<CENTER>
        <h1>LISTADO DE LUGARES</h1></CENTER>
        <br>
        <?php if ($lugares):?>
            <table class="table table-striped table-bordered" >
                <thead>
                    <tr>
                      <th>NOMBRE</th>
                      <th>TIPO</th>
                      <th>TELEFONO</th>
                      <th>GMAIL</th>
                      <th>DIRECCION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lugares as $filaTemporal):?>
                        <tr>
                            <td>
                                <?php echo $filaTemporal->nombre_lug; ?>
                            </td>
                            <td>
                                <?php echo $filaTemporal->tipo_lug; ?>
                            </td>
                            <td>
                                <?php echo $filaTemporal->telefono_lug; ?>
                            </td>
                            <td>
                                <?php echo $filaTemporal->gmail_lug; ?>
                            </td>
                            <td>
                                <?php echo $filaTemporal->direccion_lug; ?>
                            </td>

                        </tr>
                    <?php endforeach;?>

                </tbody>

            </table>
        <?php else: ?>
            <h1>no hay ilugares</h1>
        <?php endif;?>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" name="button"
                class="btn btn-primary">
                  Regreso
                </button>

                </a>
            </div>
        </div>
