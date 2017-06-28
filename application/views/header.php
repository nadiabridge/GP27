<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-xs-6">
        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +351 291 100 007</p></div>
      </div>
      <div class="col-sm-6 col-xs-6">
       <div class="social">
        <ul class="social-share">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
           <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
</div><!--/.container-->
</div><!--/.top-bar-->

<nav class="navbar navbar-inverse" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php //<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a> ?>
      <a class="navbar-brand" href="<?php echo base_url('');?>">GET a CAR</a>
    </div>

    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li <?php echo setMenuActiveItem($active_item == 'home')?> >
          <a href="<?php echo base_url('');?>">Home</a>
        </li>
        <li class="<?php echo setMenuActiveItem($active_item == 'about');?>">
          <a href="<?php echo base_url('publico/about');?>">Sobre</a>
        </li>

        <li class="<?php echo setMenuActiveItem($active_item == 'frota').' dropdown';?>">
          <a href="<?php echo base_url('frota/pesquisar');?>" class="dropdown-toggle" data-toggle="dropdown">Frota Automóvel <i class="fa fa-angle-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('frota/pesquisar');?>">Pesquisar</a></li>
            <li><a href="<?php echo base_url('frota/adicionar');?>">Adicionar Novo</a></li>
          </ul>
        </li>
 
        <li class="<?php echo setMenuActiveItem($active_item == 'contact');?>">
          <a href="<?php echo base_url('publico/contact');?>"> Contacto </a>
        </li>                    
      </ul>
    </div>
  </div><!--/.container-->
</nav><!--/nav-->

