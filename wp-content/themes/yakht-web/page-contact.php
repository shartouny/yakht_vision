<?php
$header = 'sticky-top';
get_header();
get_posts(13);
$address = get_post_meta(get_the_ID(), 'address')[0];
$telephone = get_post_meta(get_the_ID(), 'telephone')[0];
$mobile = get_post_meta(get_the_ID(), 'mobile')[0];
$email = get_post_meta(get_the_ID(), 'email')[0];
?>
<!-- header content start  -->


<!-- header content end  -->
<!-- page content start  -->
<section id="contact-sec" class="bg-light-gray">
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="row m-2 justify-content-between">
                    <div class="col-md-12">
                        <h2 class="text-left"><?php _e('LOCATE US'); ?></h2>
                        <table class="w-100 " id="contact-info-table">
                            <tr>
                                <td>
                                    <p><?php _e('Address :'); ?></p>
                                </td>
                                <td>
                                    <p><?php echo $address; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><?php _e('Tel :'); ?></p>
                                </td>
                                <td>
                                    <p><?php echo $telephone; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><?php _e('mob :'); ?></p>
                                </td>
                                <td>
                                    <p><?php echo $mobile; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><?php _e('Email :'); ?></p>
                                </td>
                                <td>
                                    <p><?php echo $email; ?> </p>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 px-2 py-4">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.753489769695!2d35.606289815212946!3d33.973174980627554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDU4JzIzLjQiTiAzNcKwMzYnMzAuNSJF!5e0!3m2!1sen!2slb!4v1626166489701!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                        <iframe width="100%" height="100%" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.753489769695!2d35.606289815212946!3d33.973174980627554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDU4JzIzLjQiTiAzNcKwMzYnMzAuNSJF!5e0!3m2!1sen!2slb!4v1626166489701!5m2!1sen!2slb" style="border:0" allowfullscreen="true"></iframe>
                    </div>
                </div>
                <hr class="d-md-none">
            </div>
            <div class="col-md-4" id="side-sec">
                <!-- <div class="row">
                    <div class="col-12">
                        <h2><span>tags</span></h2>
                        <a href="#" class="btn btn-outline-primary">luxury</a>
                        <a href="#" class="btn btn-outline-primary">luxury yacht</a>
                        <a href="#" class="btn btn-outline-primary">Fishing Boat</a>
                        <a href="#" class="btn btn-outline-primary">Out-board</a>
                        <a href="#" class="btn btn-outline-primary">Console</a>
                    </div>
                </div> -->
                <?php get_template_part('includes/send-message'); ?>
                <!-- <div class="container">
                    <div class="row mt-5" id="subscribe">
                        <div class="col-12  bg-white p-md-5 p-2">
                            <h2>stay updated</h2>
                            <p class="py-3">Subscribe to our mailing
                                list to saty updated with
                                the latest boats and news
                            </p>
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="" id="" class="btn btn-primary btn-block" value="subscribe">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section><!-- page content end  -->
<?php get_footer(); ?>