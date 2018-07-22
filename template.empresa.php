<?php
    /**
 * Template Name: DuvidasFrequentes
 */
	get_header(); 
?>

<?php include 'section-inf.php'?>

<section class="section">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<div class="border">
					<?php
						$args = array
							(
							'post_type'      => 'QuemSomos',
							'order'          => 'DESC',
							'posts_per_page' => '12',
							'paged'          => $paged,
						);
							$query = new WP_Query($args);
							if ($query->have_posts()) {
								while ($query->have_posts()) {
									$query->the_post();{
										$thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					?>
					<div class="row">
						<div class="col custom-img-blog">
							<a href="<?php the_permalink();?>" class="item item-news">

								<a href="<?php the_permalink();?>">
									<img class="" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >
								</a>

								<div class="row">
									<div class="col">
										<div class="container-fluid">
											<a href="<?php the_permalink();?>">		
												<h1><?php the_title(); ?></h1>
											</a>
											<p class="item-news-date"><?php the_time('d'); ?> / <?php the_time('M'); ?></p>

											<p><?php the_excerpt(); ?></p>

											<div class="item-button"></div>

											<hr class="hr-short"/>
										</div>	
									</div>
								</div>
							</a>					
						</div>
					</div>	
					<?php
								}
							}
						}
					?>
				
					<?php
                        if ( $query->max_num_pages > 1 ) {
                    ?>
                    <div class="row">
                            <div class="col-md-6 text-left custom-bottom-pag  custom-bottom-pag-bt custom-padding-bottton-pag">
                                <ul>
                                    <li>
                                        <?php previous_posts_link('página anterior', $query->max_num_pages) ?>
                                    </li>
                                </ul>        
                            </div>
                            <div class="col-md-6 text-right custom-bottom-pag  custom-bottom-pag-bt custom-padding-bottton-pag">
                                <ul>
                                    <li>
                                        <?php next_posts_link('próxima página', $query->max_num_pages) ?>
                                    </li>
                                </ul>        
                            </div>
                    </div>
					<?php 
						} 
						wp_reset_postdata();
					?>		
				</div>	
			</div>
		</div>		
	</div>		
</section>			
<?php get_footer(); ?>