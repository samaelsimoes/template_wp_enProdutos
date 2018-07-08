<nav class="nav custom-menu-produto">
	<div class="card">
		<div class="card-body">	
			<?php 
				$items_menu_produtos = wp_get_nav_menu_items('menu-produtos');
				if (!empty($items_menu_produtos)) {
					foreach ($items_menu_produtos as $menu_produto) {
				?>
				<li class="nav-item">

					<a href="<?php echo $menu_produto->url; ?>" class="nav-link " title="<?php echo $menu_produto->title; ?>">
						<?php echo "- ". $menu_produto->title; ?>
					</a>
				</li>
				<?php 
					};
				};
			?>
		</div>
	</div>
</nav>				
