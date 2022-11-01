<?php
$header = 'sticky-top';
get_header();
$website = get_post_meta(get_the_id(), 'website')[0];
?>
<!-- header content start  -->
<style>

</style>
<section id="header-banner">
    <div class="container my-md-5 my-2">
        <div class="row justify-content-center">
            <div class="col-auto d-flex align-items-center justify-content-center">
                <img src="<?php echo get_post_meta(get_the_id(), 'brandlogo')[0]; ?>" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center mt-md-5 mt-2">
            <div class="col-12">
                <p><?php the_content(); ?></p>
                <?php if(!empty($website)){?>
                <div class="row mt-md-4 mt-2 justify-content-center">
                    <div class="col-auto">
                        <a href="<?php echo 'https://'. $website; ?>" class="btn btn-primary pr-5" target="_blank" style="background-color:#18145d; border-color:#18145d">Visit Site : <?php echo $website; ?></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- header content end  -->
<!-- page content start  -->
<section id="brand-specs">
    <div class="bg-light-gray py-5">
        <div class="container">
            <?php
            $brandid= get_the_id();
            
            $args = array(
                'post_type' => 'boats',
                'orderby'   => 'menu_order',
                'order' => 'asc',
                'posts_per_page' => -1,

                'meta_query' => array(
                    array(
                        'key' => 'brand',
                        'value' => $brandid
                    )
                )  
            );
          
            $boats = new WP_Query($args);
            while ($boats->have_posts()) {
                $boats->the_post();
                preg_match_all('/(.*?):\s?(.*?)(,|$)/', get_post_meta(get_the_id())['specs'][0], $matches);
                $specs = array_combine(array_map('trim', $matches[1]), $matches[2]);
            ?>
                <!-- brand start  -->
                <div class="brand mb-5">
                    <!-- brand img start  -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="not found">
                    <!-- brand img end  -->
                    <div class="container p-5" id="specs-details">
                        <div class="row">
                            <div class="col-12">
                                <h2><?php the_title(); ?></h2>
                                <table class="w-100 mt-3" id="specs-details-table">
                                   <?php 
                                   $i = 0;
                                   foreach($specs as $spec=>$value){ if( $i < 4){?>
                                    <tr>
                                        <td>
                                            <p><?php echo strip_tags($spec); ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo strip_tags($value); ?></p>
                                        </td>
                                    </tr>
                                    <?php } $i++ ; }?>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 pb-3">
                            <div class="col">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">details</a>
                                <!--<a href="#" class="btn btn-secondary"><i class="fas fa-share-alt"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brand end  -->
                <!-- brand start  -->
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- page content end  -->
<?php get_footer(); ?>