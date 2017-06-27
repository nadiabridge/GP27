<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container form-container">
	<div class="starter-template">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="alert alert-warning">
					Tem a certeza que deseja eliminar o carro com a matrícula <strong>"<?php echo $matricula?>"</strong> ?</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-7">
			<?php echo form_open("frota/delete/",array(),array('id'=>$car_id));?>
			<div class="text-right">
				<a href="<?php echo base_url("frota/pesquisar/")?>" class="btn btn-warning">Cancelar</a>
				<button class="btn btn-primary">Eliminar</button>
			</div>
			<?php echo form_close()?>
			</div>
		</div>
	</div>
</div>
