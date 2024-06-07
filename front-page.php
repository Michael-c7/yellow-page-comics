<?php get_header() ?>


<!-- the hero slider will be put here until I can put it into its own file/component -->
<article class="hero-slider-container">
    <h2 class="hero-slider__heading">Browser our collection of <div>Comic Books</div></h2>

    <div class="hero-slider__slides-inner">
        <!-- prev -->
        <button class="hero-sliders__movement-btn hero-sliders__prev-btn">
            <i class="bi bi-arrow-left-short"></i>
        </button>

        <div class="hero-slider__slides-container">
            <!-- first -->
            <a class="hero-slide__card hero-slide__card-1 active-card" href="/products">
                
                <?php 
                    // echo '<img class="hero-slide__card-img" src="wp-content/themes/yellow-page-comics-theme/images/hero-slider-assets/gifs/superman-image_animation.gif"/>';
                    echo '<img class="hero-slide__card-img" src="wp-content/themes/yellow-page-comics-theme/images/hero-slider-assets/images/superman-image.jpeg"/>';
                ?>
            </a>
            <!-- second -->
            <a class="hero-slide__card hero-slide__card-2 middle-card--right" href="/products">
                <?php 
                    echo '<img class="hero-slide__card-img" src="wp-content/themes/yellow-page-comics-theme/images/hero-slider-assets/images/deadpool-image.jpg"/>';
                ?>
            </a>
            <!-- third -->
            <a class="hero-slide__card hero-slide__card-3 middle-card--left" href="/products">
                <?php 
                    echo '<img class="hero-slide__card-img" src="wp-content/themes/yellow-page-comics-theme/images/hero-slider-assets/images/spider-man-image.png"/>';
                ?>
            </a>
            <!-- fourth -->
            <a class="hero-slide__card hero-slide__card-4 bottom-card-right" href="/products">
                <?php 
                    echo '<img class="hero-slide__card-img" src="wp-content/themes/yellow-page-comics-theme/images/hero-slider-assets/images/black-widow-image.jpeg"/>';
                ?>
            </a>
            <!-- fifth -->
            <a class="hero-slide__card hero-slide__card-5 bottom-card-left" href="/products">
                <?php 
                    echo '<img class="hero-slide__card-img" src="wp-content/themes/yellow-page-comics-theme/images/hero-slider-assets/images/batman-image.jpg"/>';
                ?>
            </a> 
        </div>

        <!-- next -->
        <button class="hero-sliders__movement-btn hero-sliders__next-btn">
            <i class="bi bi-arrow-right-short"></i>
        </button>
    </div>
</article>


<!-- Blog carousel section start -->
<section style="margin:5rem var(--page-buffer);">
    <h2>Flip the page on our blog</h2>

    <div>
        <?php 
            $homepagePosts = new WP_Query(array(
                "posts_per_page" => 2
            ));

            // $test = 1;
            // $blogTitle = the_title();
            // $abc = $homepagePosts->the_post();

            // while($homepagePosts->have_posts()) {
            //     $test++;
            //     $abc;
            //     echo "<div>$blogTitle</div>";
            // }
            $args = array(
                'posts_per_page' => -1,
            );
    
            $query = new WP_Query($args);
            if ($query->have_posts()): 
                echo '<div>';
                while ($query->have_posts()): $query->the_post();
                echo '<div style="padding:1rem 0;">';
                        echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                        echo '</br>';
    
                        echo the_title();
                        echo '</br>';

                        echo  wp_trim_words(get_the_content(), 18);
                        echo '</br>';
    
                        echo '<a href="' . get_permalink() . '">Learn more</a>';
                        echo '</br>';
                echo '</div>';
                endwhile;
                echo '</div>';
                wp_reset_postdata();
            endif;

        ?>
    </div>
</section>
<!-- Blog carousel section end -->


<!-- Event section Start -->
<section style="margin:5rem var(--page-buffer);">
    <h2>Upcoming Events!</h2>

    <div>
    <?php
        $currentDate = date('Myd');
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => -1,
            // this sorts by newest date to oldest date
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
            // This lets only get events that are upcoming and not all events
            // 'meta_query' => array(
            //     array(
            //         'key' => 'event_date',
            //         'compare' => '>=',
            //         'value' => $currentDate,
            //         'type' => 'numeric'
            //     )
            // )
        );

        $query = new WP_Query($args);
        if ($query->have_posts()): 
            echo '<div>';
            while ($query->have_posts()): $query->the_post();
            echo '<div style="padding:1rem 0;">';
                    echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                    echo '</br>';

                    echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 18);
                    echo '</br>';

                    echo the_field('event_date');
                    echo '</br>';

                    echo '<a href="' . get_permalink() . '">Learn more</a>';
                    echo '</br>';
            echo '</div>';
            endwhile;
            echo '</div>';
            wp_reset_postdata();
        endif;
    ?>
    </div>
</section>
<!-- Event section end -->


<?php
 get_footer()
?>