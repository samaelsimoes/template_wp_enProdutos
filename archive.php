<?php
$cate = get_queried_object();

if($cate) {
	$cateID = $cate->term_id;
}
get_header(); ?>
<section class="section padding-vertical-large custom-section-grey">
	<div class="row phone-space-vertical">
		<div class="col span-3-5 space-vertical">
	 <?php
	 	//query 
			$args = array ('post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => '10', 'cat' => $cateID , 'paged' => $paged);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {
			    while ( $query->have_posts() ) {
			          $query->the_post(); { 

			           $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
			<div class="row">
				<a href="<?php the_permalink();?>" class="item item-news"> ASDAS DASD
					<div class="item-photo" style="background-image:url('<?php echo $thumb;?>');">
						<div class="item-photo-hover"></div>
					</div>
					<div class="item-content space-vertical">
						<hr class="hr-short"/>
						<p class="item-news-date"><?php the_time('d'); ?> / <?php the_time('M'); ?></p>
						<h1><?php the_title(); ?></h1>
						<p><?php the_excerpt(); ?></p>
						<div class="item-button"></div>
					</div>
				</a>	
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
		<div class="col span-2-5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>