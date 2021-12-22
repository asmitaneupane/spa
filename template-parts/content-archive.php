<div class="container">
    <div class="row">
        <div class="custom-col-6">
            <div class="about-us-image-wrapper image-wrapper-has-two-image">
                <figure class="first-image">
                    <img src="<?php the_post_thumbnail_url('post-thumbnail'); ?>" alt="">
                </figure>
                <figure class="second-image">
                    <img src="assets/img/about2.jpg" alt="">
                </figure>
            </div>
        </div>
        <div class="custom-col-6">
            <div class="about-us-content">
                <header class="entry-header heading">
                    <h2 class="entry-title"><a href="<?php the_permalink( ); ?>">
                    <?php
                    the_title( );
                    ?>
                    </a>
                    </h2>
                    <div class="meta"><span class="date"><?php the_date(); ?></span>
                    <span class="comment"><a href="#"><?php comments_number( ); ?> </a>
                    </span>
                    </div>
                </header>
                <?php
                    the_excerpt(  );
                    ?>
                <a href="<?php the_permalink( ); ?>" class="box-button"> Read More</a>
            </div>
        </div>
    </div>
</div>