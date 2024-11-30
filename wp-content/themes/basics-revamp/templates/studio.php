<?php
/* Template Name: Studio page Template*/
?>
<?php get_header() ?>

<?php
// get_template_part("/components/shared/content", "banner", array('class' => ''));;
?>

<?php
$bannerUri = get_theme_file_uri("/public/banner.webp");
?>
<section class="banner">
    <div class="container">

        <div class="banner-wrapper <?php if ($args['class']) {
                                        echo $args['class'];
                                    } ?>">
            <!-- <img src="<?php echo $bannerUri ?>" alt=""> -->
            <div class="flex gap-4">
                <div class="banner-left">
                    <p class="para" data-aos="fade-up" data-aos-delay="100">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque a tempore minima fuga
                        facilis
                        cum? Sequi consequuntur incidunt repellat vel maxime ut doloremque non, cum esse, rerum culpa
                        aliquam! Ex?
                    </p>

                </div>
                <div class="banner-left">
                    <p class="banner-para" data-aos="fade-up" data-aos-delay="100">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque a tempore minima fuga
                        facilis
                        cum? Sequi consequuntur incidunt repellat vel maxime ut doloremque non, cum esse, rerum culpa
                        aliquam! Ex?
                    </p>

                </div>

                <!-- <h2 class="banner-heading text-white" data-aos="fade-up">
                    Lorem ipsum dolor sit.
                </h2> -->

            </div>

        </div>
    </div>
</section>

<main class="main studio" id="studio">
    <div class="container">
        <div class="studio-wrapper">
            <div class="section">
                <div class="section-head">
                    <h2 class="primary-heading text-center" data-aos="fade-up">
                        our partners
                    </h2>
                    <div class="flex gap-4 max-xl:flex-col sm:my-8">

                        <div class="left-right flex-1">

                            <div class="content-box">
                                <h2 data-aos="fade-up">vinod singhi</h2>
                                <h4 data-aos="fade-up">
                                    Principal Architect & Managing Partner
                                </h4>
                                <p data-aos="fade-up">
                                    Vinod founded Basics Architects in the year 2004. Combined with his construction
                                    management experience, he provides a comprehensive understanding of projects with
                                    seamless integration between Design & Construction.</p>
                            </div>
                            <div class="img-box" data-aos="fade-up">
                                <figure>
                                    <img src="<?php echo get_theme_file_uri("/public/founders/vinod.webp") ?>" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="left-right flex-1">

                            <div class="img-box" data-aos="fade-up">
                                <figure>
                                    <img src="<?php echo get_theme_file_uri("/public/founders/ranju.webp") ?>" alt="">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h2 data-aos="fade-up">Ranju singhi</h2>
                                <h4 data-aos="fade-up">
                                    Principal Architect & Managing Partner
                                </h4>
                                <p data-aos="fade-up">

                                    Ranju Singhi co-founded Basics with Vinod Singhi & serves as the Principal Architect
                                    in the firm. With over 20 years experience in the industry, Ranju has worked on
                                    variety of projects both Architecture & Interiors.
                                </p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <section class="section">
                <div class="section-head">
                    <h2 class="primary-heading text-center" data-aos="fade-up">
                        team basics
                    </h2>
                </div>
                <div class="splide studio-slider mt-8" id="studio-slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            for ($i = 1; $i <= 3; $i++) {
                                # code...
                            ?> <li class="splide__slide">

                                    <div class="team-slide">
                                        <img src="<?php echo get_theme_file_uri("/public/teams/") . $i . ".jpg" ?>" alt="">
                                    </div>

                                </li>
                            <?php
                            }
                            ?>
                        </ul>

                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
<?php get_footer() ?>