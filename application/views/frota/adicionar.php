<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="starter-template">
		
		<div class="row">
			<div class="col-sm-8 col-sm-offset-4">
				<h3><strong> Adicionar Novo Automóvel</strong></h3>
			</div>
		</div><br>

		<div class="content">
			<?php
    		// Criar formulario recorrendo ao From Helper
			$attributes = array('id' => 'add_form', 'class' => 'form-horizontal');
			echo form_open('frota/adicionar/', $attributes);
			?>

			<input type="hidden" id="car_id" name="car_id" value="<?php echo set_value('car_id') ?>">
			<?php
			if ($car_id > 0){$is_disabled = "readonly";}else{$is_disabled = "";}
			?>
			<div class="form-group">
				<div class="text-left col-sm-2 col-sm-offset-2">
					<label class="control-label" for="modelos">Modelo</label>
				</div>
				<div class="col-sm-8">
					<select class="form-control" id="modelos" name="modelo" <?php echo $is_disabled?>>
						<option value="">Selecione um modelo</option>
						<?php 
						foreach($models_results as $model){ 
							echo '<option '.set_select("modelo",$model->id).' value="'.$model->id.'">'.$model->nome.'</option>';
						}
						?>
					</select>
					<?php
					echo form_error('modelo');
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="text-left col-sm-2 col-sm-offset-2">
					<label class="control-label" for="cores">Cor</label>
				</div>
				<div class="col-sm-8">
					<select class="form-control" id="cores" name="cor">
						<option value="">Selecione uma cor</option>
						<?php 
						foreach($colors_results as $color){
							echo '<option '.set_select('cor',$color->id).' value="'.$color->id.'">'.$color->nome.'</option>';
						}
						?>
					</select>
					<?php
					echo form_error('cor');
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="text-left col-sm-2 col-sm-offset-2">
					<label class="control-label" for="matricula">Matrícula</label>
				</div>
				<div class="col-sm-8">
					<input type="text" id="matricula" class="form-control" name="matricula" placeholder="XX-XX-XX" value="<?php echo set_value('matricula') ?>">
					<?php
					echo form_error('matricula');
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="text-left col-sm-2 col-sm-offset-2">
					<label class="control-label" for="disponibilidade"></label>
				</div>
				<div class="col-sm-4">
					<label class="radio-inline control-label">
						<?php if ($car_id > 0){	?>
						<input <?php echo set_radio('disponibilidade','0') ?> type="radio" name="disponibilidade" id="disponivel" value="0"> Disponível
						<?php }else{ ?>
						<input checked type="radio" name="disponibilidade" id="disponivel" value="0"> Disponível
						<?php }?>
					</label>
				</div>

				<div class="col-sm-4">
					<label class="radio-inline control-label">
						<?php if ($car_id > 0){	?>
						<input <?php echo set_radio('disponibilidade','1') ?> type="radio" name="disponibilidade" id="ocupado" value="1"> Ocupado
						<?php }else{ ?>
						<input type="radio" name="disponibilidade" id="ocupado" value="1"> Ocupado
						<?php }?>
					</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-4">
					<button class="btn btn-warning" value="Cancelar"><a href="<?php echo base_url("frota/pesquisar/")?>">Cancelar</a></button>
					<button class="btn btn-danger" value="Guardar">Guardar</button>
				</div>
			</div>

			<?php
			echo form_close();
			?>
		</div> <!-- .content -->
	</div> <!-- .starter-template -->
</div> <!-- .container -->


<script>
	var id = '<?php echo $car_id; ?>';

	var num_colors = '<?php echo $colors->count; ?>';
	var num_models = '<?php echo $models->count; ?>';

	if(id == ''){
	//	Validacao do modelo
	$('#modelos').on('change', function() {
		var input = $(this);
		var model_val = input.val();
		var parent = input.parent().parent();

		if(model_val > 0 && model_val <= parseInt(num_models)){
			parent.removeClass('has-error');
			parent.addClass('has-success');
		}else{
			parent.removeClass('has-success');
			parent.addClass('has-error');
		}
	});	
}

//	Validacao da matricula
$("#matricula").on('input',function () {
	let mat = $(this).val();
	let patt = /([0-9]{2}\-[a-zA-Z]{2}\-[0-9]{2})|([a-zA-Z]{2}\-[0-9]{2}\-[0-9]{2})|([0-9]{2}\-[0-9]{2}\-[a-zA-Z]{2})/;
	var parent = $(this).parent().parent();
	if(patt.test(mat) && mat.length > 0 && mat.length < 9){
		parent.removeClass('has-error');
		parent.addClass('has-success');
	}else {
		parent.addClass('has-error');
		parent.removeClass('has-success');
	}
});

//	Validacao da cor
$('#cores').on('change', function() {
	var input = $(this);
	var color_val = input.val();
	var parent = input.parent().parent();

	if(color_val >= 1 && color_val <= parseInt(num_colors)){
		parent.removeClass('has-error');
		parent.addClass('has-success');
	}else{
		parent.removeClass('has-success');
		parent.addClass('has-error');
	}
});

//	Validacao da disponibilidade
$('input[type=radio][name=disponibilidade]').on('change', function() {
	var input = $(this);
	var avail_val = input.val();
	var parent = input.parent().parent().parent();

	if(avail_val >= 0 && avail_val <= 1){
		parent.removeClass('has-error');
		parent.addClass('has-success');
	}else{
		parent.removeClass('has-success');
		parent.addClass('has-error');
	}
});

// Verificar se existem erros antes de submeter o formulario
$("#add_form").submit(function(){
	if($("#add_form .has-error").length > 0){
		alert("Corrija os erros!");
		// para evitar que o formulario seja submetido
		return false; 
	}
});
</script>