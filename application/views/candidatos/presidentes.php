
		<br>
		<div class="container bg-danger text-center">
			&nbsp;
		  <h1>REPORTE CANDIDATOS PRESIDENTES</h1>
			&nbsp;
		</div>
		<br>
		<div class="container">
				<div class="col-md-12">
					<div id="mapaLugar" style="height:600px; width:100%; border:2px solid black;"></div>
				</div>
		</div>

		<script type="text/javascript">
			function initMap(){
					var centro=new google.maps.LatLng(-0.17834732047773233, -78.46352701164128);
					var mapaLugares=new google.maps.Map(
						document.getElementById('mapaLugar'),
						{
							center:centro,
							zoom: 7,
							mapTypeId:google.maps.MapTypeId.ROADMAP
						}
					);
				<?php if($candidatos): ?>
						<?php foreach($candidatos as $preTemporal): ?>
						var coordenadaPre=new google.maps.LatLng(<?php echo $preTemporal->latitud; ?>, <?php echo $preTemporal->longitud; ?>);
						var marcadorpre=new google.maps.Marker({
								position:coordenadaPre,
								title: "<?php echo $preTemporal->movimiento; ?>",
								map:mapaLugares
						});
						<?php endforeach; ?>
				<?php endif; ?>
			}
		</script>
