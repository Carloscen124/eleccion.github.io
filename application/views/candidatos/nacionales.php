
		<br>
		<div class="container bg-dark text-center">
			&nbsp;
		  <h1 style="color:white;">REPORTE CANDIDATOS ASAMBLEÍSTAS NACIONALES</h1>
			&nbsp;
		</div>
		<br>
		<div class="container">
				<div class="col-md-12">
					<div id="mapaNacional" style="height:600px; width:100%; border:2px solid black;"></div>
				</div>
		</div>

		<script type="text/javascript">
			function initMap(){
					var centro=new google.maps.LatLng(-0.17834732047773233, -78.46352701164128);
					var mapaNacional=new google.maps.Map(
						document.getElementById('mapaNacional'),
						{
							center:centro,
							zoom: 7,
							mapTypeId:google.maps.MapTypeId.HYBRID
						}
					);
				<?php if($candidatos): ?>
						<?php foreach($candidatos as $nacTemporal): ?>
						var coordenadaNac=new google.maps.LatLng(<?php echo $nacTemporal->latitud; ?>, <?php echo $nacTemporal->longitud; ?>);
						var marcadorpre=new google.maps.Marker({
								position:coordenadaNac,
								title: "<?php echo $nacTemporal->movimiento; ?>",
                icon:"<?php echo base_url(); ?>/plantilla/img/nac.png",
								map:mapaNacional
						});
						<?php endforeach; ?>
				<?php endif; ?>
			}
		</script>
