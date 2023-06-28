
		<br>
		<div class="container bg-primary text-center">
			&nbsp;
		  <h1>REPORTE CANDIDATOS ASAMBLEÍSTAS PROVINCIALES</h1>
			&nbsp;
		</div>		<br>
		<div class="container">
				<div class="col-md-12">
					<div id="mapaProvincial" style="height:600px; width:100%; border:2px solid black;"></div>
				</div>
		</div>

		<script type="text/javascript">
			function initMap(){
					var centro=new google.maps.LatLng(-0.17834732047773233, -78.46352701164128);
					var mapaPro=new google.maps.Map(
						document.getElementById('mapaProvincial'),
						{
							center:centro,
							zoom: 7,
							mapTypeId:google.maps.MapTypeId.HYBRID
						}
					);
				<?php if($candidatos): ?>
						<?php foreach($candidatos as $proTemporal): ?>
						var coordenadaPro=new google.maps.LatLng(<?php echo $proTemporal->latitud; ?>, <?php echo $proTemporal->longitud; ?>);
						var marcadorpro=new google.maps.Marker({
								position:coordenadaPro,
								title: "<?php echo $proTemporal->movimiento; ?>",
                icon:"<?php echo base_url(); ?>/plantilla/img/placeholder.png",
								map:mapaPro
						});
						<?php endforeach; ?>
				<?php endif; ?>
			}
		</script>
