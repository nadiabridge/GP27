<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container form-container">
	<div class="starter-template">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-4">
				<div class="alert alert-danger">
					<p>Confirma eliminar o veículo <strong>"<?php echo $matricula?>"</strong> ? </p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-4 pull-right">
				<?php echo form_open("frota/delete/",array(),array('id'=>$car_id));?>
				<button class="btn btn-warning" value="Cancelar"><a href="<?php echo base_url("frota/pesquisar/")?>">Cancelar</a></button>
				<button class="btn btn-danger" value="Eliminar">Eliminar</button>
				<?php echo form_close()?>
			</div>
		</div>

	</div>
</div>
