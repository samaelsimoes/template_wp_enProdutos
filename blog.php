<?php
/**
 * Template Name: Blog
 */
get_header(); ?>
<section class="section space-vertical padding-vertical-small custom-banner-branco">
	<aside id="quemSomos" role="complementary">
		<div class="row ">
			<div class="row align-center padding-vertical-xlarge">

				<?php
				
		 		//query 
					global $paged;
					$curpage = $paged ? $paged : 1;

					$args = array ('post_type' => 'Blog', 
								   'order' => 'DSC', 
								   'posts_per_page' => '10', 
								   'paged' => $paged);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {

					    while ( $query->have_posts() ) {
					          	
					        $query->the_post(); { 
				           	$thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>	<!-- imagem-post -->

							<div class="col space-1-3 space-vertical">
								<div class=" align-center">
									<div class="item-photo-banner" style="background-image:url('<?php echo get_field("imagem") ?>');">

										<div class="item-photo-hover"></div>
									</div>
								</div>
								<div class="">
									
									<a href="<?php the_permalink();?>">	<h2> <?php echo get_field('titulo') ?> </h2></a>
								</div>

								<div class="">
									<?php the_content() ?>
								</div>
							</div>
							<?php 
							}
						} 
					} 

					wp_reset_postdata();
					if ( $query->max_num_pages > 1 ) {
				 ?>
					<div class="row">
							<div class="col span-1-2 custom-blog-nav">
								<?php previous_posts_link('página anterior', $query->max_num_pages) ?> &nbsp;
							</div>
							<div class="col span-1-2 custom-blog-nav align-right">
								<?php next_posts_link('próxima página', $query->max_num_pages) ?>
							</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</aside>
</section>


<?php get_footer(); ?> 

