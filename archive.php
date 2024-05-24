<?php 
get_header();
?>

<section style="margin:0 10rem;">
    <h1 style="text-align:center; margin-top:2rem; margin-bottom:1rem;"><?php 
    if(is_category()) {
        single_cat_title();
    } 
    if(is_author()) {
        echo "Posts by "; the_author();
    } 
    ?></h1>

    <div>
            <ul class="breadcrumbs">
                <li><a href="<?php echo site_url("/") ?>">Home</a></li>
                <?php
                    $parentPageId = wp_get_post_parent_id(get_the_ID());
                    $child_url = get_permalink($parentPageId);
                    $child_text = get_the_title($parentPageId);
                    
                    if($parentPageId) {
                        echo "<li><a href='$child_url'>$child_text</a></li>";
                    }
                ?>
                <li><?php the_title() ?></li>
            </ul>
        </div>
    
    <!-- posts go here -->
    <div>
        <?php
            while(have_posts()) {
                the_post(); ?>

                <div class="blog__post-item" style="display:flex; flex-direction:column; margin:1rem 0;">
                    <a href="<?php the_permalink(); ?>">
                        <img src="https://images.unsplash.com/photo-1622307053412-5404f0c427c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="blog image" style="width:400px;"/>
                    </a>
                    
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