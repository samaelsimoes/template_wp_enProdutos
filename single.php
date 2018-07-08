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
	<div class="row ">
		<div class="col">			
			<div class="container">	
				<h1> Conteúdos arquivos singles </h1>
			</div>				
		</div>
	</div>
</section>

<section class="section">
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="row">
					<div class="col-md-9">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							$thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
						?>

						<div class="item-photo" style="background-image:url('<?php echo $thumb;?>');">

							<div class="item-photo-hover"></div>
						</div>
						
						<div class="row">
							<div class="col">
								
								<h2> <?php the_time('d'); ?> / <?php the_time('M'); ?>	 </h2> 
								
								<div class="space-vertical">

									<h1>
										<a href="<?php the_permalink();?>"> <?php the_title(); ?>
									</h1> <!-- TITULO AQUI-->

									<div class="fb-share-button" style="margin-bottom:10px;" data-href="<?php echo get_permalink( $post->ID );?>" data-type="button_count"></div>
								</div>

								<div class="">

									<?php the_content(); ?> 
								</div>
								
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
		</div>
	</div>	
</section>
<?php include('footer.php') ?>

<?php get_footer(); ?> 

