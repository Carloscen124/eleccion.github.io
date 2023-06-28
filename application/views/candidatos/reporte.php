<style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
    background-image: url("<?php echo base_url(); ?>/plantilla/img/fondo.png");    background-size: cover;
    background-position: center;
  }

  .vertical-menu {
    width: 500px;
    background-color: rgba(242, 242, 242, 0.5);
  }

  .vertical-menu a {
    color: #000;
    display: block;
    padding: 12px;
    text-decoration: none;
    transition: background-color 0.3s;
  }

  .vertical-menu a:hover {
    background-color: #ddd;
  }

  .vertical-menu a img {
    margin-right: 10px;
  }
</style>



<div class="container">
  <div class="vertical-menu">
    <a href="<?php echo site_url() ?>/candidatos/general">
      <img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="presidente">
      REPORTE GENERAL
    </a>
    <a href="<?php echo site_url() ?>/candidatos/presidentes">
      <img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="nacionales">
      REPORTE PRESIDENTES
    </a>
    <a href="<?php echo site_url() ?>/candidatos/nacionales">
      <img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="provinciales">
      REPORTE ASAMBLEÍSTAS NACIONALES
    </a>
    <a href="<?php echo site_url() ?>/candidatos/provinciales">
      <img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="provinciales">
      REPORTE ASAMBLEÍSTAS PROVINCIALES
    </a>
    <a href="<?php echo site_url() ?>/candidatos/tipo">
      <img src="<?php echo base_url(); ?>/plantilla/img/1.png" alt="tipo">
      REPORTE TIPO MOVIMIENTO
    </a>
  </div>
</div>
