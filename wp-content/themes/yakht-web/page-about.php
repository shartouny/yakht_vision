<?php
$header = 'sticky-top';
include 'header.php';
?>
<!-- header content start  -->
<section id="header-banner" class="w-100 ">
    <div class="row w-100 m-0">
        <div class="col-12 p-0 position-relative">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            <div class="row position-absolute top-0 w-100 h-100 text-center">
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
</section>

<!-- header content end  -->
<!-- page content start  -->
<!-- about section start  -->
<section id="about-content-section" class="bg-light-gray pt-5">
    <div class="container position-relative">
        <h1>About Yacht vision</h1>
        <div class="row mt-lg-4">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-12">

                        <p class="m-md-0"><?php strip_tags(the_content());  ?></p>
                    </div>
                </div>
                <div class="row mb-5 mb-lg-0 ">
                    <div class="col-12 p-lg-0">
                        <div class="container p-lg-3">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 p-0">
                                    <img src="<?php echo get_post_meta(get_the_ID(), 'xpimg')[0]; ?>" alt="" class="w-100 position-relative">
                                    <div class=" bg-dark-blue position-absolute top-0 left-0 w-100 h-100 text-center p-md-5 p-2 justify-content-center d-flex"></img>
                                        <?php echo get_post_meta(get_the_ID(), 'xptext')[0]; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-lg-0">
                <img src="<?php echo get_post_meta(get_the_ID(), 'sideimg')[0]; ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- about section end  -->
<!-- latest news section start  -->
<!--<div class="mb-md-5 mb-3">-->
    <?php //get_template_part('includes/latest-news'); ?>
<!--</div>-->
<!-- latest news section end  -->
<!-- page content end  -->
<?php get_footer(); ?>