<?php
get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <!-- primary-home starting from here -->
        <main id="main" class="site-main">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    comments_number( );
                    ?>
                    <div>
                    <ul>
                        <?php 
                        foreach(get_the_tags( ) as $tag) {
                           ?>
                           <li><?php echo $tag->name . ' ';?>
                           </li>
                           <?php 
                          }
                          
                          ?>
                    </ul>
                    </div>
                    <img src="<?php the_post_thumbnail_url( 'post-thumbnail' ) ?>"/>
                   <?php 
                    
                    // the_tags(  );
                    the_post();
                    get_template_part('template-parts/content', 'post');
                    comments_template(  );
                }
            }
            ?>
        </main>
    </div>
</div>

<?php
get_footer();
?>