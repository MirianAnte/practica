<h1>LISTADO DE ESTUDIANTES</h1>
<br>
<?php if ($estudiantes): ?>
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
            <?php foreach ($estudiantes
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
            <a href="#" title="Editar estudiante" style="color:black;">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/estuadiantes/eliminar/<?php echo$filaTemporal->id_ins; ?>"
            title="Eliminar estudiante" style="color:red;">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h1>No hay estudiantes</h1>
<?php endif; ?>
