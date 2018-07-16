<section class="custom-color-footer">
    <div class="container">
        <div class='row custom-text-footer custom-padding-footer '>
            <div class="col-md-5">
                <div class="row">
                    <div class="col">           

                        <p>Fone: 55 (47) 99999-9999 </p>
                        <p>Fone: Claro (47) 99999-9999 </p>
                        <p>Fone: Tim (47) 99999-9999</p>
                        <p>Rua: asdasdasdasda</p>
                        <p>asdasdasdasdasdasda - Centro,</p> 
                        <p>CEP 99999-010 - Joinville/SC - Brasil </p> 
                        <p>testes@yahoo.com.br </p>
                    </div>                
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
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
            </div>
            <div class="col-md-2">
                <div class="row custom-banner-2">
                    <div class="col col-md-4">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.svg">
                        </a>
                    </div>
                    <div class="col col-md-4">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg">
                        </a>
                    </div>
                    <div class="col col-md-4">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/youtube.svg">
                        </a>
                    </div>
                </div>  
            </div>      
        </div> 
    </div>    
</section>
<section class="section">
    <div class="container" style="padding-top:  15px;">
        <div class="row custom-footer-direitos">
            <div class="col text-center">
                <a href="#">
                    <p class="copyright text-muted">Copyright &copy; Todos direitos reservados 2018</p>
                </a>
            </div>
        </div>   
    </div>    
</section>    

