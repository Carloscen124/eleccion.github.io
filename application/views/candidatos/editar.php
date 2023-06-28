<style>
  .form-control,
  .form-select {
    border: 1px solid skyblue ;
  }
  label {
    color: black;
  }
  #mapaUbicacion {
  height: 400px;
  width: 50%;
  border: 2px solid black;
  margin: 0 auto; /* Add this line to center the map horizontally */
  }


</style>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center" style="background-color:#B07669 ">
      &nbsp;
      <h1 style="color:black">EDITAR CANDIDATO</h1>
      &nbsp;
    </div>
  </div>
</div>
<br>
<form class="" action="<?php echo site_url(); ?>/candidatos/procesarActualizacion" method="post">
  <div class="container" id="letra">
    <div class="row">
      <input type="hidden" name="id_can" id="id_can" value="<?php echo $candidatoEditar->id_can; ?>">
      <div class="col-md-4">
        <label for="">Dignidad:</label>
           <select class="form-select" name="dignidad" id="dignidad">
            <option value="" <?php if ($candidatoEditar->dignidad === '') echo 'selected'; ?>>Seleccione la dignidad a la que pertenece</option>
            <option value="Presidente" <?php if ($candidatoEditar->dignidad === 'Presidente') echo 'selected'; ?>>Presidente</option>
            <option value="Asambleista Provincial" <?php if ($candidatoEditar->dignidad === 'Asambleista Provincial') echo 'selected'; ?>>Asambleista Provincial</option>
            <option value="Asambleista Nacional" <?php if ($candidatoEditar->dignidad === 'Asambleista Nacional') echo 'selected'; ?>>Asambleista Nacional</option>
          </select>
      </div>
      <div class="col-md-4">
          <label for="">Cédula:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la cédula"
          class="form-control"
          name="cedula" value="<?php echo $candidatoEditar->cedula; ?>" id="cedula">
      </div>
      <div class="col-md-4">
          <label for="">Apellidos:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          name="apellido" value="<?php echo $candidatoEditar->apellido; ?>" id="apellido">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombres:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          name="nombre" value="<?php echo $candidatoEditar->nombre; ?>" id="nombre">
      </div>
      <div class="col-md-4">
          <label for="">Movimiento:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el movimiento"
          class="form-control"
          name="movimiento" value="<?php echo $candidatoEditar->movimiento; ?>" id="movimiento">
      </div>
      <div class="col-md-4">
        <label for="">Provincia:</label>
        <br>
        <input type="text"
        placeholder="Ingrese la provincia"
        class="form-control"
        name="provincia" value="<?php echo $candidatoEditar->provincia; ?>" id="provincia">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
          <label for="">Cantón:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el cantón"
          class="form-control"
          name="canton" value="<?php echo $candidatoEditar->canton; ?>" id="canton">
      </div>
      <div class="col-md-4">
        <label for="">Tipo:</label>
          <select class="form-select" name="tipo" id="tipo">
            <option value="" <?php if ($candidatoEditar->tipo === '')
              echo 'selected'; ?>>Seleccione el tipo de movimiento al que
              pertenece</option>
            <option value="Izquierda" <?php if ($candidatoEditar->tipo === 'Izquierda')
              echo 'selected'; ?>>Izquierda</option>
            <option value="Derecha" <?php if ($candidatoEditar->tipo === 'Derecha')
              echo 'selected'; ?>>Derecha</option>
          </select>
      </div>

    </div>
    <br>
    <div class="row">
      <h1>COORDENADAS UBICACIÓN</h1>
      <div class="col-md-4">
          <label for="">Latitud:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la latitud"
          class="form-control" readonly
          name="latitud" value="<?php echo $candidatoEditar->latitud; ?>" id="latitud">
      </div>
      <div class="col-md-4">
          <label for="">Longitud:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la longitud"
          class="form-control" readonly
          name="longitud" value="<?php echo $candidatoEditar->longitud; ?>" id="longitud">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div id="mapaUbicacion" style="height:400px; width:60%; border:2px solid black"></div>
      </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Editar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/candidatos/nuevo" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
  </div>
</form>


</form>

<script type="text/javascript">
function initMap(){
  var coordenadaCentry=new google.maps.LatLng(-1.3819240058299596, -78.68875618841503);
  var mapa5=new google.maps.Map(document.getElementById('mapaUbicacion'),
  {
  center: coordenadaCentry,
  zoom:7,
  mapTypeId:'roadmap'
  });

  var marcador2=new google.maps.Marker({
    position:coordenadaCentry,
    map:mapa5,
    title:"Seleccione la dirección",
    icon:"<?php echo base_url(); ?>/plantilla/img/2.png",
    draggable:true
  })
  google.maps.event.addListener(marcador2,'dragend',function(){
    // alert("Se termino el drags");
    document.getElementById('latitud').value=this.getPosition().lat();
    document.getElementById('longitud').value=this.getPosition().lng();
  });
}
</script>
