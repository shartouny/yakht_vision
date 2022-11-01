    <!-- footer start  -->
    <footer class="p-md-5 p-2 " id="footer">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-3 col-md-6 p-3 ">
                    <div class="row h-100">
                        <div class="col-12 my-auto my-lg-0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pictures/logo-white.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>

                <div class="col-lg-3 col-md-6 p-3 ">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'footer-menu1',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'px-2 h-100',
                        'container_id'    => 'navbarSupportedContent',
                        'menu_class'      => 'list-unstyled m-0 h-100 d-flex flex-column justify-content-between my-border-left',
                        'link_class'      => 'nav-link'
                    ));
                    ?>

                    <hr class="d-sm-none">
                </div>

                <div class="col-lg-3 col-md-6 p-3">
                    <div class="px-2 h-100 ">
                        <h5><?php _e('Brand New') ?></h5>
                       <ul class="list-unstyled m-0 h-100 d-flex flex-column justify-content-between my-border-left ">
                            <li>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'footer-menu2',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'px-2 h-100',
                            'container_id'    => 'navbarSupportedContent',
                            'menu_class'      => 'styled h-100 d-flex flex-column justify-content-between',
                            'link_class'      => 'nav-link'
                        ));
                        ?>
                      
                               
                            </li>
                        </ul> 
                    </div>
                    <hr class="d-sm-none">
                </div>

                <div class="col-lg-3 col-md-6 p-3">
                    <div class="px-2 h-100">
                        <ul class="list-unstyled m-0 h-100 d-flex flex-column justify-content-between my-border-left ">
                            <li>
                                <?php dynamic_sidebar('sidebar-3') ?>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-md-left text-center">All rights are reserved Yacht Vision 2020</h6>
                    <hr class="d-sm-none">
                </div>
                <div class="col-md-6">
                    <h6 class="text-md-right text-center">by <a href="#"> Dow Group</a></h6>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer end  -->

    <?php wp_footer(); ?>
    </body>

    </html>