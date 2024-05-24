<?php get_header() ?>




<?php
/*
    while(have_posts()) {
        the_post(); ?>
        <h2>
            <a href="<?php the_permalink()?>">
                <?php the_title()?>
            </a>
        </h2>
        <p> <?php the_content()?> </p>
        <hr/>
        <?php }
        
*/
?>
        
<?php
 // get_footer()
?>



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


<?php
 get_footer()
?>