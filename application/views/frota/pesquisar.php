<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
	<div class="starter-template">
		<div class="info_msgs">
			<?php
			if(isset($alert_msg)){
				echo $alert_msg;
			}
			?>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="content">
					<?php
					$attributes = array('class' => 'form-inline', "method" => "GET");
					echo form_open('frota/pesquisar/', $attributes);
					?>
					<div class="form-group col-xs-2">
						<select class="form-control" name="search_type">
							<option value="">Seleccione um tipo:</option>
							<?php
							$checked="";
							foreach ($types as $key => $tipo) {
								if($search_type == $key){
									$checked = 'selected';
								}
								echo '<option '.$checked.' value="'.$key.'">'.$tipo.'</option>';
								$checked="";
							}
							?>
						</select>
						<?php
						echo form_error('search_type');
						?>
					</div>
					<div class="form-group col-xs-8">
						<input type="text" class="form-control search" name="search_term" placeholder="Termo de pesquisar..." value="<?php echo $search_term ?>">
					</div>
					<div class="form-group col-xs-2">
						<button type="submit" class="btn btn-primary btns_index"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="table-responsive">
					<table class="table table-hover table-condensed">
						<h4 class="">Lista de Automóveis <small> <?php echo $search_total_results." resultados"; ?></small></h4> 
						<thead class="table-bordered">
							<tr class="info">
								<th> Fabricante </th>
								<th> Modelo </th>
								<th> Cor </th>
								<th> Matricula </th>
								<th> Disponibilidade </th>
								<th> Actions </th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($search_results as $carro) {
								echo '<tr>';
								echo '<td><a class="search_link" href="'.base_url('frota/pesquisar/?search_type=fab&search_term='.$carro->fabricante).'">'.$carro->fabricante.'</a></td>';
								echo '<td><a class="search_link" href="'.base_url('frota/pesquisar/?search_type=model&search_term='.$carro->modelo).'">'.$carro->modelo.'</a></td>';
								echo '<td>'.$carro->cor.'</td>';
								echo '<td>'.$carro->matricula.'</td>';
								echo '<td>'.$carro->disponibilidade.'</td>';
								?>
								<td>
									<a href="<?php echo base_url('frota/editar/'.$carro->id) ?>" class="btn btn-primary btn-xs btns_index" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="<?php echo base_url('frota/remover/'.$carro->id) ?>" class="btn btn-danger btn-xs btns_index" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="text-center">
					<?php echo $search_pagination; ?>
				</div>
			</div>
		</div>

	</div>
</div>