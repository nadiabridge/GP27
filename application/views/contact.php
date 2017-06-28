<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">

	<?php 
	$options = array("id" => "contact_form", "class" => "form-horizontal");
	echo form_open('publico/contact/', $options);
	?>
	
	<div class="starter-template">
		<div class="form-group">
			<div class="col-sm-7 col-sm-offset-5">
				<h3><strong>Entre em contacto connosco</strong></h3>
			</div>
		</div><br>

		<div class="form-group">
			<div class="text-left col-sm-2 col-sm-offset-3">
				<label for="nome" class="control-label">Nome</label>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o primeiro e último nome" value ="<?php echo set_value('nome')?>">
				<?php echo form_error('nome');?>
			</div>
		</div>
		
		<div class="form-group">
			<div class="text-left col-sm-2 col-sm-offset-3">
				<label for="email" class="control-label">Email</label>
			</div>
			<div class="col-sm-7">
				<input type="email" class="form-control" id="email" name="email" placeholder="Insira o seu email" value ="<?php echo set_value('email')?>">
				<?php echo form_error('email');?>
			</div>
		</div>

		<div class="form-group">
			<div class="text-left col-sm-2 col-sm-offset-3">
				<label for="mensagem" class="control-label">Mensagem</label>
			</div>
			<div class="col-sm-7">
				<textarea class="form-control" rows="5" id="mensagem" name="mensagem" placeholder="Escreva aqui a sua mensagem."><?php echo set_value('mensagem')?></textarea>
				<?php echo form_error('mensagem');?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-2 col-sm-offset-10">
				<button type="submit" class="btn btn-primary contact_btn pull-right">Enviar</button>
			</div>
		</div>
	</div> <!-- starter-template-->
	<?php
	echo form_close();
	?>
</div> <!-- .container -->

<script>
//	Validacao do Nome
$('#nome').on('input', function() {
	var input = $(this);
	var content = input.val();
	var parent = input.parent().parent();

	if(content.length > 2 && content.length <= 64){
		parent.removeClass('has-error');
		parent.addClass('has-success');
	}else{
		parent.removeClass('has-success');
		parent.addClass('has-error');
	}
});

//  Validação do email
$("#email").on('input',function () {
	let email = $(this).val();
	let patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var parent = $(this).parent().parent();
	if(patt.test(email)){
		parent.removeClass('has-error');
		parent.addClass('has-success');
	}else {
		parent.addClass('has-error');
		parent.removeClass('has-success');
	}
});

//	Validação da mensagem
$('#mensagem').on('input', function() {
	var input = $(this);
	var msg = input.val();
	var parent = input.parent().parent();

	if(msg.length > 0 && msg.length <= 500){
		parent.removeClass('has-error');
		parent.addClass('has-success');
	}else{
		parent.removeClass('has-success');
		parent.addClass('has-error');
	}
});

// Verificar se existem erros antes de submeter o formulario
$("#contact_form").submit(function(){
	if($("#contact_form .has-error").length > 0){
		alert("Corrija os erros!");
		// para evitar que o formulario seja submetido
		return false; 
	}
});

</script>