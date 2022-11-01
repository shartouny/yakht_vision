    <!-- latest news section start  -->

    <section id="latest-news-section" class="mt-5">
        <div class="container">
            <div class="row justify-content-center text-center py-4">
                <div class="col-12">
                    <h1><?php _e('latest news') ?></h1>
                </div>
            </div>
            <div id="news-content" class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'desc'
                );
                $latestNews = new WP_Query($args);
                while ($latestNews->have_posts()) {
                    $latestNews->the_post();
                    if ($post->ID != get_queried_object_id()) {

                ?>
                    <div class="item mb-3 ">
                        <div class="row justify-content-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="col-12 ">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <div class="row justify-content-center mt-4 p-3">
                            <div class="col mb-4">
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                    <?php echo limit_content_chr(get_the_content(), 150); ?>
                            </div>
                        </div>

                    </div>
                <?php  }
                }
                wp_reset_postdata(); ?>


            </div>
        </div>

    </section>
    <!-- latest news section end  -->