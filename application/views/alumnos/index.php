<h1>LISTADO DE ALUMNOS</h1>
<br>
<?php if ($alumnos): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>CEDULA</th>
        <th>PRIMER APELLIDO</th>
        <th>SEGUNDO APELLIDO</th>
        <th>NOMBRES</th>
        <th>TITULO</th>
        <th>TELEFONO</th>
        <th>DIRECCION</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
            <?php foreach ($alumnos
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo $filaTemporal->id_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->cedula_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->primer_apellido_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->segundo_apellido_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->nombres_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->titulo_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->telefono_ins; ?>
                  </td>
                  <td>
                      <?php echo $filaTemporal->direccion_ins; ?>
                  </td>


          <td class="text-center">
            <a href="#" title="Editar alumno" style="color:black;">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/alumnos/eliminar/<?php echo$filaTemporal->id_ins; ?>"
            title="Eliminar alumno" style="color:red;">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h1>No hay alumnos</h1>
<?php endif; ?>
