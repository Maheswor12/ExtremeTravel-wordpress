<form role="search" method="get" action="<?php echo home_url(''); ?>">
    <div class="col-12">
        <input class="form-control" type="search" value="<?php echo get_search_query(); ?>" name="s" id='s' placeholder="Enter a keyword" aria-label="Search">
    </div>
    <div class="col-12">
        <input type="hidden" name="post_type" value="package">
        <select name="package-type" class="form-control" class="custom-select">
            <option value="">Choose a destination</option>
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'package-type',
                'hide_empty' => true,
            ));
            foreach ($terms as $categories) : ?>
                <option value="<?php echo $categories->slug; ?>"><?php echo $categories->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-12">
        <input type="submit" value="Search Now" class="btn-orange">
    </div>
</form>