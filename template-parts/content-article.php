                <div class="container">
                    <div class="">
                        <span class="date"><?php the_date(); ?></span>
                        <?php
                        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>')
                        ?>
                        <span class="comment"><a href="#comments"><i class="fa fa-comment"></i><?php comments_number() ?></a></span>
                    </div>
                    <?php
                    the_content();
                    ?>

                    <?php
                    comments_template();
                    ?>
                </div>