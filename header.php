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
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<script>
		wow = new WOW(
				{
				boxClass:     'wow',      // default
				animateClass: 'animated', // default
				offset:       0,          // default
				mobile:       true,       // default
				live:         true        // default
			}
		)
		wow.init();
	</script>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'uT1lgDA5cH';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</head>
<body> 
	<section class="section custom-banner-1 ">
		<div class="container">
			<div class="row wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0s">
				<div class="col-md-2 custom-banner-2-img1 custom-banner-1-padding-cols">
					<spam>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/contato-telefone.svg">
					</span>
					<span>
						(47) 3467-7079
					</span>				
				</div>
				<div class="col-md-2 custom-banner-2-img2 custom-banner-2-padding-cols">	
					<spam>									
						<img src="<?php echo get_template_directory_uri(); ?>/assets/whatsapp.png">
					</span>					
					<span>
						(47) 8848-5920
					</span>
				</div>
				<div class="col-md-4 custom-banner-2-img2 custom-banner-2-padding-cols">												
					<span>
						EnProdutos  MESAS DE BILHAR E SINUCA
					</span>
				</div>
			</div>		
		</div>
		
	</section>

	<section class="section wow bounceInDown" data-wow-duration="3s" data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand custom-img-logo-banner-3" href="<?php echo site_url () ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo EnProdutos">
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-banner3" aria-controls="menu-banner3" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse custom-header-banner-3 custom-menu-banner-2" id="menu-banner3">
							<ul class="navbar-nav">
								<?php
									$items_menu = wp_get_nav_menu_items('main-menu');
									if (!empty($items_menu)) {
										foreach ($items_menu as $menu) {
								?>
										<li class="nav-item menu-item-header1">
											<a href="<?php echo $menu->url; ?>" class="nav-link custom-menu" title='<?php echo $menu->title; ?>'>
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
				<div class="col-md-3 custom-banner-2-padding">
					<div class="row  custom-banner-2">
						<div class="col col-md-4">
							<a href="https://www.facebook.com/En-Produtos-416234488576856/">
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
	</section>	