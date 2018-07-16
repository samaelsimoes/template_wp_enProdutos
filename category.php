<?php
	
	$category = get_the_category(); 
	$id =  $category[0]->cat_ID;

	get_header(); 
?>

<?php include('section-inf.php') ?>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 border custom-categoria ">
				<div class="row">
					<div class="col">
						<h1> Produtos </h1>
					</div>
				</div>	
				<div class="row">
					<div class="col">
						<div class="bordeer">
							<?php
								global $post;
									$args = array( 
										'numberposts' => 9999, 
										'posts_per_page' => '3',
										'order' 		 => 'DSC', 
										'category' 		 => $id 
									);
									
									$query = get_posts( $args );

								foreach( $query as $post ) : setup_postdata( $post );
								
							?>
								<a href="<?php the_permalink(); ?>"> 
									<?php the_title(); ?>
								</a>
								<img class="" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >

							   <span>
									<?php the_content();?>
								</span>

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
										
							<?php
								endforeach; 
							?>
				
						</div>
						
					</div>	
				</div>	
			</div>
			<div class="col-4">
				<?php get_sidebar(); ?> 
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?> 
