<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<div class="border-bottom" style="padding-bottom:5px;">
							<h2> Mesas e acessórios </h2>
						</div>
					</div>
				</div>
				<div class="row custom-padding-produtos">
					<div class="col">
						<nav class="nav flex-column custom-menu-produto">
							<?php
								$items_menu_produtos = wp_get_nav_menu_items('menu-produtos');
								if (!empty($items_menu_produtos)) {
									foreach ($items_menu_produtos as $menu_produto) {
							?>
								<li class="nav-item">

									<a href="<?php echo $menu_produto->url; ?>" class="nav-link " title="<?php echo $menu_produto->title; ?>">
										<?php echo $menu_produto->title; ?>
									</a>
								</li>
							<?php
									};
								};
							?>
						</nav>
					</div>
				</div>

				<div class="row">
					<div class="col custom-acessorios" style="padding-top:15px">
						<p class="card-text">
							Mesa sedução: 1,90 X 1,10 OU 2,20 X 1,20 <br>
							12 x 352,00 - Mesa. <br>
							12 x 387,00 - Com tampo fosco. <br>
							12 x 430,00 - Tampo + 2 bancos ( AMBOS FOSCO). <br>
							12 x 397,00 - Com tampo AUTO BRILHO. <br>
							12 x 450,00 - Tampo + 2 bancos ( AMBOS AUTO BRILHO). <br>
						</p>

						<h5>
							À vista -> 12% de desconto.✅<br>
						</h5>

						<h5>
							👉Estampas acrescenta R$ 200,00.
						</h5>

						<h5>
							ACOMPANHA:
						</h5>
						<p>

							✓ Jogo de 15 bolas
							✓ 5 tacos
							✓ Porta Tacos
							✓ Porta tacos
							✓ Kit giz
						</p>

						<h5> FRETE E MONTAGEM GRÁTIS 🚚💨 </h5>
					</div>
				</div>

				<a href="http://localhost/enProdutos/categoria/mesa-de-sinuca/" class="card-link">Mesa de sinuca</a>
				<a href="http://localhost/enProdutos/categoria/acessorios/" class="card-link">Acessórios</a>

			</div>
		</div>
	</div>
</div>