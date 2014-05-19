<!Doctype html>
<!--[if lt IE 7]><html lang="es-mx" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="es-mx" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="es-mx" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="es-mx" class="no-js"><!--<![endif]-->

	<head>
		<meta charset="UTF-8">
	
		<meta name="author" content="The NuevaWeb Team">
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

		<?php //This is my custom stylesheet ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
		<?php // icons & favicons ?>
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/assets/apple-icon-touch.png">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/assets/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/assets/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f8e047">
		<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/assets/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

		<?php // Your Google Analytics goes here. ?>

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
						
						<a href="<?php echo home_url(); ?>">
							<div class="logo-img">
							</div>
						</a><!--logo-img end-->
					</div><!--col-xs-4 end-->
					<div class="col-xs-8">
						<div class="main-menu broker-m-style">
						<?php wp_nav_menu(array('theme_location'=>'principal')); ?>
						</div><!--main-menu broker-m-style end-->
					</div><!--col-xs-8 end-->
				</div><!--row end-->
			</div><!--container end-->
		</div><!--broker-header end-->