<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="starter-template">
		<?php
		if(isset($alert_msg)){
			echo $alert_msg;
		}
		?>

		<div class="content">
			<?php
			$attributes = array('class' => 'form-inline', "method" => "GET");
			echo form_open('frota/pesquisar/', $attributes);
			?>

			<div class="form-group pull-left">
				<div class="col-sm-2">
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
			</div>

			<div class="form-group" style="min-width: 69%;">
				<div class="col-sm-8" style="min-width: 100%;">
					<input type="text" class="form-control search" name="search_term" placeholder="Termo de pesquisar..." value="<?php echo $search_term ?>">
				</div>
			</div>

			<div class="form-group pull-right">
				<div class="col-sm-2">
					<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
				</div>
			</div>
			<?php
			echo form_close();
			?>
		</div><br>


		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table class="table table-hover table-condensed">
						<h4 class="">Lista de Automóveis <small> <?php echo $search_total_results." resultados"; ?></small></h4> 
						<thead class="table-bordered">
							<tr class="danger">
								<th class="text-center"> Fabricante </th>
								<th class="text-center"> Modelo </th>
								<th class="text-center"> Cor </th>
								<th class="text-center"> Matrícula </th>
								<th class="text-center"> Disponibilidade </th>
								<th class="text-center"> Ações </th>
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
								echo '<td class="text-center">'.$carro->disponibilidade.'</td>';
								?>
								<td  class="text-center">
									<a href="<?php echo base_url('frota/editar/'.$carro->id) ?>" class="btn btn-danger btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>

									<a href="<?php echo base_url('frota/remover/'.$carro->id) ?>" class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<?php echo $search_pagination; ?>
				</div>
			</div>
		</div>

	</div>
</div>