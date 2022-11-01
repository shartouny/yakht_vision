<?php
// global $header;
$header = 'fixed-top';
get_header();

$imgGallery = get_post_meta(get_the_ID(), 'inpost_gallery_data')[0];
// echo '<pre>';
// print_r($imgGallery);
?>
<!-- header content start  -->
<div id="headerslider" class="carousel slide header-slider" data-ride="carousel">

    <div class="carousel-inner">
        <?php
        $i = 0;
        foreach ($imgGallery as $img) {
            $class = '';
            if ($i == 0) {
                $class = 'active';
                $i++;
            }
        ?>
            <div class="carousel-item <?= $class ?>">
                <img class="d-block w-100" src="<?php echo $img['imgurl']; ?>" alt="First slide">
            </div>
        <?php  } ?>
    </div>
    <ol class="carousel-indicators">
        <?php
        $i = 0;
        foreach ($imgGallery as $img) {
            $class = '';
            if ($i == 0) {
                $class = 'active';
            }


        ?>
            <li data-target="#headerslider" data-slide-to="<?= $i; ?>" class="<?= $class; ?>"></li>
        <?php $i++;
        }
        ?>
    </ol>
</div>

<!-- header content end  -->
<!-- page content start  -->
<!-- featured section start  -->
<section id="featured-section" class="bg-gray">
    <div class="container">
        <div class="row justify-content-center text-center py-4">
            <div class="col-12">
                <h1><?php _e('featured'); ?></h1>
            </div>
        </div>
        <div id="items-content" class="owl-carousel owl-theme">
            <?php

            $args = array(
                'post_type' => 'boats',
                'tax_query' => array(
                    'relation' => 'and',
                    array(
                        'taxonomy' => 'boats-categories',
                        'terms' => 17,
                    )
                )
            );
            $featuredProducts = new WP_Query($args);
            while ($featuredProducts->have_posts()) {
                $featuredProducts->the_post();
                preg_match_all('/(.*?):\s?(.*?)(,|$)/', get_post_meta(get_the_id())['specs'][0], $matches);
                $specs = array_combine(array_map('trim', $matches[1]), $matches[2]);

                ?>



                <div class="item mb-3">
                    <a href="<?php the_permalink(); ?>">
                    <div class="row justify-content-center">
                        <div class="col-12 ">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    </a>
                    <div class="container">
                        <div class="row text-center justify-content-center mt-4">
                            <div class="col">
                                <h2><?php echo limit_content_chr(get_the_title(), 20); ?></h2>
                                
                                    <?php
                                    preg_match_all('/(.*?):\s?(.*?)(,|$)/', get_post_meta(get_the_id())['specs'][0], $matches);
                                    $specs = array_combine(array_map('trim', $matches[1]), $matches[2]);
                                    $i = 0;
                                    foreach ($specs as $spec => $value) { ?>
                                        <?php if($i < 3){echo $spec . ':' . $value . ', </br>';} ?> 
                                    <?php $i++ ; }  ?>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center mt-5 pb-5">
                        <div class="col">
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">discover</a>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
        <div class="row justify-content-center text-center mt-4">
            <div class="col">
                <h1 class="p-2"><?php the_title(); ?></h1>
                <p class="py-3"> <?php the_content(); ?></p>
            </div>
        </div>
    </div>

</section>
<!-- featured section end  -->

<!-- ourbrand section start  -->
<section id="our-brand">
    <div class="container">
        <div class="row justify-content-center text-center my-2 my-md-5  pb-5">
            <div class="col-12">
                <h1><?php _e('our brand'); ?></h1>
            </div>
        </div>
    </div>

    <div class="bg-light-blue pb-5">
        <div class="container brands">
        <?php 
            $args=array(
                'post_type' => 'brands',
            );
            $brands = new WP_Query($args);
            while($brands->have_posts()){
                $brands->the_post();
                $logo = get_post_meta(get_the_id(), 'brandlogo')[0];
           
                
            
        ?>
            <!-- brand start  -->
            <div class="brand mb-5">
                <!-- brand img start  -->
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="not found">
                <!-- brand img end  -->
                <div class="container">
                    <!-- brand logo start  -->
                    <div class="row p-1 py-lg-1 mt-lg-5">
                        <div class="col-8 mb-2 mt-lg-4 mt-2">
                            <img src="<?php echo $logo; ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <!-- brand logo end  -->
                    <div class="row p-1 py-lg-1">
                        <div class="col">
                            <p><?php echo limit_content_chr(get_the_content(), 300); ?></p>
                            <a href="<?php the_permalink(); ?>"><?php _e('view fleet'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand end  -->
            <?php } wp_reset_postdata();?>
        </div>
    </div>
</section>
<!-- ourbrand section end  -->
<!-- products section start  -->
<section class="bg-product-img p-2 p-md-5">
    <?php $textColor = "text-white";
    $sectionTitle = "our products";
    get_template_part('includes/other-products');?>
</section>
<!-- products section end  -->
<!--news section start -->
<!--<div class=" mb-md-5 mb-3">-->
    <?php //get_template_part('includes/latest-news'); ?>
<!--</div>-->
<!--news section end -->
<!-- page content end  -->
<?php get_footer(); ?>