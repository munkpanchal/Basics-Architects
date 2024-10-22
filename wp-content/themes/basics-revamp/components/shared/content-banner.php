<?php
$bannerUri = get_theme_file_uri("/public/banner.webp");
?>
<section class="banner">
    <div class="container">

        <div class="banner-wrapper <?php if ($args['class']) {
                                        echo $args['class'];
                                    } ?>" style="--bannerUri:url(<?php echo $bannerUri ?>)">
            <!-- <img src="<?php echo $bannerUri ?>" alt=""> -->
            <div class="banner-content">
                <h2 class="banner-heading !text-white" data-aos="fade-up">
                    Lorem ipsum dolor sit.
                </h2>
                <p class="banner-para" data-aos="fade-up" data-aos-delay="100">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque a tempore minima fuga facilis
                    cum? Sequi consequuntur incidunt repellat vel maxime ut doloremque non, cum esse, rerum culpa
                    aliquam! Ex?
                </p>

            </div>

        </div>
    </div>
</section>