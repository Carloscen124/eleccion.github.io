<style>
  .table-heading {
    color: black;
  }
</style>
<br>
<div class="container">
  <div class="row" style="background-color:#55E0D6 ">
    <div class="col-md-9 d-flex justify-content-center align-items-center">
      <h1 style="color:white">LISTA DE CANDIDATOS</h1>
    </div>
    <div class="col-md-3 d-flex justify-content-between align-items-center">
      <a href="<?php echo site_url(); ?>/Candidatos/nuevo" class="btn btn-light"><i class="bi bi-person-plus"></i>Agregar Candidato</a>
    </div>
  </div>
</div>


<br>
<!-- ifelse y tabulador -->
<?php if ($candidatos): ?>
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th class="table-heading">DIGNIDAD</th>
          <th class="table-heading">CÉDULA</th>
          <th class="table-heading">APELLIDOS</th>
          <th class="table-heading">NOMBRES</th>
          <th class="table-heading">MOVIMIENTO</th>
          <th class="table-heading">PROVINCIA</th>
          <th class="table-heading">CANTÓN</th>
          <th class="table-heading">TIPO</th>
          <th class="table-heading">LATITUD</th>
          <th class="table-heading">LONGITUD</th>
          <th class="table-heading">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($candidatos as $filatemporal): ?>
          <tr>
            <td>
              <?php echo $filatemporal->dignidad?>
            </td>
            <td>
              <?php echo $filatemporal->cedula?>
            </td>
            <td>
              <?php echo $filatemporal->apellido?>
            </td>
            <td>
              <?php echo $filatemporal->nombre?>
            </td>
            <td>
              <?php echo $filatemporal->movimiento?>
            </td>
            <td>
              <?php echo $filatemporal->provincia?>
            </td>
            <td>
              <?php echo $filatemporal->canton?>
            </td>
            <td>
              <?php echo $filatemporal->tipo?>
            </td>
            <td>
              <?php echo $filatemporal->latitud?>
            </td>
            <td>
              <?php echo $filatemporal->longitud?>
            </td>
            <td class="text-center">
              <a href="<?php echo site_url(); ?>/Candidatos/editar/<?php echo $filatemporal->id_can?>" title="Editar Candidato" style="color:;"><i class="bi bi-pencil-square"></i></a>
              &nbsp;
              <a href="<?php echo site_url(); ?>/Candidatos/eliminar/<?php echo $filatemporal->id_can?>" title="Eliminar Candidato" style="color:red;" onclick="return confirm('¿Está seguro de eliminar de forma permanente el registro seleccionado?')"><i class="bi bi-person-x"></i></a>
              &nbsp;
              <a href="<?php echo site_url(); ?>/Candidatos/reporte/" title="Visualizar Candidato" style="color:blue;"><i class="bi bi-geo-alt"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php else: ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="<?php echo base_url(); ?>/plantilla/img/nodatos.avif" alt="No existen datos" width="100%" height="500px">
      </div>
    </div>
  </div>
<?php endif; ?>
