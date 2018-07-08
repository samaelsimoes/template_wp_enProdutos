<?php get_header(); ?>

<div id="fb-root"></div>
<script>
	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
 	 	js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=588662397886785";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<?php include('section-inf.php') ?>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-9 border">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					$thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
				?>			
				<div class="row">
					<div class="col custom-inf-produtos" style="padding: 0px;">
						<img class="" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >
					</div>
					<div class="col custom-inf-produtos">	
						<div class="row">
							<div class="col">
								<a>
									<h1>
										<?php the_title();?>
									</h1>
									<hr class="custom-efeito-titulo-menu">
								</a>

								<?php the_content();?>
							</div>	
						</div>						

						<div class="row">
							<div class="col-sm-3" style="padding-top:  5px;">
								<h3> Valor: </h3> 
							</div>
							<div class="col-sm-9">
								<span> 
									R$ <?php echo get_field("preco") ?>
								</span>		
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-3" style="padding-top:  5px;">
								<h3> Frete: </h3> 
							</div>
							<div class="col-sm-9">
								<span> 
									<?php 
										if( get_field("frete") ) {
											echo get_field("frete");
										} else {
											echo "Para todo o brasil";
										};								
									?>
								</span>		
							</div>
						</div>	

						<div class="row">
							<div class="col-sm-3 custom-padding-produto-fixo">
								<h3> Tamanho:  </h3> 
							</div>
							<div class="col-sm-9">
								<span> 
									<?php echo get_field("tamanho_mesa") ?>
								</span>		
							</div>
						</div>

						<br>

						<div class="row">
							<div class="col">										
								<div class="row">
									<div class="col-sm-3 custom-padding-produto-fixo">
										<h3 style="color: #ed5b28;"> Contato:  </h3> 
									</div>									
								</div>	
								<div class="row">
									<div class="col-sm-4 custom-padding-produto-fixo">
										<h3> Whatsapp:  </h3> 
									</div>
									<div class="col-sm-8 custom-padding-produto-fixo" style="margin-top: -6px;">
										<span> (47) 99999 - 8888  </span> 
									</div>
								</div>	
								<div class="row">
									<div class="col-sm-4">
										<h3> Comercial:  </h3> 
									</div>
									<div class="col-sm-8" style="margin-top: -6px;">
										<span> (47) 99999 - 8888  </span> 
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="row custom-padding-produto-comentario">
					<div class="col">
						<h1 class="title-secundary">Deixe seu comentário</h1>
						<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>	
						
						<?php endwhile; endif;?>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<?php get_sidebar(); ?> 
			</div>
		</div>	
	</div>
</section>

<?php get_footer(); ?> 

