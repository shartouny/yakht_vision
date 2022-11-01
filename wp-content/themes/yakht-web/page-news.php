<?php

/**
 * Template Name: news
 *
 * @package my theme 
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

$header = 'sticky-top';
get_header() ;
?>

<!-- header content start  -->
<div class="row">
    <div class="col-12 text-center">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<!-- header content end  -->
<!-- page content start  -->

<section id="news-list-content">
    <div class="container">
        <div class="row mb-md-5 mb-3">
            <?php
            $args = array(
                'post_type' => 'post'
            );
            $news = new WP_Query($args);
            if ($news->have_posts()) {
                while ($news->have_posts()) {
                    $news->the_post();

            ?>
                    <div class="col-lg-4 col-md-6 my-3">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news h-100">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                        
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-4 p-3">
                                    <div class="col mb-4">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php echo limit_content_chr(get_the_content(), 150); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php    }
                wp_reset_postdata();
            } ?>
        </div>
    </div>
</section>
<!-- page content end  -->
<?php get_footer(); ?>