<?php
$header = 'sticky-top';
get_header();
?>
<!-- header content start  -->



<!-- header content end  -->
<!-- page content start  -->
<!-- products-detail section start  -->
<section id="news-content-section" class="bg-light-gray pt-5">
    <div class="container">

        <div class="row">
            <div class="col-md-8">

                <?php if (has_post_thumbnail()) { ?>
                    <div class="container py-4">
                        <!-- <h2 class="py-2">additional news image</h2> -->
                        <div class="row">
                            <div class="col-12">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                <?php

                } ?>
                <div class="container py-4">
                    <h2 class="py-2"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>

            </div>
            <div class="col-md-4" id="side-sec">
                <div class="row mt-n5">
                    <div class="col-12">
                        <?php get_template_part('includes/send-message'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=" mb-md-5 mb-3">
    <?php get_template_part('includes/latest-news'); ?>
</div>

<!-- page content end  -->
<?php get_footer(); ?>