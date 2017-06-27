<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="starter-template">
		<h3>Detalhes do Veículo</h3>
	</div>

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
			<label class="col-sm-2 col-md-2 col-md-offset-2 control-label" for="modelos">Modelo</label>
			<div class="col-sm-10 col-md-5">
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
			<label class="col-sm-2 col-md-2 col-md-offset-2 control-label" for="cores">Cor</label>
			<div class="col-sm-10 col-md-5">
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
			<label class="col-sm-2 col-md-2 col-md-offset-2 control-label" for="matricula">Matricula</label>
			<div class="col-sm-10 col-md-5">
				<input type="text" id="matricula" class="form-control" name="matricula" value="<?php echo set_value('matricula') ?>">
				<?php
					echo form_error('matricula');
				?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-4 col-sm-2 col-sm-offset-2 col-md-offset-4">
				<label class="radio-inline control-label">
				<?php if ($car_id > 0){	?>
					<input <?php echo set_radio('disponibilidade','0') ?> type="radio" name="disponibilidade" id="disponivel" value="0">Disponível
				<?php }else{ ?>
					<input checked type="radio" name="disponibilidade" id="disponivel" value="0">Disponível
				<?php }?>
				</label>
			</div>
			<div class="col-xs-4 col-sm-2">
				<label class="radio-inline control-label">
				<?php if ($car_id > 0){	?>
					<input <?php echo set_radio('disponibilidade','1') ?> type="radio" name="disponibilidade" id="ocupado" value="1">Ocupado
				<?php }else{ ?>
					<input type="radio" name="disponibilidade" id="ocupado" value="1">Ocupado
				<?php }?>
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-4 col-xs-offset-2 col-sm-2 col-sm-offset-5">
				<a href="<?php echo base_url('frota/pesquisar/');?>" type="button" class="btn btn-warning">Cancelar</a>
			</div>
			<div class="col-xs-4 col-sm-2">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</div>
		<?php
		echo form_close();
		?>
	</div>
</div>


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