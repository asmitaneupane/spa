<footer id="colophon" class="site-footer">
            <!-- footer starting from here -->
            <div class="widget-area" style="background: url( assets/img/footer-bg.png)">
                <!-- widget area starting
                from here -->
                <div class="container">
                    <aside class="widget">
                        <div class="textwidget">
                            <a href="#" class="footer-branding">
                                <img src="assets/img/site-logo.png" alt="">
                            </a>
                        </div>
                    </aside>
                    <aside class="widget">
                        <div class="contact-detail">
                            <div class="textwidget">
                                <ul>
                                    <li>
                                        <h4>address</h4>
                                        <span>525 E 71st street New York , NY, Clover Hill , Flanders, NJ, USA</span>
                                    </li>
                                    <li>
                                        <h4>call us</h4>
                                        <span>
                                            <a href="mailto:info@gmail.com">info@gmail.com</a>
                                        </span>
                                        <span>
                                            <a href="mailto:support_spa@gmail.com">support_spa@gmail.com</a>
                                        </span>
                                    </li>
                                    <li>
                                        <h4>email us</h4>
                                        <span>
                                            <a href="tel:+1 484 473 2449">+1 484 473 2449</a>
                                        </span>
                                        <span>
                                            <a href="tel:+1 484 473 2449">+1 484 473 2450</a>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget">
                        <h2 class="widget-title"><span>Subscribe</span> Get Latest updates</h2>
                        <form class="mc4wp-form">
                            <div class="mc4wp-form-fields">
                                <p>
                                    <input name="EMAIL" placeholder="exmaple@gmail.com" required="" type="email">
                                </p>
                                <p>
                                    <input value="SUBSCRIBE" type="submit">
                                </p>
                                <label style="display: none !important;">Leave this field empty if you're
                                    human:
                                    <input name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" type="text">
                                </label>
                                <input name="_mc4wp_timestamp" value="1507111963" type="hidden">
                                <input name="_mc4wp_form_id" value="1732" type="hidden">
                                <input name="_mc4wp_form_element_id" value="mc4wp-form-1" type="hidden">
                            </div>
                            <div class="mc4wp-response"></div>
                        </form>
                    </aside>
                </div>
            </div>
            <!-- widget area ends here -->
            <div class="site-generator">
            <div class="container">
            
            <?php
                dynamic_sidebar( 'footer-1' );
            ?>

            <?php
            dynamic_sidebar( 'footer-2' );
            ?>
        </div>
            </div>
        </footer>
        <!-- footer ends here -->


<div class="back-to-top">
    <button href="#masthead" title="Go to Top" class="fa-angle-up"></button>
</div>
</div><!-- #page-->


<?php
wp_footer()
?>

</body>

</html>