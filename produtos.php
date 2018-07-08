<?php
/**
 * Template Name: Produtos
 */
	get_header();
?>
<section class="section padding-vertical-large">
	<div class="row space-vertical">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
		<div class="col span-1-2">
			<div class="item-photo2" style="background-image:url('<?php echo get_field("imagem2") ?>');">
								
				<div class="item-photo-hover"></div>
			</div>
		</div>
		<div class="col span-1-2 space-vertical custom-letra-especialidades">
			<div class="">
				
				 <h1><?php the_title(); ?></h1><!-- TITULO AQUI-->
			</div>
			
			<div class="space-vertical">

				<?php the_content(); ?> 
			</div>
			<div class="custom-conteudos align-center">
				<h3><a href="<?php echo site_url();?>/duvidas/ ">saiba mais</a></h3>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
</section>