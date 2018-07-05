<?php
/**
 * Template Name: Page
 */
?>
<?php get_header(); ?>

<section class="section custom-banner-cinzaEscuro padding-vertical-xlarge">
	<div class="row align-middle space-vertical custom-blog">
		<div class="col align-left algin-center">

			<h1><?php the_title();?></h1>		
		</div>
	</div>
</section>
<section class="section custom-section-content padding-vertical-large custom-banner-cinza">
	<div class="row phone-space-vertical">
		<div class="col span-1-2 space-vertical custom-texto-baneer-3 algin-center">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content();?>			
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php include('footer-faleConosco.php') ?>

<?php get_footer(); ?>