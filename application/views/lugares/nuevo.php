

<h1>NUEVO LUGAR</h1>
<br>
<form class="" action="<?php echo site_url(); ?>/lugares/guardar" method="post">
      <div class="row">
    <div class="col-md-4">
      <label for="">NOMBRE:</label>
      <br>
      <input type="text" placeholder="Ingrese el nombre" class="form-control" name="nombre_lug" value="" id="nombre_lug">
    </div>
    <div class="col-md-4">
      <label for="">TIPO:</label>
      <br>
      <input type="text" placeholder="Ingrese el tipo" class="form-control" name="tipo_lug" value="" id="tipo_lug">
    </div>
    <div class="col-md-4">
      <label for="">TELEFONO:</label>
      <br>
      <input type="text" placeholder="Ingrese le telefono" class="form-control" name="telefono_lug" value="" id="telefono_lug">
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-md-6">
        <label for="">GAMIL:</label>
        <br>
        <input type="text" placeholder="Ingrese el GMAIL" class="form-control" name="gmail_lug" value="" id="gmail_lug">
    </div>
    <div class="col-md-6">
      <label for="">DIRECCION:</label>
      <br>
      <input type="text" placeholder="Ingrese la direccion" class="form-control" name="direccion_lug" value="" id="direccion_lug">
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
             <a href="<?php echo site_url(); ?>/lugares/index" class="btn btn-danger">
             Cancelar
             </a>
         </div>
     </div>
 </form>
