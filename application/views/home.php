<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid remove_padding">


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
						<div class="panel-heading text-center"><b>Mercedes</b></div>
						<div class="panel-body panel_home">
							<img src="<?php echo base_url('assets/images/slider/bg4.jpg')?>" class="img-responsive" alt="Responsive image">
							<p class="lead pull-left" style="color:gray;">Deste 30€/dia</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><b>Cancelamento Gratuito</b></div>
						<div class="panel-body panel_home">
							<!-- <img src="<?php //echo base_url('assets/images/bmw.jpg')?>" class="img-responsive" alt="Responsive image"> -->
							<p class="lead pull-left" style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading text-center"><b>Reserve online</b></div>
						<div class="panel-body panel_home">
							<img src="<?php echo base_url('assets/images/gallery/gallery4.jpg')?>" class="img-responsive" alt="Responsive image">
							<p class="lead pull-left" style="color:gray;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="partner">
		<div class="container">
			<div class=" wow fadeInDown">
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
			</div><br>        
		</div><!--/.container-->
		<br>
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