    <?php get_header();?>

<?php include('section-inf.php') ?>

    <section class="custom-text custom-padding-section custom-banner-4-cor custom-produtos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" style="padding-bottom: 25px;"> 
               
                    <div class="row">
                        <div class="container">
                            <div class="col custom-produtos border-top">     
                                <div class="card" >
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
                                        
                                        <a href="#" class="card-link">Mesa de sinuca</a>
                                        <a href="#" class="card-link">Acessórios</a>

                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>

                <div class="col-sm-10">                   
                    <div class="row">
                        <div class="col" style="padding-top: 15px;">
                            <h1>Produtos em destaque</h1>
                            <hr class="custom-efeito-titulo-menu">
                        </div>
                    </div>

                    <div class="row">
                        <?php
                            $args = array
                                (
                                'post_type' => 'post',
                                'order' => 'DSC',
                                'posts_per_page' => '60',
                                'paged' => $paged,
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();{
                                    
                                        $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));        
                        ?>
                            <div class="col-md-3 custom-img-produtos custom-col-produtos ">
                                <div class="border">                                    
                                    <div class="row">
                                        <div class="col">
                                            <a href="<?php the_permalink();?>">
                                                <img class="" src="<?php echo get_field("imagem") ?>" alt="<?php the_title();?>" >
                                            </a>    
                                        </div>
                                    </div>   
                                    <div class="row" style="height: 215px;">
                                        <div class="col">
                                            <div class="container-fluid custom-padding-produtos">
                                                <a href="<?php the_permalink();?>">
                                                    <h2>
                                                        <?php the_title();?>
                                                    </h2>
                                                    <hr class="custom-efeito-titulo-menu">
                                                </a>
                                        
                                                <p>
                                                    <span>
                                                        <?php the_content();?>
                                                    </span>
                                                </p>
                                    
                                                <p style="<?php if( !get_field("tamanho_mesa") ) { echo 'display:none'; };?>"
                                                    <span>Tamanho: </span>
                                                    <?php echo get_field("tamanho_mesa") ?>
                                                </p>

                                                <p>
                                                    <span> Valor: R$</span>
                                                    <?php echo get_field("preco") ?>
                                                </p>    
                                                <p>
                                                    <a href="<?php the_permalink();?>">Mais informações</a>
                                                <p>                                             
                                            </div>                                                
                                        </div>
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
</body>
</html>