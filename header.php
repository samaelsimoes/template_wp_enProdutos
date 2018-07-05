<!DOCTYPE html>
<html>
<head>
	<title> EnProdutos</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

	<title>
		<?php
				wp_title('|', true, 'right');
				bloginfo('name')
		?>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.2, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?ver=1.0"/>
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/css/bootstrap-grid.css">
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/css/bootstrap-reboot.css">

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet">

</head>
<body>
	<section class="section custom-banner-1"></section>

	<section class="custom-banner-2-cor">
		<div class="container">
				<div class="row custom-banner-2-padding1">
					<div class="col-md-4 custom-banner-2-padding">
						<div class="row ">
							<div class="col-md-6 custom-banner-2-img1 custom-banner-2-padding-cols">
								<spam>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/contato-telefone.svg">
								</span>
								<span>
									(41) 98818-5050 
								</span>				
							</div>
							<div class="col-md-6 custom-banner-2-img2 custom-banner-2-padding-cols">	
								<spam>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp.png">
								</span>					
								<span>
									(41) 98818-5050 
								</span>
							</div>
						</div>		
					</div>
					<div class="col-md-6 custom-banner-2-padding-cols custom-menu-header-banner-2">
						<ul class="nav justify-content-center custom-text-menus">
								<?php $items_menu_topo = wp_get_nav_menu_items('main-menu-top');?>
									<?php 
										if (!empty($items_menu_topo)) {
										  foreach ($items_menu_topo as $menu_topo) {
									?>
											<li class="nav-item menu-item-header1">

												<a href="<?php echo $menu_topo->url; ?>" class="nav-link" title="<?php echo $menu_topo->title; ?>">
													<?php echo $menu_topo->title; ?>
												</a>
											</li>
										<?php 
											};					
									  };
									?>
						</ul>
					</div>
				  <div class="col-md-2 custom-banner-2-padding-cols">
						<div class="row custom-rede-social custom-banner-2-padding-rede ">
							<div class="col col-md-4">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.svg">
								</a>
							</div>
							<div class="col col-md-4">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg">
								</a>
							</div>
							<div class="col col-md-4">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/youtube.svg">
								</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>	
	</section>	

	<section class="custom-banner-3-cor">
		<div class="row">
			<div class="col">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light custom-text-menus">

						<a class="navbar-brand custom-img-logo-banner-3" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo EnProdutos">
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-banner3" aria-controls="menu-banner3" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse custom-header-banner-3" id="menu-banner3">
							<ul class="navbar-nav">

								<?php
									$items_menu = wp_get_nav_menu_items('main-menu');

									if (!empty($items_menu)) {

										foreach ($items_menu as $menu) {
								?>
										<li class="nav-item menu-item-header1">
											<a href="<?php echo $menu_topo->url; ?>" class="nav-link custom-menu" title='<?php echo $menu_topo->title; ?>'>
												<?php echo $menu->title; ?>
											</a>
										</li>
									<?php
											};
										};
									?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>

