<?php
$cate = get_queried_object();
$cateID = $cate->term_id;

get_header(); ?>

<section class="section custom-banner-cinzaEscuro padding-vertical-xlarge">
	<div class="row align-middle space-vertical custom-blog">
		<div class="col align-left">
			
			<h1> blog </h1>			
		</div>
	</div>
</section>

<section class="section custom-banner-cinza">
	<div class="row phone-space-vertical padding-vertical-xlarge">
		<div class="col span-2-3  space-vertical ">

	    	<?php

	 		//query 

			$args = array ('post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => '3', 'paged' => $paged);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {
			    while ( $query->have_posts() ) {

				    $query->the_post(); { 
				    $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>			
				<div class="custom-banner-branco space-vertical">
					
					<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

					<div class="item-photo" style="background-image:url('<?php echo $thumb;?>');">

						<div class="item-photo-hover"></div>
					</div>
					
					<div class="row custom-tamanho-conteudo  ">
						<div class="col span-1-1 space-vertical custom-tamanho-texto">		
								
							<h2><?php the_time('d'); ?> / <?php the_time('M'); ?></h2><!-- DATA -->

							<h1> <a href="<?php the_permalink();?>">	<?php the_title(); ?> </a> </h1><!-- TITULO AQUI-->
							<p><?php the_excerpt(); ?></p> <!-- CONTEUDO --> 
						</div>
					</div>			
				</div>
		<?php 

					}
				} 
			} 

			wp_reset_postdata();

		?>
			<?php

			//navigation 

			if( $query->max_num_pages>1 ) { ?>

				<div class="custom-botao-paginas padding-vertical-medium">
					<div class="row ">

						<div class="col align-left ">  

							<?php previous_posts_link('página anterior', $query->max_num_pages) ?> &nbsp;
						</div>

						<div class="col  align-right ">

							<?php next_posts_link('próxima página', $query->max_num_pages) ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div class="col span-1-3 space-vertical ">
			
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php include('footer.php') ?>

<?php get_footer(); ?> 
