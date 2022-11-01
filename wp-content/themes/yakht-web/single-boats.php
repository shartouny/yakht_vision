<?php
$header = 'sticky-top';
get_header();
?>
<!-- header content start  -->

<div id="details-header-banner">
    <div class="row text-center my-md-5 my-2">
        <div class="col-12 ">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
</div>
</div>
<!-- header content end  -->
<!-- page content start  -->
<!-- products-detail section start  -->
<section id="details-content-section" class="bg-light-gray pt-5">
    <div class="container">
        <div id="slider" class="py-md-5 py-2">
            <div class="row">
                <div class="col-12 text-right">
                    <div class="center">
                        <a href=# id="prev"><i class="fa fa-chevron-left"></i></a>
                        <a href=# id="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="0" data-cycle-prev="#prev" data-cycle-next="#next">
                        <?php
                        $imgGallery = get_post_meta(get_the_id(), 'inpost_gallery_data')[0];
                       
                        if(!empty($imgGallery) && $imgGallery[0] !=1){
                            foreach ($imgGallery as $img) { 
                   
                            ?>
                            <img class="img-fluid" src="<?php echo $img['imgurl']; ?>">
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="container py-4">
                    <h2 class="py-2"><?php _e('description');?></h2>
                    <?php the_content(); ?>
                </div>
                <div class="container py-4">
                    <h2 class="py-2"><?php _e('TECHNICAL DATA');?></h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <table class="w-100 " id="specs-details-table">
                                <?php


                                preg_match_all('/(.*?):\s?(.*?)(,|$)/', get_post_meta(get_the_id())['specs'][0], $matches);
                                $specs = array_combine(array_map('trim', $matches[1]), $matches[2]);

                                $i = 0;
                                foreach ($specs as $spec => $value) {


                                ?>
                                    <tr>
                                        <td>
                                            <p><?php echo strip_tags($spec);?>: </p>
                                        </td>
                                        <td>
                                            <p><?php echo strip_tags($value) ; ?></p>
                                        </td>
                                    </tr>
                                    <?php
                                    if ($i < count($specs) / 3) { ?>
                            </table>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <table class="w-100 " id="specs-details-table">
                        <?php

                                        $i = -1;
                                    }
                                    $i++;
                                }
                        ?>
                            </table>
                        </div>

                    </div>
                </div>
                <?php 
                    preg_match_all('/(.*?)(,|$)/', get_post_meta(get_the_id())['extra equipments'][0], $matches);
                    $extras = explode(",", get_post_meta(get_the_id())['extra equipments'][0]);
                    $layoutImg = get_post_meta(get_the_ID(), 'layout')[0];
                    $video = get_post_meta(get_the_ID(), 'video')[0];
                    if(count($extras) && !empty($extras[0])){ ?>
                        <div class="container py-4">
                            <h2 class="py-2"><?php _e('EXTRA EQUIPMENT');?></h2>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <?php
                                        $i = 0;
                                        foreach ($extras as $extra) { ?>
                                            <p><i class="far fa-check-square"></i> <?php echo $extra; ?></p>
                                            <?php
                                                if ($i < count($extras) / 3) { ?>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                <?php
                                                $i = -1;
                                                }
                                            $i++;
                                        }
                                    ?>
        
        
        
        
        
                                </div>
        
                            </div>
                        </div>
                <?php }
                    if(!empty($layoutImg)) { ?>
                        <div class="container py-4">
                            <h2 class="py-2"><?php _e('layout');?></h2>
                            <div class="row">
                                <div class="col-12">
                                    <img src="<?php echo $layoutImg; ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                <?php } 
                    if(!empty($video)){ ?>
                        <div class="container py-4 mb-5">
                            <h2 class="py-2"><?php _e('video');?></h2>
                            <div class="row">
                                <div class="col-12">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-100"></iframe>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>
            <div class="col-md-4" id="side-sec">
                <div class="row mt-n5">
                    <div class="col-12">
                        <?php include 'includes/send-message.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page content end  -->
<?php get_footer(); ?>