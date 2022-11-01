<?php
$header = 'sticky-top';
get_header();

?>
<!-- header content start  -->
<div id="header-banner">
    <style>

    </style>
    <?php $bannerImg = get_post_meta(get_the_ID(), 'banner')[0]; ?>
    <div class="row">
        <div class="col-12 position-relative">
            <img src="<?php echo $bannerImg; ?>" alt="" class="img-fluid">
            <div class="row position-absolute top-0 w-100 h-100 text-center bg-shadow-dark">
                <div class="col-md-4 mx-auto my-auto">
                    <h1><?php the_title() ?></h1>
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

<section id="product-content-section" class="bg-light-gray p-5">
    <div class="container">
        <?php
        $product_logo = get_post_meta(get_the_id(), 'productlogo')[0];
        $website = get_post_meta(get_the_id(), 'website')[0];
        // $args = array(
        //     'post_type' => 'products'
        // );
        // $products = new WP_Query($args);
        // if ($products->have_posts()) {
        //     while ($products->have_posts()) {
        //         $products->the_post();
        ?>
                <div class="row mt-lg-5">
                    <div class="col-lg-7 mt-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <img src="<?php echo $product_logo; ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="row mt-md-4 mt-2">
                                    <div class="col-6">
                                        <a href="<?php echo 'https://'. $website; ?>" class="btn btn-primary pr-5">Visit Site : <?php echo $website; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 p-lg-0 mt-5">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="not found" class="img-fluid">
                    </div>
                </div>
        <?php        
        //     }
        //     wp_reset_postdata();
        // }
        ?>
    </div>
</section>
<!-- products-detail section end  -->
<!-- other products section start  -->
<section class="p-2 p-md-5">
    <?php $textColor = "";
    $sectionTitle = "other products ";
    get_template_part('includes/other-products');
    ?>
</section>
<!-- other products section end  -->
<!-- page content end  -->
<?php get_footer(); ?>