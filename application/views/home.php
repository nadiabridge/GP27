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

			<div class="item active" style="background-image: url(assets/images/slider/bg1.jpg)"> 
				<!--	
				<div class="item active">
					<img src="<?php //echo base_url('/assets/images/slider/bg1.jpg')?>">
				</div> 
			-->

			<div class="container">
				<div class="row slide-margin">
					<div class="col-sm-6">
						<div class="carousel-content">
							<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
							<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
							<a class="btn-slide animation animated-item-3" href="<?php echo base_url('frota/pesquisar');?>">Verificar Frota</a>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.item-->

		<div class="item" style="background-image: url(assets/images/slider/bg2.jpg)">
			<div class="container">
				<div class="row slide-margin">
					<div class="col-sm-6">
						<div class="carousel-content">
							<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
							<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
							<a class="btn-slide animation animated-item-3" href="<?php echo base_url('frota/pesquisar');?>">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.item-->

		<div class="item" style="background-image: url(assets/images/slider/bg3.jpg)">
			<div class="container">
				<div class="row slide-margin">
					<div class="col-sm-6">
						<div class="carousel-content">
							<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
							<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
							<a class="btn-slide animation animated-item-3" href="<?php echo base_url('frota/pesquisar');?>">Read More</a>
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


<section id="feature">
	<div class="container">
		<div class="row">
			<div class=" col-xs-12 left wow fadeInDown">
				<h1>Heading</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-2 col-xs-offset-10 pull-right">
				<a href="<?php echo base_url('frota/pesquisar');?>" type="button" class="btn btn-primary botao_home pull-right">Frota</a>
			</div>
		</div>
	</div><!--/.container-->
</section><!--/#feature-->

<section id="services" class="service-item" style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
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
			<div class="col-sm-4">
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
</section>


<section id="partner">
	<div class="container">
		<div class="center wow fadeInDown">
			<h2>Nossos Parceiros</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>    

		<div class="partners">
			<ul>
				<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="assets/images/partners/alamo_logo_lrg.gif"></a></li>
				<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="assets/images/partners/avis_logo_lrg.gif"></a></li>
				<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="assets/images/partners/budget_logo_lrg.gif"></a></li>
				<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="assets/images/partners/europcar_logo_lrg.gif"></a></li>
				<li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="assets/images/partners/hertz_logo_lrg.gif"></a></li>
			</ul>
		</div>        
	</div><!--/.container-->
</section><!--/#partner-->


<section id="conatcat-info">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="pull-left">
						<i class="fa fa-phone"></i>
					</div>
					<div class="media-body">
						<h2></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Contacte-nos: +351 291 100 007</p>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.container-->    
</section><!--/#conatcat-info-->






</div>