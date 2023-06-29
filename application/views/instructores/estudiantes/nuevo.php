<h1>NUEVO ESTUDIANTE</h1>
<form class="" action="<?php echo site_url(); ?>/estudiantes/guardar" method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula:</label>
          <br>
          <input type="number"
          placeholder="Ingrese la cédula"
          class="form-control"
          name="cedula_ins" value="" id="cedula_ins">
      </div>
      <div class="col-md-4">
          <label for="">Primer Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          name="primer_apellido_ins" value="" id="primer_apellido_ins">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_ins" value="" id="segundo_apellido_ins">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombre:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          name="nombres_ins" value="" id="nombres_ins">
      </div>
      <div class="col-md-4">
          <label for="">Título:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el titulo"
          class="form-control"
          name="titulo_ins" value="" id="titulo_ins">
      </div>
      <div class="col-md-4">
        <label for="">Teléfono:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el telefono"
        class="form-control"
        name="telefono_ins" value="" id="telefono_ins">
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-12">
          <label for="">Dirección:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          name="direccion_ins" value="" id="direccion_ins">
      </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/estudiantes/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
