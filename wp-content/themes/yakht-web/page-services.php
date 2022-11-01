<?php
$header = 'sticky-top';
get_header();
?>
<!-- header content start  -->
<div id="header-banner">
    <div class="row">
        <div class="col-12 position-relative">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            <div class="row position-absolute top-0 w-100 h-100 text-center bg-shadow-dark">
                <div class="col-md-4 mx-auto my-auto">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row position-absolute w-100 justify-content-center">
                <div class="col d-flex justify-content-center">
                    <a href="#footer" id="tofooter" class="scroll-down-btn scroll-to"><i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header content end  -->
<!-- page content start  -->
<!-- products-detail section start  -->
<section id="services-content-section" class="bg-light-gray-img pt-5">
    <div class="container services">
        <?php
        $args = array(
            'post_type' => 'services',
            'post_status' => 'publish'
        );
        $services = new WP_Query($args);
        if ($services->have_posts()) {
            while ($services->have_posts()) {
                $services->the_post();

        ?>
                <!-- service start  -->
                <div class="service my-5">
                    <!-- service img start  -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="not found">
                    <!-- service img end  -->
                    <div class="container p-5">
                        <div class="row h-100 p-1 py-lg-1">
                            <div class="col-12 my-auto">
                                <h2><span><?php the_title() ?></span></h2>
                                <p><?php the_content(); ?></p>

                            </div>
                        </div>
                    </div>
                </div>
        <?php  }
            wp_reset_postdata();
        } else{?>
        <h1><?php the_content(); ?></h1>
        <?php } ?>
        <!-- service end  -->
    </div>
</section>
<!-- page content end  -->
<?php get_footer(); ?>