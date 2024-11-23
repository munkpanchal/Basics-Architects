<?php
/* Template Name: Homepage Template g*/
?>
<?php get_header() ?>

<?php
$img = get_theme_file_uri("/public/banner.jpg")
?>

<?php
$bannerUri = get_theme_file_uri("/public/homepage/banner.webp");
?>
<section class="banner">
    <div class="container">

        <div class="banner-wrapper" style="--bannerUri:url(<?php echo $bannerUri ?>)">
            <div class="banner-content !justify-start !items-center">
                <h2 class="banner-heading !text-white text-center mt-8 " style="background-image: linear-gradient(to right bottom, #ec8508, #bd562a, #82342e, #431d22, #000000);  background-clip: text;
  -webkit-text-fill-color: transparent;;" data-aos="fade-up">
                    creating nature integrated designs.
                </h2>


            </div>

        </div>
    </div>
</section>
<main class="main homepage" id="homepage">

    <section class="section">
        <div class="container">
            <p class="text-lg sm:text-xl px-16 text-center">
                BASICS Architects is an award-winning architecture and interior design firm providing Nature-integrated
                design solutions across residential, commercial, educational and hospitality segments. Founded in 2004
                by Vinod Singhi & Ranju Singhi, our firm has delivered 100+ projects in 28 cities across India, UK, UAE
                and Canada. We create spaces that protect and prioritise the Fuman-nature connection, fostering user
                health & wellness with minimal environmental impact.</p>

        </div>

    </section>
    <section class="section">
        <div class="container">

            <div class="one-by-two">
                <a class="column" href="/">
                    <h2 class="primary-heading">
                        Lorem ipsum dolor sit amet.
                    </h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsum nobis modi fugiat culpa,
                        sint
                        quam
                        optio
                        odio excepturi hic, sequi nesciunt iure! Fuga optio odio officiis voluptatem, tenetur omnis!
                    </p>
                </a>
                <a class="column" href="/">
                    <?php
                    $videoUri = get_theme_file_uri("/public/test.mp4")
                    ?>
                    <video src="<?php echo $videoUri; ?>" autoplay muted playsinline loop controls></video>
                </a>
            </div>

        </div>

    </section>


    <section class="section">
        <div class="container">
            <div class="splide testimonial-slider mt-8" id="testimonial-slider">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <div class="ts-wrap">
                                <img src="<?php echo get_theme_file_uri("/public/logos/dcm.png") ?>" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="ts-wrap">
                                <img src="<?php echo get_theme_file_uri("/public/logos/sharda.png") ?>" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="ts-wrap">
                                <img src="<?php echo get_theme_file_uri("/public/logos/shree-ram.png") ?>" alt="">
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="two-by-two">
                <a class="column" href="/">
                    <img class="max-sm:aspect-[9/16] aspect-[3/4]" src="<?php echo $img ?>" alt="">
                </a>

                <a class="column" href="/">
                    <img class="max-sm:aspect-[9/16] aspect-[3/4]" src="<?php echo $img ?>" alt="">
                </a>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="one-by-two">
                <a class="column" href="/">
                    <img class="aspect-video" src="<?php echo $img ?>" alt="">
                </a>
                <a class="column" href="/">
                    <h2 class="primary-heading">
                        Lorem ipsum dolor sit amet.
                    </h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsum nobis modi fugiat culpa,
                        sint
                        quam
                        optio
                        odio excepturi hic, sequi nesciunt iure! Fuga optio odio officiis voluptatem, tenetur omnis!
                    </p>
                </a>

            </div>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <img class="aspect-video " src="<?php echo $img ?>" alt="">
        </div>
    </section>


</main>
<?php get_footer() ?>