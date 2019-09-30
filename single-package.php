<?php get_header(); ?>
<section class="trip-details" itemscope itemtype="http://schema.org/Product">
    <div class="tc-wrapper">
        <div class="row">
            <div class="col-lg-9">
                <?php if (have_posts()) : the_post(); ?>
                    <div class="trip-left">
                        <div class="trip-title">
                            <h3 itemprop="name" content="<?php the_title(); ?>"><?php the_title(); ?></h3>
                            <ul class="extra-details">
                                <li><i class="fa fa-check-square"></i>24/7 Customer Suport</li>
                                <li><i class="fa fa-check-square"></i>Easy Cancellation</li>
                                <li><i class="fa fa-check-square"></i>Discounted Travel</li>
                            </ul>
                        </div>
                        <div class="trip-img">
                            <ul id="image-gallery" class="gallery">
                                <?php
                                    $post_id = get_the_ID();
                                    //Get the images ids from the post_metadata
                                    $images = acf_photo_gallery('featured_gallery', $post_id);
                                    //Check if return array has anything in it
                                    if (count($images)) :
                                        //Cool, we got some data so now let's loop over it
                                        foreach ($images as $image) :
                                            $id = $image['id']; // The attachment id of the media
                                            $title = $image['title']; //The title
                                            $caption = $image['caption']; //The caption
                                            $full_image_url = $image['full_image_url']; //Full size image url
                                            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 900, 800); //Resized size to 262px width by 160px height image url
                                            $thumbnail_image_url = $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                            $url = $image['url']; //Goto any link when clicked
                                            $target = $image['target']; //Open normal or new tab
                                            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                                            if ($full_image_url != "") :
                                                ?>
                                            <li data-thumb="<?php echo $full_image_url; ?>" data-src="<?php echo $full_image_url; ?>">
                                                <img itemprop="image" src="<?php echo $full_image_url; ?>">
                                            </li>
                                <?php
                                            endif;
                                        endforeach;
                                    endif;
                                    ?>
                            </ul>
                        </div>
                        <div class="trip-highlights">
                            <div class="tab-content row" id="trip-overview">
                                <div class="col-lg-6 col-md-6 col-sm-6 padd-0">
                                    <h5 class="title-text text-uppercase">Highlights</h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 padd-0">
                                    <ul class="social-share">
                                        <?php echo do_shortcode('[ssba-buttons]'); ?>
                                    </ul>
                                </div>
                                <div class="col-12 padd-0">
                                    <div class="tab-desc" itemprop="description">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="tab-desc-link">
                                        <a href="#!" class="show">View More</a>
                                    </div>
                                </div>
                            </div>
                            <?php if (get_field('travel_itinerary') != "") : ?>
                                <div class="tab-content itinerary" id="trip-itinerary">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3>Itinerary</h3>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="expand-all">Expand All</h5>
                                        </div>
                                    </div>
                                    <div class="iti-lists">
                                        <div class="row">
                                            <div class="col-12">
                                                <?php
                                                        $itinerary =  get_field('travel_itinerary');
                                                        if ($itinerary != "") :
                                                            foreach ($itinerary as $itiner) :
                                                                ?>
                                                        <div class="data-item">
                                                            <?php if ($itiner["title_itinerary"] != "") : ?>
                                                                <h6><?= $itiner["title_itinerary"]; ?><i class="fa fa-chevron-down"></i></h6>
                                                            <?php endif; ?>
                                                            <div class="iti-display">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <ul class="time-hotel">
                                                                            <li class="clock"><?php echo $itiner["time"]; ?></li>
                                                                            <?php if ($itiner["hotel"] != "") : ?>
                                                                                <li class="hotel"><?php echo $itiner["hotel"]; ?></li>
                                                                            <?php endif; ?>
                                                                        </ul>
                                                                        <?php if ($itiner["description_itinerary"] != "") : ?>
                                                                            <?= $itiner["description_itinerary"]; ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                            endforeach;
                                                        endif;
                                                        ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="tab-content include-exclude" id="trip-inc-exc">
                                <?php if (get_field('whats_included') != "") : ?>
                                    <div class="included">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>What's Included</h3>
                                            </div>
                                        </div>
                                        <?= get_field('whats_included'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('whats_excluded') != "") : ?>
                                    <div class="excluded">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>What's Excluded</h3>
                                            </div>
                                        </div>
                                        <?= get_field('whats_excluded'); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-lg-3">
                <div class="trip-right">
                    <div class="sidebar-tab1" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <div class="row">

                            <div class="col-12 book_now"><?php //echo $post_id; 
                                                                ?>
                                <a href="<?php echo home_url(); ?>/book/?post_title=<?php echo the_title(); ?>" class="book-now">Book this Trip <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <div class="col-6">
                                <?php if (get_field('day') != "") : ?>
                                    <div class="day">
                                        <h5>Days</h5>
                                        <h3><?php echo get_field('day'); ?></h3>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-6">
                                <div class="sidebar-price">
                                    <?php if (get_field('price') != "") : ?>
                                        <h5>From</h5>
                                        <h3 itemprop="price" content="<?php echo get_field('price'); ?>">
                                            <span itemprop="priceCurrency" content="USD">$ </span><?php echo get_field('price'); ?></h3>
                                    <?php endif; ?>
                                    <!-- <link itemprop="availability" class="hidd" href="http://schema.org/InStock" />In stock -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (get_field('trip_advisor') != "") : ?>
                        <div class="sidebar-tab3">
                            <div class="tripadvisor-review">
                                <h3 class="sidebar-title" s>Trip Advisor Review</h3>
                                <p><?= get_field('trip_advisor'); ?></p>
                                <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=311&amp;locationId=10239059&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="sidebar-tab4">
                        <div class="sidebar-tour-details">
                            <h3 class="sidebar-title">Tour Details</h3>
                            <div class="row">
                                <?php if (get_field('group_-_size') != "") : ?>
                                    <div class="col-12">
                                        <div class="tour-det aa">
                                            <h6>Group Size</h6>
                                            <h6><?php echo get_field('group_-_size'); ?></h6>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('max_altitude') != "") : ?>
                                    <div class="col-12">
                                        <div class="tour-det bb">
                                            <h6>Max Altitude</h6>
                                            <h6><?php echo get_field('max_altitude'); ?></h6>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('fitness_level') != "") : ?>
                                    <div class="col-12">
                                        <div class="tour-det cc">
                                            <h6>Fitness level</h6>
                                            <h6><?php echo get_field('fitness_level'); ?></h6>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('destination') != "") : ?>
                                    <div class="col-12">
                                        <div class="tour-det dd">
                                            <h6>Destination</h6>
                                            <h6><?php echo get_field('destination'); ?></h6>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_field('view_in_map') != "") : ?>
                                    <div class="col-12">
                                        <div class="tour-det ee">
                                            <h5>View in Map</h5>
                                        </div>
                                        <div id="trip-map">
                                            <?php echo get_field('view_in_map'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-tab5">
                        <div class="quick-enquiry">
                            <h3 class="sidebar-title">Quick Enquiry</h3>
                            <?php echo do_shortcode('[contact-form-7 id="377" title="Enquiry"]'); ?>
                        </div>
                    </div>

                    <div class="sidebar-tab7">
                        <div class="sidebar-tour-details">
                            <h3 class="sidebar-title">Related Trips</h3>
                            <div class="row">


                                <?php
                                    $featured1 = array('post_type' => 'package', 'posts_per_page' => '3', 'orderby' => 'rand');
                                    $featured11 = new WP_Query($featured1);
                                    if ($featured11->have_posts()) : while ($featured11->have_posts()) : $featured11->the_post();
                                            $search_popular = get_field('search_popular_trip');
                                            if ($search_popular != "") :
                                                ?>
                                            <div class="col-12">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="best-trip rel">
                                                        <!-- <span class="day-night"><?php ?> Days / 6 <?php ?> Nights</span> -->
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url(); ?>" class="pack-img">
                                                        <?php endif; ?>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h3><?php the_title(); ?></h3>
                                                                <div class="review">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span>/ 10 reviews</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
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
            </div>

        </div>
    </div>
</section>
<?php endif; ?>




<script type="text/javascript">
    jQuery(document).ready(function() {
        $('.private-tour').magnificPopup({
            type: 'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });
    });
</script>

<?php get_footer(); ?>