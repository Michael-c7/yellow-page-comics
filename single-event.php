<!-- 
How the file name works for custom post types

single <-- the single page
event <-- the custom post type name eg:event, cat, dog,ect

name of this file single-event.php
 -->


 <!-- individual posts -->
 <?php
    get_header();

    echo "<div style='margin:1.5rem var(--page-buffer)'>";
    while(have_posts()) {
        the_post(); ?>
        <h2>
        <?php the_title()?>
        </h2>
        <p> <?php the_content()?> </p>
    <?php }

    echo "</div>";

 get_footer();
?>
