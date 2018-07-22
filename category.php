<?php
	$objeto = get_queried_object();	
	get_header(); 
?>

<?php include('section-inf.php') ?>

<section class="custom-text custom-padding-section custom-banner-4-cor custom-produtos">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2" style="padding-bottom: 25px; padding-top: 10px">
				<div class="row">
					<div class="col">
						<div class="card" >
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="border-bottom" style="padding-bottom:5px;">
											<h2> Mesas e acessórios </h2>
										</div>
									</div>
								</div>

								<div class="row custom-padding-produtos">
									<div class="col">
										<nav class="nav flex-column custom-menu-produto">

											<?php
												$items_menu_produtos = wp_get_nav_menu_items('menu-produtos');
												if (!empty($items_menu_produtos)) {
													foreach ($items_menu_produtos as $menu_produto) {
											?>
												<li class="nav-item">

													<a href="<?php echo $menu_produto->url; ?>" class="nav-link " title="<?php echo $menu_produto->title; ?>">
														<?php echo $menu_produto->title; ?>
													</a>
												</li>
											<?php
													};
												};
											?>
										</nav>
									</div>
								</div>

								<div class="row">
									<div class="col custom-acessorios" style="padding-top:15px">
										<p class="card-text">
											Mesa sedução: 1,90 X 1,10 OU 2,20 X 1,20 <br>
											12 x 352,00 - Mesa. <br>
											12 x 387,00 - Com tampo fosco. <br>
											12 x 430,00 - Tampo + 2 bancos ( AMBOS FOSCO). <br>
											12 x 397,00 - Com tampo AUTO BRILHO. <br>
											12 x 450,00 - Tampo + 2 bancos ( AMBOS AUTO BRILHO). <br>
										</p>

										<h5>
											À vista -> 12% de desconto.✅<br>
										</h5>

										<h5>
											👉Estampas acrescenta R$ 200,00.
										</h5>

										<h5>
											ACOMPANHA:
										</h5>
										<p>

											✓ Jogo de 15 bolas
											✓ 5 tacos
											✓ Porta Tacos
											✓ Porta tacos
											✓ Kit giz
										</p>

										<h5> FRETE E MONTAGEM GRÁTIS 🚚💨 </h5>
									</div>
								</div>

								<a href="#" class="card-link">Mesa de sinuca</a>
								<a href="#" class="card-link">Acessórios</a>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10">

				<div class="row">
					<div class="col" style="padding-top: 15px;">
						<h1> 
							<?php echo $objeto->name; ?> 
						</h1>
						<hr class="custom-efeito-titulo-menu">
					</div>
				</div>
				<div class="row">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$poucas_paginas = new WP_Query(
							array(
								'posts_per_page' => '12',
								'cat'   		 => $objeto->cat_ID,
								'order' 		 => 'DESC', 
								'paged' 		 => $paged
							)
						);
						if( $poucas_paginas->have_posts() ) {
							while( $poucas_paginas->have_posts() ) {
								$poucas_paginas->the_post();{
									?>
										<div class="col-md-3 custom-img-produtos custom-col-produtos">
											<div class="border" style="height: 600px;">
												<div class="row">
													<div class="col">
														<a href="<?php the_permalink();?>">
															<img class="" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >
														</a>
													</div>
												</div>
												<div class="row" style="height: 215px;">
													<div class="col">
														<div class="container-fluid custom-categoria">
															<div class="row">
																<div class="col">
																	<div class="custom-categoria-padding">
																		<a href="<?php the_permalink(); ?>"> 
																			<?php the_title(); ?>
																		</a>				
																	</div>			
																</div>
															</div>																	

															<div class="row">
																<div class="col-sm-3">
																	<h3> Valor: </h3> 
																</div>
																<div class="col-sm-9">
																	<span class="align-middle"> 
																		R$ <?php echo get_field("preco") ?>
																	</span>		
																</div>
															</div>	

															<div class="row">
																<div class="col-sm-3">
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
																<div class="col-sm-3">
																	<h3 style="color: #ed5b28;"> Contato:  </h3> 
																</div>									
															</div>	
															<div class="row">
																<div class="col-sm-4">
																	<h3> Whatsapp:  </h3> 
																</div>
																<div class="col-sm-8 custom-padding-produto-fixo">
																	<span class="align-middle"> (47) 99999 - 8888  </span> 
																</div>
															</div>	

															<div class="row">
																<div class="col-sm-4">
																	<h3> Comercial:  </h3> 
																</div>
																<div class="col-sm-8">
																	<span class="align-middle"> (47) 99999 - 8888  </span> 
																</div>
															</div>

															<div class="row">
																<div class="col">
																	<span>
																		<?php the_content();?>
																	</span>
																</div>
															</div>		
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
								}
							}
						}
					?>	
				</div>	
				<div class="row custom-bottom-pag">
					<?php 
						if( !function_exists('wp_pagenavi') ){
					?>
						<div class="col text-left custom-bottom-pag-bt custom-padding-bottton-pag">
							<ul>
								<li>
									<?php 
										previous_posts_link( '&laquo; Página Anterior' );
									?>
								</li>
							</ul>	
						</div>
						<div class="col text-right custom-bottom-pag-bt custom-padding-bottton-pag">
							<ul>
								<li>
									<?php 
										next_posts_link( 'Próxima página &raquo;', $poucas_paginas->max_num_pages );
									?>
								</li>
							</ul>		
						</div>
					<?php 
						} else {
							wp_pagenavi(array( 'query' => $poucas_paginas )); 
						} 
						wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>           
	</div>
</section>



<?php get_footer(); ?> 
