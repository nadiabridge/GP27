<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">







<!--
	<div class="starter-template">
		<div class="row">
			<h1 class="pull-center">Rent-A-Car</h1>

			<div class="col-xs-10 col-xs-offset-1">

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

				
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo base_url('assets/images/auto.png')?>" class="img-responsive" alt="Responsive image">
						</div>

						<div class="item">
							<img src="<?php echo base_url('assets/images/carros_d4.png')?>" class="img-responsive" alt="Responsive image">
						</div>

						<div class="item" >
							<img src="<?php echo base_url('assets/images/carros.png')?>" class="img-responsive" alt="Responsive image">
						</div>
					</div>

		
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<p class="lead pull-left">Uma equipa de atendimento qualificada e experiente, irá ajudá-lo(a) na escolha do seu melhor automóvel. O automóvel que aqui apresentamos não é com certeza dos modelos mais baratos de adquirir, manter/preservar, mas é um daqueles […]</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-xs-offset-9">
				<a href="<?php echo base_url('frota/pesquisar');?>" type="button" class="btn btn-primary botao_home pull-right">Frota</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-sm-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"><b> BMW </b></div>
					<div class="panel-body panel_home">
						<img src="<?php echo base_url('assets/images/bmw3.png')?>" class="img-responsive" alt="Responsive image">
						<p class="lead pull-left">Marque um test-drive para uma das nossas viaturas e esclareça connosco todas as suas dúvidas.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading"><b>AUDI</b></div>
					<div class="panel-body panel_home">
						<img src="<?php echo base_url('assets/images/audi.jpg')?>" class="img-responsive" alt="Responsive image">
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>RENAULT</b></div>
					<div class="panel-body panel_home">
						<img src="<?php echo base_url('assets/images/megane.png')?>" class="img-responsive" alt="Responsive image">
						<p class="lead pull-left">Faça aqui a Marcação do Serviço de Oficina ou Revisão e aguarde pelo contacto e confirmação, por parte dos nossos serviços.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

-->






<section id="main-slider" class="no-margin">
	<div class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#main-slider" data-slide-to="0" class="active"></li>
			<li data-target="#main-slider" data-slide-to="1"></li>
			<li data-target="#main-slider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">

		 <div class="item active" style="background-image: url(/assets/images/images/slider/bg1.jpg)"> 
		<!--		<div class="item active">
					<img src="<?php echo base_url('/assets/images/images/slider/bg1.jpg')?>">
				</div> -->

				<div class="container">
					<div class="row slide-margin">
						<div class="col-sm-6">
							<div class="carousel-content">
								<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
								<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
								<a class="btn-slide animation animated-item-3" href="#">Read More</a>
							</div>
						</div>

						<div class="col-sm-6 hidden-xs animation animated-item-4">
							<div class="slider-img">
								<img src="images/slider/img1.png" class="img-responsive">
							</div>
						</div>

					</div>
				</div>
			</div><!--/.item-->

			<div class="item" style="background-image: url(images/slider/bg2.jpg)">
				<div class="container">
					<div class="row slide-margin">
						<div class="col-sm-6">
							<div class="carousel-content">
								<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
								<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
								<a class="btn-slide animation animated-item-3" href="#">Read More</a>
							</div>
						</div>

						<div class="col-sm-6 hidden-xs animation animated-item-4">
							<div class="slider-img">
								<img src="images/slider/img2.png" class="img-responsive">
							</div>
						</div>

					</div>
				</div>
			</div><!--/.item-->

			<div class="item" style="background-image: url(images/slider/bg3.jpg)">
				<div class="container">
					<div class="row slide-margin">
						<div class="col-sm-6">
							<div class="carousel-content">
								<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
								<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
								<a class="btn-slide animation animated-item-3" href="#">Read More</a>
							</div>
						</div>
						<div class="col-sm-6 hidden-xs animation animated-item-4">
							<div class="slider-img">
								<img src="images/slider/img3.png" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div><!--/.item-->
		</div><!--/.carousel-inner-->
	</div><!--/.carousel-->
	<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
		<i class="fa fa-chevron-left"></i>
	</a>
	<a class="next hidden-xs" href="#main-slider" data-slide="next">
		<i class="fa fa-chevron-right"></i>
	</a>
</section><!--/#main-slider-->




</div>