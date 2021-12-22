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
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                }
            }
            ?>
        </main>
    </div>
    <?php
    the_posts_pagination( );
    ?>
</div>

<?php
get_footer();
?>