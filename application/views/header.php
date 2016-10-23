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
	<?=css('slick.css')?>
	<?=css('slick-theme.css')?>
	<?=css('style.css')?>
	<?=css('typeahead.tagging.css')?>
	<?=js('jquery.js')?>
	<?=js('bootstrap.min.js')?>
	<?=js('jquery-ui.min.js')?>
	<?=js('jquery.backstretch.min.js')?>
	<?=js('slick.js')?>
	<?=js('libs/typeahead.bundle.min.js')?>
	<?=js('typeahead.tagging.js')?>

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
      <a class="navbar-brand menu_" href="#"  rel="menu"><span class="box-shadow-menu" aria-hidden="true"></span></a>
      <span class="offset4rem"></span>
      <a class="navbar-brand" href="<?= site_url()?>">
        <img alt="Brand" class="brand" src="<?= img_url()?>start.png">
      </a>
    </div>
    <div id="menu" class="menu">
	    <ul class="nav navbar-nav">
	      <li class="<?php if($this->uri->segment(2)=="photos"){echo "active";}?>"><a href="<?= site_url()?>fotografi/photos">P h o t o s</a></li>
	      <li class="<?php if($this->uri->segment(2)=="dk"){echo "active";}?>"><a href="<?= site_url()?>fotografi/dk">D i n d i n g&ensp;K a r y a</a></li>
	      <li class="<?php if($this->uri->segment(2)=="project"){echo "active";}?>"><a href="<?= site_url()?>fotografi/project">P r o j e c t</a></li> 
	      <li class="<?php if($this->uri->segment(2)=="contributor"){echo "active";}?>"><a href="<?= site_url()?>fotografi/contributor">C o n t r i b u t o r s</a></li>
	      <li class="<?php if($this->uri->segment(2)=="contact"){echo "active";}?>"><a href="<?= site_url()?>fotografi/contact">C o n t a c t&ensp;U s</a></li> 
	    </ul>
    </div>
    <?php if (!$islogin == 0) {?>
    <a href="<?=site_url()?>fotografi/edit_profile"><div id="profpic"><img class="img-circle" src="<?= img_url()."users_profile/_thumb/".$user->foto?>"></div></a>
    <?php } ?>
  </div>
</nav>
<header>

