<?php
/* Template Name: Contact page Template*/
?>
<?php get_header() ?>

<main class="main contact" id="contact">
    <div class="container">
        <div class="contact-wrapper">
            <div class="left" data-aos="fade-up">
                <?php
                echo do_shortcode('[contact-form-7 id="5af879e" title="Contact form 1"]');
                ?>
            </div>
            <div class="right">
                <div class="contact-box">
                    <h4 data-aos="fade-up">address</h4>
                    <p data-aos="fade-up">
                        <strong>
                            Basics Architects
                        </strong>
                    </p>
                    <p data-aos="fade-up">B-179 | LGF | Shivalik | New Delhi</p>
                    <p data-aos="fade-up">110017</p>
                </div>
                <div class="contact-box">
                    <h4 data-aos="fade-up">phone number</h4>
                    <p data-aos="fade-up">
                        <a target="_blank" href="tel:+918595184113">
                            +91 85951 84113
                        </a>
                    </p>
                </div>
                <div class="contact-box">
                    <h4 data-aos="fade-up">project enquiry</h4>
                    <p data-aos="fade-up">
                        <a target="_blank" href="mailto:basics@basic.co.in">
                            basics@basic.co.in
                        </a>
                    </p>
                </div>
                <div class="contact-box">
                    <h4 data-aos="fade-up">career enquiry</h4>
                    <p data-aos="fade-up">
                        <a target="_blank" href="mailto:careers@basic.co.in">
                            careers@basic.co.in
                        </a>
                    </p>
                </div>
                <div class="contact-box">
                    <h4 data-aos="fade-up">media</h4>
                    <p data-aos="fade-up">
                        <a target="_blank" href="mailto:admin@basic.co.in">
                            admin@basic.co.in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>