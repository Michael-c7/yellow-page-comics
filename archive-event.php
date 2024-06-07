<?php 
get_header();
?>

<section style="margin:1.5rem var(--page-buffer);">
    <h1>Event Archive</h1>

    <h2 style="text-align:center; margin-top:2rem; margin-bottom:1rem;"><?php 
    if(is_category()) {
        single_cat_title();
    } 
    if(is_author()) {
        echo "Posts by "; the_author();
    } 
    ?></h2>
    
    <!-- posts go here -->
    <div>
        
        <?php
            while(have_posts()) {
                the_post(); ?>

                <div class="blog__post-item" style="display:flex; flex-direction:column; margin:1rem 0;">                   
                    <a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?></h2></a>
                    <p><?php the_time("F j, Y"); ?> * Posted by: <?php the_author_posts_link(); ?></p>
                    <div style="height:1px; background:gray; width:100%;"></div>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <button>Read more</button>
                        </a>
                        <div>comment icon  here 0</div>
                    </div>
                </div>
            <?php }
        ?>
    </div>

    <!-- pagination won't show if you don't have posts to paginate -->
    <?php
        echo paginate_links();
    ?>
</section>

<?php
get_footer();
?>