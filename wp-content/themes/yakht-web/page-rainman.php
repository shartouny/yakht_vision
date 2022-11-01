<?php
$header = 'sticky-top';
get_header();
?>
<!-- header content start  -->
<div id="header-banner">
    <style>

    </style>
    <div class="row">
        <div class="col-12 position-relative">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            <div class="row position-absolute top-0 w-100 h-100 text-center bg-shadow-dark">
                <div class="col-md-4 mx-auto my-auto">
                    <h1>rainman</h1>
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

        <div class="row mt-lg-5">
            <div class="col-lg-7 mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-2">
                            <div class="col-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets\pictures\logo-product-2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="row mt-md-4 mt-2">
                            <div class="col-6">
                                <a href="#" class="btn btn-primary pr-5">Visit Site : www.rainmandesal.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-lg-0 mt-5">
                <img src="assets\pictures\rainman-product-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- products-detail section end  -->
<!-- other products section start  -->
<section class="p-2 p-md-5">
    <?php $textColor = "";
    $sectionTitle = "other other ";
    include 'includes/products.php' ?>
</section>
<!-- other products section end  -->
<!-- page content end  -->
<?php get_footer(); ?>