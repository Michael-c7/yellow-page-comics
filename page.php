<!-- individual pages -->

<?php
    get_header();

    while(have_posts()) {
        the_post(); ?>

    <section class="generic-content">
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
            
        <h2 class="generic-content__heading"><?php the_title() ?></h2>
            
        <p class="generic-content__text"><?php the_content()?></p>


        <?php 
            $child_links = wp_list_pages(
                array(
                    'title_li' => NULL,
                    'child_of' => get_the_ID(),
                    'echo' => 0 // Set 'echo' parameter to 0 to return the value instead of echoing it
                )
            );

            $testArr = get_pages(array(
                'child_of' => get_the_ID()
            ));
        
        // We want to hide our html when no children to show so on two conditions
        // 1. no children present 
        //  2. a child page w/ no children of its own
        // Skip this feature for now
        if($parentPageId) {
            $findChildrenOf = $parentPageId;
        } else {
            $findChildrenOf = get_the_ID();
        }

        wp_list_pages(
            array(
                'title_li' => NULL,
                'child_of' => $findChildrenOf,
            )
        );
    ?>
    </section>
    <?php 
}

get_footer()
?>
