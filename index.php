<?php get_header();?>

    <section class="custom-text custom-padding-section custom-banner-4-cor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" style="padding-bottom: 25px;"> 
                    <div class="border">               
                        <div class="row"  style="padding-top:  20px;">
                            <div class="col">
                                <h2 style="font-weight: bold;"> Mesas e acessórios </h2>   
                            </div>
                        </div>        
                        <div class="row">
                            <div class="col  ">
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
                            <div class="container">
                                <div class="col custom-menu-produtos border-top">
                                <p><h2> EnProdutos </h2></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>    
                        </div>    
                    </div>    
                </div>

                <div class="col-sm-10">
                    <div class="row">
                        <div class="col">
                            <p>Comprar Mesas de Sinuca e Jantar Personalizadas até em 12x no cartão. </p>
                            <p> COMPRE AQUI sua mesa de bilhar e jantar FRETE GRÁTIS e Pagamento na entraga! </p>
                        </div>    
                    </div> 
                    <div class="row custom-padding-produtos">
                        <div class="col">
                            <h1>Produtos em destaque</h1>
                            <hr class="custom-efeito-titulo-menu">
                        </div>
                    </div>

                    <div class="row ">
                        <?php
                            $args = array
                                (
                                'post_type' => 'Produtos',
                                'order' => 'DSC',
                                'posts_per_page' => '60',
                                'paged' => $paged,
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();{
                                        $e++;
                                        $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            ?>
                            <div class=" col-sm-3 custom-padding-card ">
                                <div class="card custom-img-card">
                                    <img class="card-img-top" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >
                                    <div class="card-body custom-text-card custom-height-card" style="padding: 15px;">

                                        <a href="<?php the_permalink();?>">
                                            <h1 class="card-title"><?php the_title();?></h1>
                                        </a>

                                        <p class="text-truncate">
                                            <span>Informações: <?php the_content();?></span>

                                        </p>

                                        <p class="card-text">
                                            <span>Tamanho: </span>
                                            <?php echo get_field("tamanho") ?>
                                        </p>

                                        <p class="card-text">
                                            <span> Valor: </span>
                                            <?php echo get_field("valor") ?>
                                        </p>

                                        <p>
                                            <a href="<?php the_permalink();?>">Mais informações</a>
                                        <p>
                                    </div>
                                </div>
                            </div>
                        <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-text-infs custom-banner-5-cor ">
        <div class="container">
            <div class="row padding-menus custom-infs">
                <div class="col">
                    <h2>Frete grátis</h2>
                    <hr class="custom-efeito-titulo-menu-inf ">
                </div>
                <div class="col">
                    <h2>Pagamento na entrega</h2>
                    <hr class="custom-efeito-titulo-menu-inf ">
                </div>
                <div class="col">
                    <h2>Valores a vista é parcelado em até 12 x</h2>
                    <hr class="custom-efeito-titulo-menu-inf ">
                </div>
            </div>
        </div>
    </section>

    <section class="custom-banner-4-cor">
        <div class="row">
            <div class="col">
                <div id="produtosSlider" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">

                        <li data-target="#produtosSlider" data-slide-to="0" class=""></li>

                        <?php
                            $args = array 
                                        (
                                            'post_type' => 'BannerSlide', 
                                            'order' => 'DSC', 
                                            'posts_per_page' => '10', 
                                            'paged' => $paged
                                        );
                            $query = new WP_Query( $args );
                            $i = 0;
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) { 
                                    $query->the_post(); {    
                                        $i++;                        
                        ?>	

                            <li data-target="#produtosSlider" data-slide-to="<?php echo $i ?>" class="<?php if( i == 1 ) { echo 'active'; }; ?>"></li>

                        <?php 
                                    }     
                                } 
                            } 
                        ?>    
                    </ol>
                    <div class="carousel-inner">
                        <?php
                            $args = array 
                                        (
                                            'post_type' => 'BannerSlide', 
                                            'order' => 'DSC', 
                                            'posts_per_page' => '5', 
                                            'paged' => $paged
                                        );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {    
                                    $query->the_post(); { 
                                        $c++;
                                        $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>                
                        <div class="carousel-item  <?php if( $c == 1 ) { echo 'active'; };?>">
                            <img class="d-block w-100" src="<?php echo get_field("imagem") ?>" alt="<?php the_title(); ?>" >
                            <div class="container custom-esconde-texto">
                                <div class="carousel-caption text-left custom-carrousel-color">
                                    <a href="#">
                                        <h1><?php the_title(); ?></h1>
                                    </a>
                                    <p class="text-truncate">
                                        <?php the_content(); ?>      
                                    </p>
                                    <p>
                                        <a class="btn btn-xs btn-outline-primary" href="#" role="button">Category</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                            <?php 
                                        }
                                    } 
                                } 
                            ?>   
                    </div>
                    <a class="carousel-control-prev" href="#produtosSlider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#produtosSlider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>    

    <?php get_footer();?>

</body>
</html>