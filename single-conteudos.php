<?php get_header(); ?>

<div id="fb-root"></div>
<script>
	(function(d, s, id) {

		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=588662397886785";
		fjs.parentNode.insertBefore(js, fjs);
	}	(document, 'script', 'facebook-jssdk'));
</script>

<?php include 'section-inf.php'?>

<section class="section container">
	<div class="row">
		<div class="col-md-8 custom-img-blog border">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

		    <div class="row">
				<img class="" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >
			</div>
			
			<div class="row custom-tamanho-conteudo">				
				<div class="col span-1-1 space-vertical custom-tamanho-texto">

					<h2> <?php the_time('d'); ?> / <?php the_time('M'); ?>	<!-- DATA --> </h2>

					<div class="space-vertical">

						<a href="<?php the_permalink();?>"> <?php the_title(); ?> </a> <!-- TITULO AQUI-->
					</div>
					
					<div class="space-vertical">

						<?php the_content(); ?> 
					</div>
	
					<h1 class="title-secundary">Deixe seu comentário</h1>
        			<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>	
					
					<?php endwhile; endif;?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			
			<?php get_sidebar('conteudos'); ?>
		</div>
    </div>
</section>

<?php get_footer(); ?> 

