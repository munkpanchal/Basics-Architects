<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-top">
                <div class="left">
                    <h3 class="footer-heading" data-target="data-contact"
                        style="--url:url(<?php echo get_theme_file_uri("/public/icons/plus.svg") ?>)">
                        contact
                    </h3>
                    <div class="footer-content" data-contact>
                        <div class="fc-wrap">
                            <!-- <h4>address</h4> -->
                            <div>
                                <p>
                                    <strong>
                                        Basics Architects
                                    </strong>
                                </p>
                                <p>B-179 | LGF | Shivalik | New Delhi</p>
                                <p>110017</p>
                            </div>
                            <!-- <div class="fc-wrap"> -->
                            <!-- <h4>phone</h4> -->
                            <a href="tel:+918595184113" target="_blank">
                                +91 85951 84113
                            </a>
                            <!-- </div> -->
                        </div>



                    </div>
                </div>
                <div class="middle">
                    <h3 class="footer-heading" data-target="data-email">
                        email
                    </h3>
                    <div class="footer-content" data-email>
                        <div class="fc-wrap">
                            <p>
                                <strong>project enquiry</strong>
                                <a target="_blank" href="mailto:basics@basics.co.in">
                                    basics@basics.co.in
                                </a>
                            </p>
                        </div>
                        <div class="fc-wrap">
                            <p>
                                <strong>career enquiry</strong>
                                <a target="_blank" href="mailto:careers@basics.co.in">
                                    careers@basics.co.in
                                </a>
                            </p>
                        </div>
                        <div class="fc-wrap">
                            <p>
                                <strong>media</strong>
                                <a target="_blank" href="mailto:admin@basics.co.in">
                                    admin@basics.co.in
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="middle">
                    <h3 class="footer-heading" data-target="data-newsletter">
                        newsletter
                    </h3>
                    <div class="footer-content" data-newsletter>
                        <div class="fc-wrap">
                            <p class="max-sm:w-full">
                                <strong>
                                    subscribe to our news letter</strong>

                            </p>
                            <div class="news-letter-box">
                                <?php
                                echo do_shortcode('[contact-form-7 id="fd760f0" title="Untitled"]');
                                ?>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="right">
                    <h3 class="footer-heading" data-target="data-social">
                        social
                    </h3>
                    <div class="footer-content" data-social>
                        <a href="/" data-social-link target="_blank">instagram</a>
                        <a href="/" data-social-link target="_blank">facebook</a>
                        <a href="/" data-social-link target="_blank">youtube</a>
                    </div>
                </div>


            </div>
            <!-- 
            <div class="news-letter">
                <h3 class="footer-heading sm:mx-auto">
                    subscribe to our news letter
                </h3>
                <input type="text" placeholder="Enter your email..">
            </div> -->

            <p class="copyright">
                &copy; 2024, BASICS Architects | All rights reserved
            </p>
        </div>
    </div>

</footer>
<?php wp_footer() ?>
</body>

</html>