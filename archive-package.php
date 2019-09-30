<?php
get_header();
?>
<!-- travel-banner-section !-->
<section class="travel-category-banner">
    <div class="mycontainer">
        <div class="banner-text">
            <h1>Search Results</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                    <li><a href="#"><i class="fas fa-list-alt"></i>&nbsp;Search Results</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- //travel-banner-section !-->
<section class="category-wrapper">
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-9">
                <div class="category-title">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Related Trips</h3>
                        </div>
                    </div>
                </div>
                <div class="category-tours">
                    <div class="row">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="col-lg-4">
                                    <div class="category-tours-list">
                                        <div class="img-hoverable">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="category-tours-list1">
                                                <?php endif; ?>
                                            </a>
                                            <div class="img-category-price">
                                                <div class="row">
                                                    <div class="col-lg-6">$<?= get_field('price'); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="category-tours-list-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>
                                        <?php if (get_field('time') != "") : ?>
                                            <h5 class="category-tours-list-duration"><?= get_field('time'); ?></h5>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="<?php echo home_url(); ?>/booking">Book Now</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="<?php the_permalink(); ?>">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php echo 'sorry, No posts were found'; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="category-sidebar-left">
                    <h3>Find Tours</h3>
                    <div class="category-sidebar-left1">
                    <?php get_template_part('searchtour', 'single'); ?>
                    </div>
                </div>
                <div class="category-sidebar-left">
                    <h3>Popular Trips</h3>
                    <div class="category-sidebar-left2">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                $featured1 = array('post_type' => 'package', 'posts_per_page' => '6', 'orderby' => 'rand');
                                $featured11 = new WP_Query($featured1);
                                if ($featured11->have_posts()) : while ($featured11->have_posts()) : $featured11->the_post();
                                        $search_popular = get_field('search_popular_trip');
                                        if ($search_popular != "") :
                                            ?>
                                            <div class="popular-trips row">
                                                <div class="col-lg-4">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="popular-trips image1">
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-lg-8">
                                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                    <?php if (get_field('price') != -"") : ?>
                                                        <h5><span>Price: </span>$<?= get_field('price'); ?></h5>
                                                    <?php endif; ?>
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
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>