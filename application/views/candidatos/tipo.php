
		<br>
		<div class="container bg-success text-center">
			&nbsp;
		  <h1 style="color:white">REPORTE GENERAL CANDIDATOS</h1>
			&nbsp;
		</div>
		<br>
		<div class="container">
			<div class="row" >
				<div class="col-md-3">
						<h3>MARCADORES TIPO MOVIMIENTO</h3>
						<p > <img src="<?php echo base_url(); ?>/plantilla/img/presidentes.png" alt="">Movimiento Izquierda</p>
						<p> <img src="<?php echo base_url(); ?>/plantilla/img/placeholder.png" alt="">Movimiento Derecha</p>
				</div>
					<div class="col-md-9">
						<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
					</div>
			</div>
		</div>

		<script type="text/javascript">
		  function initMap() {
		    var centro = new google.maps.LatLng(-0.17834732047773233, -78.46352701164128);
		    var mapaLugares = new google.maps.Map(
		      document.getElementById('mapaLugares'), {
		        center: centro,
		        zoom: 7,
		        mapTypeId: google.maps.MapTypeId.ROADMAP,
						apiKey: 'AIzaSyCoObNZz2rn6AMxGvMKq1GDTFvd7CzGwdY'
		      }
		    );

		    <?php if($candidatos): ?>
		      <?php foreach($candidatos as $lugarTemporal): ?>
		        <?php if($lugarTemporal->tipo == "Izquierda"): ?>
		          var icono = "<?php echo base_url(); ?>/plantilla/img/presidentes.png";
		        <?php elseif($lugarTemporal->tipo == "Derecha"): ?>
		          var icono = "<?php echo base_url(); ?>/plantilla/img/placeholder.png";
		        <?php else: ?>
		          var icono = null;
		        <?php endif; ?>

		        var coordenada = new google.maps.LatLng(<?php echo $lugarTemporal->latitud; ?>, <?php echo $lugarTemporal->longitud; ?>);
		        var marcador = new google.maps.Marker({
		          position: coordenada,
		          title: "<?php echo $lugarTemporal->dignidad; ?>",
		          icon: icono,
		          map: mapaLugares
		        });
		      <?php endforeach; ?>
		    <?php endif; ?>
		  }
		</script>
