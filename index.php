<?php get_header(); ?>
<!-- slider -->
<section class="slider">

    <div class="owl-carousel owl-theme sliders">
        <?php
        $repeat_text_image = get_option('my_framework');
        $repeat_text_image1 = $repeat_text_image['repeat_text_image'];
        if ($repeat_text_image1 != "") :
            foreach ($repeat_text_image1 as $slider11) :
                ?>
                <div class="item">
                    <img src="<?php echo $slider11['sliderimage']['url']; ?>">
                    <div class="item-caption">
                        <h3 class="animated fadeInUp"><?php echo $slider11['mediumtext'];  ?> <span><?php echo $slider11['smalltext']; ?></span></h3>
                        <a href="#">BOOK NOW</a>
                    </div>
                </div>
            <?php
            endforeach;
        endif;
        ?>
        <!-- <div class="item">
            <img src="http://localhost/travel/wp-content/uploads/2019/06/slider2.jpg">
            <div class="item-caption">
                <h3 class="animated fadeInUp">The city of temples, <span>Kathmandu!</span></h3>
                <a href="#">BOOK NOW</a>
            </div>
        </div>
        <div class="item">
            <img src="http://localhost/travel/wp-content/uploads/2019/06/slider3.jpg">
            <div class="item-caption">
                <h3 class="animated fadeInUp">Blessed with lord shiva, <span>visit pashupatinath!</span></h3>
                <a href="#">BOOK NOW</a>
            </div>
        </div> -->
    </div>
    <div class="mycontainer">
        <div class="trip-search">
            <form method="GET" action="#">
                <ul>
                    <li>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">KEYWORD:</label>
                            </div>
                            <input class="form-control" type="search" placeholder="Enter a keyword" aria-label="Search" required>
                        </div>
                    </li>
                    <li>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">DESTINATIONS:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" required>
                                <option selected>Choose a destination</option>
                                <option value="1">Nepal</option>
                                <option value="2">India</option>
                                <option value="3">Bhutan</option>
                            </select>
                        </div>
                    </li>
                    <!--                    <li>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">ACTIVITIES</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" required>
                                <option selected>Pick an acitivity</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </li> -->
                    <li><button type="button" class="btn btn-outline-warning">SEARCH</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</section>
<!-- slider -->

<!-- welcome to travel -->
<section class="travel-welcome">
    <div class="mycontainer">
        <?php
        $welcome = array('post_type' => "post", 'category_name' => 'welcome_travel');
        $welcome1 = new WP_Query($welcome);
        if ($welcome1->have_posts()) : $welcome1->the_post();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="travel-section-title">
                        <h3 class="travel-section-heading">WELCOME TO <span>TRAVEL</span></h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="travel-welcome-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="Travel Welcome Image">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="travel-welcome-desc">
                        <?php the_content(); ?>
                        <a href="<?php the_permalink(); ?>">READ MORE</a>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
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
                    $featured1 = array('post_type' => 'featured_package');
                    $featured11 = new WP_Query($featured1);
                    //var_dump(  $featured1);
                    if ($featured11->have_posts()) : while ($featured11->have_posts()) : $featured11->the_post();
                            ?>
                            <div class="item">
                                <div class="card">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><i class="far fa-clock"></i> &nbsp;<?= get_field('feature_time'); ?></p>
                                        <a href="<?php the_permalink(); ?>"><small class="text-muted">VIEW DETAILS</small></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <!-- <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/travel/wp-content/uploads/2019/06/everestgoky.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">MUSTANG TREK</h5>
                                <p class="card-text"><i class="far fa-clock"></i> &nbsp;17 Days - 18 Nights</p>
                                <a href="#"><small class="text-muted">VIEW DETAILS</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/travel/wp-content/uploads/2019/06/abc.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">EVEREST TREKKING</h5>
                                <p class="card-text"><i class="far fa-clock"></i> &nbsp;20 Days - 21 Nights</p>
                                <a href="#"><small class="text-muted">VIEW DETAILS</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/travel/wp-content/uploads/2019/06/everest.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">LANGTANG TREKKING</h5>
                                <p class="card-text"><i class="far fa-clock"></i> &nbsp;10 Days - 11 Nights</p>
                                <a href="#"><small class="text-muted">VIEW DETAILS</small></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/travel/wp-content/uploads/2019/06/everest.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">LANGTANG TREKKING</h5>
                                <p class="card-text"><i class="far fa-clock"></i> &nbsp;10 Days - 11 Nights</p>
                                <a href="#"><small class="text-muted">VIEW DETAILS</small></a>
                            </div>
                        </div>
                    </div> -->
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
                   $desc11 = get_option('my_framework');
                   $desc12 = $desc11['desc'];
                   if($desc12!=""):
                ?>
                <p><?php echo $desc12; ?></p>
                <?php
                endif;
                ?>
                 <?php 
                   $travel_video = get_option('my_framework');
                   $travel_video1 = $travel_video['video1'];
                   if($travel_video1!=""):
                ?>
                <a class="various fancybox.iframe" href="<?php echo $travel_video1; ?>"><i class="far fa-play-circle"></i></a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 choose-us">
                <h3><span class="travel-choose-us-title">WHY CHOOSE</span> <span>TRAVEL</span></h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php 
                    $choose_us1 = get_option('my_framework');
                    $choose_us12 = $choose_us1['choose_us'];
                    if($choose_us12!=""):
                    foreach( $choose_us12 as $choose):
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   <?php echo $choose['choose_title']; ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p> <?php echo $choose['choose_content']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    endif;
                    ?>
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Best Customer Service Experience
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Competitive Price
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Over 150 Holiday Packages
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Safety First
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu.</p>
                            </div>
                        </div>
                    </div> -->
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
            $selling_packages = array('post_type' => 'selling_package', 'posts_per_page' => 6);
            $selling_packages1 = new WP_Query($selling_packages);
            if ($selling_packages1->have_posts()) : while ($selling_packages1->have_posts()) : $selling_packages1->the_post();
                    ?>
                    <div class="col-lg-4">
                        <div class="card-best-package">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="best selling packages">
                            <?php endif; ?>
                            <div class="pop-trip-detail">
                                <h5 class="inner-trip-title"><?php the_title(); ?></h5>
                                <h6 class="trip-duration"><i class="far fa-clock"></i>&nbsp;<?= get_field('time'); ?></h6>
                                <p class="trip-price"><i class="fas fa-tag"></i>&nbsp;$ <?= get_field('amount'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn-button">View Details</a>
                            </div>
                            <h5 class="trip-title"><?php the_title(); ?></h5>
                        </div>
                    </div>
                <?php
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
                                    <p><i class="fas fa-quote-left">&nbsp; </i><?php echo get_field('testimonial'); ?> .&nbsp; <i class="fas fa-quote-right"></i>
                                    </p>
                                    <div class="author-name">
                                        <span class="author">- <?php the_title(); ?></span>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                        <!-- <div class="item">
                            <div class="testimonials-avataar">
                                <img src="http://localhost/travel/wp-content/uploads/2019/07/user-silhouette.png" alt="testimonials-image">
                            </div>
                            <p><i class="fas fa-quote-left">&nbsp; </i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp; <i class="fas fa-quote-right"></i>
                            </p>
                            <div class="author-name">
                                <span class="author text-right">- William Son</span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6 contact">
                <div class="travel-section-title">
                    <h3 class="travel-section-contact">CONTACT <span>US</span></h3>
                </div>
                <div class="travel-contact-form">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput0">Name</label>
                            <input type="text" class="form-control form-control-sm" name="name" placeholder="enter full name" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control form-control-sm" name="email" placeholder="name@example.com" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control form-control-sm" name="message" rows="3" placeholder="Your message" required=""></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-block">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //Customer's review & why choose us -->

<?php get_footer(); ?>