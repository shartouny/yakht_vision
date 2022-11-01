    <?php global $textColor, $sectionTitle;  ?>

    <div class="container" id="products-section">
        <div class="row justify-content-center py-4">
            <div class="col-12 text-center ">
                <h1 class="<?= $textColor ?>"><?php _e($sectionTitle); ?></h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div id="products-content" class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'post_type' => 'products'
                );
                $products = new WP_Query($args);
                while ($products->have_posts()) {
                    $products->the_post();
                    $posttags = get_the_tags();
                    if($post->ID != get_queried_object_id()){

                    

                ?>
                
                    <div class="item mb-3">
                        <a href="<?php the_permalink(); ?>">
                        <div class="row position-relative mt-4r">
                            <div class="col-12">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="not found" class="img-fluid img-thumbnail">
                            </div>
                            <div class="product-logo">
                                <img src="<?php echo get_post_meta(get_the_id(), 'productlogo')[0]; ?>" class="img-fluid" alt="not found">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            
                                                <h2><?php the_title(); ?></h2>
                                            </a>
                                            <?php if ($posttags) {
                                                $i = 0;
                                                foreach ($posttags as $tag) {
                                                    if ($i < 5) { ?>
                                                        <li><?php echo $tag->name ?></li>
                                            <?php }
                                                    $i++;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row position-absolute b-20 l-10">
                            <div class="col">
                                <a href="https://<?php echo get_post_meta(get_the_id(), 'website')[0]; ?>"><?php _e('view website'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php  }
                }
                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>