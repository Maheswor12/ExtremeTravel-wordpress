<?php get_header(); ?>
<!-- slider -->
<section class="slider">

    <div class="owl-carousel owl-theme sliders">
        <?php
        $codestar_front_page = get_option('my_framework');
        $repeat_text_image1 = $codestar_front_page['repeat_text_image'];
        if ($repeat_text_image1 != "") :
            foreach ($repeat_text_image1 as $slider11) :
                ?>
        <div class="item">
            <?php if ($slider11['sliderimage']['url'] != "") : ?>
            <img src="<?php echo $slider11['sliderimage']['url']; ?>">
            <?php endif; ?>
            <div class="item-caption">
                <h3 class="animated fadeInUp"><?php echo $slider11['mediumtext'];  ?> <span><?php echo $slider11['smalltext']; ?></span></h3>
                <!-- <a href="<?php //echo home_url(); ?>/book">BOOK NOW</a> -->
            </div>
        </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
    <div class="mycontainer">
        <!-- for search -->
        <?php get_template_part('searchtravel', 'single'); ?>
        <!-- end of search -->
    </div>
</section>
<!-- slider -->

<!-- welcome to travel -->
<section class="travel-welcome">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="travel-section-title">
                    <h3 class="travel-section-heading">WELCOME TO <span>TRAVEL</span></h3>
                </div>
            </div>
            <?php
            $codestar_frontage = get_option('my_framework');
            $welcome_image = $codestar_frontage['welcome_img'];
            if ($welcome_image != "") :
                ?>
            <div class="col-lg-5">
                <div class="travel-welcome-img">
                    <img src="<?php echo $welcome_image['url']; ?>" alt="Travel Welcome Image">
                </div>
            </div>
            <?php endif; ?>
            <div class="col-lg-7">
                <div class="travel-welcome-desc">
                    <p>
                        <?php
                        $welcome_desc = $codestar_frontage['welcome_desc'];
                        echo $welcome_desc;
                        ?>
                    </p>
                    <a href="<?php echo home_url(); ?>/about">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- welcome to travel -->

<!-- featured package -->
<section class="travel-featured-package">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="travel-section-title">
                    <h3 class="travel-section-heading">FEATURED <span>PACKAGES</span></h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="travel-featured-slider" class="owl-carousel owl-theme">
                    <?php
                    $featured1 = array('post_type' => 'package', 'orderby' => 'rand');
                    $featured11 = new WP_Query($featured1);
                    if ($featured11->have_posts()) : while ($featured11->have_posts()) : $featured11->the_post();
                            $feature =  get_field('check_for_featured_package');
                            if ($feature != "") :
                                ?>
                    <div class="item">
                        <div class="card">
                            <?php if (has_post_thumbnail()) : ?>
                            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <?php if (get_field('day') != "") : ?>
                                <p class="card-text"><i class="far fa-clock"></i> &nbsp;<?= get_field('day'); ?> Days</p>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>"><small class="text-muted">VIEW DETAILS</small></a>
                            </div>
                        </div>
                    </div>
                    <?php
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //featured package -->

<!-- travel in a video -->
<section class="travel-section-video">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-6 travel-video">
                <h3><span class="travel-video-title">TRAVEL IN</span> <span>A VIDEO</span></h3>
                <?php
                $desc12 = $codestar_front_page['desc'];
                if ($desc12 != "") :
                    ?>
                <p><?php echo $desc12; ?></p>
                <?php
                endif;
                ?>
                <?php
                $travel_video1 = $codestar_front_page['video1'];
                if ($travel_video1 != "") :
                    ?>
                <a class="various fancybox.iframe" href="<?php echo $travel_video1; ?>"><i class="far fa-play-circle"></i></a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 choose-us">
                <h3><span class="travel-choose-us-title">WHY CHOOSE</span> <span>TRAVEL</span></h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <?php
                            $first_title2 =  $codestar_front_page['first_title'];
                            if ($first_title2 != "") :
                                ?>
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $first_title2; ?>
                                </a>
                            </h4>
                            <?php endif;  ?>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <?php
                            $first_content2 =  $codestar_front_page['first_content'];
                            if ($first_content2 != "") :
                                ?>
                            <div class="panel-body">
                                <p><?php echo $first_content2; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <?php
                            $second_title2 = $codestar_front_page['second_title'];
                            if ($second_title2 != "") :
                                ?>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?php echo $second_title2; ?>
                                </a>
                            </h4>
                            <?php endif; ?>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <?php
                            $second_content2 = $codestar_front_page['second_content'];
                            if ($second_content2 != "") :
                                ?>
                            <div class="panel-body">
                                <p><?php echo $second_content2; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <?php
                            $third_title2 =  $codestar_front_page['third_title'];
                            if ($third_title2 != "") :
                                ?>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $third_title2;  ?>
                                </a>
                            </h4>
                            <?php endif; ?>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <?php
                            $third_content2 =  $codestar_front_page['third_content'];
                            if ($third_content2 != "") :
                                ?>
                            <div class="panel-body">
                                <p><?php echo $third_content2; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <?php
                            $Fourth_title2 =  $codestar_front_page['Fourth_title'];
                            if ($Fourth_title2 != "") :
                                ?>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?php echo $Fourth_title2; ?>
                                </a>
                            </h4>
                            <?php endif; ?>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <?php
                            $fourth_content2 =  $codestar_front_page['fourth_content'];
                            if ($fourth_content2 != "") :
                                ?>
                            <div class="panel-body">
                                <p><?php echo $fourth_content2; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <?php
                            $fifth_title2 = $codestar_front_page['fifth_title'];
                            if ($fifth_title2 != "") :
                                ?>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?= $fifth_title2; ?>
                                </a>
                            </h4>
                            <?php endif; ?>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <?php
                            $fifth_content2 =  $codestar_front_page['fifth_content'];
                            if ($fifth_content2 != "") :
                                ?>
                            <div class="panel-body">
                                <p><?php echo $fifth_content2; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- //travel in a video -->

<!-- best selling packages -->
<section class="travel-best-packages">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="travel-section-title">
                    <h3 class="travel-section-heading">BEST SELLLING <span>PACKAGES</span></h3>
                </div>
            </div>
            <?php
            $selling_packages = array('post_type' => 'package', 'posts_per_page' => '6', 'orderby' => 'rand');
            $selling_packages1 = new WP_Query($selling_packages);
            if ($selling_packages1->have_posts()) : while ($selling_packages1->have_posts()) : $selling_packages1->the_post();
                    $best =  get_field('best_package');
                    if ($best != "") :
                        ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card-best-package">
                    <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="best selling packages">
                    <?php endif; ?>
                    <div class="pop-trip-detail">
                        <h5 class="inner-trip-title"><?php the_title(); ?></h5>
                        <?php if (get_field('day') != "") : ?>
                        <h6 class="trip-duration"><i class="far fa-clock"></i>&nbsp;<?= get_field('day'); ?> Days</h6>
                        <?php endif; ?>
                        <?php if (get_field('price') != "") : ?>
                        <p class="trip-price"><i class="fas fa-tag"></i>&nbsp;$ <?= get_field('price'); ?></p>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>" class="btn-button">View Details</a>
                    </div>
                    <h5 class="trip-title"><?php the_title(); ?></h5>
                </div>
            </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- //best selling packages -->

<!-- //Customer's review & why choose us -->
<section class="testimonials">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-6">
                <div class="travel-section-title">
                    <h3 class="travel-section-customer-saying">CUSTOMER'S <span>SAYING</span></h3>
                </div>

                <div class="testimonials-background-img">
                    <div id="testi" class="owl-carousel owl-theme">
                        <?php
                        $testimonial = array('post_type' => 'testimonial');
                        $test = new WP_Query($testimonial);
                        if ($test->have_posts()) : while ($test->have_posts()) : $test->the_post();
                                ?>
                        <div class="item">
                            <div class="testimonials-avataar">
                                <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="testimonials-image">
                                <?php endif; ?>
                            </div>
                            <?php if (get_field('testimonial') != "") : ?>
                            <p><i class="fas fa-quote-left">&nbsp; </i><?php echo get_field('testimonial'); ?> .&nbsp; <i class="fas fa-quote-right"></i>
                            </p>
                            <?php endif; ?>
                            <div class="author-name">
                                <span class="author">- <?php the_title(); ?></span>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 contact">
                <div class="travel-section-title">
                    <h3 class="travel-section-contact">CONTACT <span>US</span></h3>
                </div>
                <div class="travel-contact-form">
                    
                        <?php echo do_shortcode('[contact-form-7 id="359" title="Contact form 1"]'); ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //Customer's review & why choose us -->

<?php get_footer(); ?>