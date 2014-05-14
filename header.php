<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Broker Services</title>

		<script scr="<?php bloginfo( 'template_url' ); ?>/lib/bootstrap-3.1.1/js/jquery-1-11.0.min.js"></script>
		<script scr="<?php bloginfo( 'template_url' ); ?>/lib/bootstrap-3.1.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
<?php wp_head(); ?>
	</head>
	<body>
		<div class="broker-header">	
			<div class= "row">		
				<div class=" col-xs-4 yellow-color"></div>
				<div class="col-xs-8 grey-color"></div>
			</div><!--row end-->
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div class="logo-img"></div><!--logo-img end-->
					</div><!--col-xs-4 end-->
					<div class="col-xs-8">
						<div class="main-menu broker-m-style">
						<?php wp_nav_menu(array('theme_location'=>'principal')); ?>
						</div><!--main-menu broker-m-style end-->
					</div><!--col-xs-8 end-->
				</div><!--row end-->
			</div><!--container end-->
		</div><!--broker-header end-->