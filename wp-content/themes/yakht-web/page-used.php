<?php
$header = 'sticky-top';

get_header();
?>
<!-- header content start  -->
<div id="header-banner">
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
</div>

<!-- header content end  -->
<!-- page content start  -->
<section id="user-boats-content" class="bg-light-gray">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="row">
                    <?php
                 
                    $args = array(
                        'post_type' => 'boats',
                        'post_status' => 'publish',
                        'posts_per_page' => 20,
                        'orderby' => 'date',
                        'order' => 'asc',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'boats-categories',
                                
                                'terms' => 4

                            )
                        ),
                    );

                    $boats = new WP_Query($args);


                    if ($boats->have_posts()) {
                        while ($boats->have_posts()) {
                            $boats->the_post();

                    ?>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="row text-center p-2 p-md-4">
                                    <div class="col-12">
                                        <a href="<?php the_permalink(); ?>">
                                            <h2><?php the_title(); ?></h2>
                                        </a>
                                        <p><?php echo limit_content_chr(get_the_content()); ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php    }
                        wp_reset_postdata();
                    }else{ ?>
                        <h1><?php the_content(); ?></h1>
                    <?php } ?>

            
                </div>
            </div>
            <div class="col-md-4" id="side-sec">
                <!-- <div class="row">
                    <div class="col-12">
                        <h2><span>tags</span></h2>
                        <?php  ?>
                        <a href="?tag=luxury" class="btn btn-outline-primary">luxury</a>
                        <a href="#" class="btn btn-outline-primary">luxury yacht</a>
                        <a href="#" class="btn btn-outline-primary">Fishing Boat</a>
                        <a href="#" class="btn btn-outline-primary">Out-board</a>
                        <a href="#" class="btn btn-outline-primary">Console</a>
                    </div>
                </div> -->
                <?php get_template_part('includes/send-message'); ?>
                <!--<div class="container">-->
                <!--    <div class="row mt-5" id="subscribe">-->
                <!--        <div class="col-12  bg-white p-md-5 p-2">-->
                <!--            <h2>stay updated</h2>-->
                <!--            <p class="py-3">Subscribe to our mailing-->
                <!--                list to saty updated with-->
                <!--                the latest boats and news-->
                <!--            </p>-->
                <!--            <div class="form-group">-->
                <!--                <input type="text" name="" id="" class="form-control" placeholder="email">-->
                <!--            </div>-->
                <!--            <div class="form-group">-->
                <!--                <input type="submit" name="" id="" class="btn btn-primary btn-block" value="subscribe">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section>
<!-- page content end  -->
<?php get_footer(); ?>