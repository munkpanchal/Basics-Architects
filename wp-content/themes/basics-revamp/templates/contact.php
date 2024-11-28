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
                        <a target="_blank" href="mailto:basics@basics.co.in">
                            basics@basics.co.in
                        </a>
                    </p>
                </div>
                <div class="contact-box">
                    <h4 data-aos="fade-up">career enquiry</h4>
                    <p data-aos="fade-up">
                        <a target="_blank" href="mailto:careers@basics.co.in">
                            careers@basics.co.in
                        </a>
                    </p>
                </div>
                <div class="contact-box">
                    <h4 data-aos="fade-up">media</h4>
                    <p data-aos="fade-up">
                        <a target="_blank" href="mailto:admin@basics.co.in">
                            admin@basics.co.in
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.138446425003!2d77.20447927414592!3d28.53555808848027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce21cbc9c5eed%3A0x1409ce170c78a4dd!2sBasics%20Architects!5e0!3m2!1sen!2sin!4v1730184397819!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</main>
<?php get_footer() ?>