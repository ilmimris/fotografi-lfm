<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title;?></title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?=asset_url()?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=asset_url()?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=asset_url()?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=asset_url()?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=asset_url()?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=asset_url()?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=asset_url()?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=asset_url()?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=asset_url()?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=asset_url()?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=asset_url()?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=asset_url()?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=asset_url()?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?=asset_url()?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=asset_url()?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- End Favicon -->
	
	<?=css('bootstrap.css')?>
	<?=css('font.css')?>
	<?=js('jquery.js')?>
	<?=js('bootstrap.min.js')?>
	<?=js('jquery-ui.min.js')?>
	<?=js('jquery.backstretch.min.js')?>
	<?=js('isotope.pkgd.min.js')?>
	<?=css('style.css')?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default ">
    
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand menu" href="#menu" rel="menu"><span class="box-shadow-menu" aria-hidden="true"></span></a>
      <a class="navbar-brand" href="<?= site_url()?>">
        <img alt="Brand" class="brand" src="<?= img_url()?>start.png">
      </a>
    </div>
    <div id="menu">
	    <ul class="nav navbar-nav">
	      <li class=""><a href="<?= site_url()?>fotografi/photos">P h o t o s</a></li>
	      <li><a href="#">D i n d i n g&ensp;K a r y a</a></li>
	      <li><a href="#">P r o j e c t</a></li> 
	      <li><a href="#">C o n t r i b u t o r s</a></li>
	      <li><a href="#">C o n t a c t&ensp;U s</a></li> 
	    </ul>
    </div>
  </div>
</nav>
<header>
<?php if ($this->session->flashdata('message')): ?>
   	<div class="alert alert-info fade in">
       	<a href="#" class="close" data-dismiss="alert">&times;</a>
        <?= $this->session->flashdata('message') ?>
	</div>
<?php endif; ?>
