<?php
	

	$category = get_the_category(); 
	$id =  $category[0]->cat_ID;
	get_header(); 
?>
<?php include('section-inf.php') ?>

<ul>
	<?php
		global $post;
			$args = array( 'numberposts' => 10, 'cat' => $id );
			$myposts = get_posts( $args );
			
		foreach( $myposts as $post ) : setup_postdata($post);
	?>
		<li>
			<a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?>
				<p><?php the_excerpt(); ?></p> <!-- CONTEUDO --> 
			</a></li>
<?php endforeach; ?>
</ul>

<?php get_footer(); ?> 
