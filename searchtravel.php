<div class="trip-search">
    <form role="search" method="get" action="<?php echo home_url(''); ?>">
        <ul>
            <li>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">KEYWORD:</label>
                    </div>
                    <input class="form-control" type="search" value="<?php echo get_search_query(); ?>" name="s" id='s' placeholder="Enter a keyword" aria-label="Search">
                </div>
            </li>
            <li>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">DESTINATIONS:</label>
                    </div>
                    <input type="hidden" name="post_type" value="package">
                    <select name="package-type" class="full-width searchHome" class="custom-select">
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
            </li>
            <li><input type="submit" value="SEARCH" class="travel-search">
            </li>
        </ul>
    </form>
</div>