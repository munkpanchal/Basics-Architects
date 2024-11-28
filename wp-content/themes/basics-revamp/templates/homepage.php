<?php
/* Template Name: Homepage Template*/
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
            <div class="banner-content !justify-end !items-center">
                <!-- <h2 class="banner-heading !text-white text-center mt-8 " style="background-image: linear-gradient(to right bottom, #ec8508, #bd562a, #82342e, #431d22, #000000);  background-clip: text;
  -webkit-text-fill-color: transparent;text-transform: capitalize;" data-aos="fade-up"> -->
                <h2 class="banner-heading !text-white text-center !mb-24" style="text-transform: capitalize;">
                    creating nature integrated designs.
                </h2>


            </div>

        </div>
    </div>
</section>
<main class="main homepage" id="homepage">




    <section class="section">
        <div class="container">
            <p class="text-lg sm:text-xl sm:px-8 xl:px-16 sm:text-center">
                BASICS Architects is an award-winning architecture and interior design firm providing Nature-integrated
                design solutions across residential, commercial, educational and hospitality segments. Founded in 2004
                by Vinod Singhi & Ranju Singhi, our firm has delivered 100+ projects in 28 cities across India, UK, UAE
                and Canada. We create spaces that protect and prioritise the Fuman-nature connection, fostering user
                health & wellness with minimal environmental impact.</p>

        </div>
    </section>
    <section class="section h-section">
        <div class="container">
            <div class="one-upon-two">

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/1.webp") ?>" alt="">
                </div>
                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/2.webp") ?>" alt="">
                </div>
                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/3.webp") ?>" alt="">
                </div>
            </div>

        </div>
    </section>
    <section class="section h-section">
        <div class="container">
            <div class="one-side-two">

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/4.webp") ?>" alt="">
                </div>
                <div class="out-box">
                    <?php
                    $videoUri = get_theme_file_uri("/public/homepage/soti_carl.mp4");
                    $videoUri = "https://lemonchiffon-hawk-580804.hostingersite.com/wp-content/uploads/2024/11/Vinod-Environment-Video.mp4"
                    ?>
                    <video class="max-sm:!aspect-[3/4] !aspect-square" src="<?php echo $videoUri; ?>" autoplay muted
                        playsinline loop controls></video>

                    <div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sapiente dolorem, facilis sit
                            quis neque? Deserunt ipsa, repreh
                            enderit nam animi quam ex, quas officiis libero enim
                            pariatur necessitatibus dolorum rerum?
                        </p>
                    </div>
                </div>
                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/5.webp") ?>" alt="">
                </div>
            </div>

        </div>
    </section>
    <section class="section h-section">
        <div class="container">
            <div class="two-side-one">

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/6.webp") ?>" alt="">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/ranju.webp") ?>" alt="">
                </div>
                <div class="out-box">

                    <img src="<?php echo get_theme_file_uri("/public/homepage/7.webp") ?>" alt="">
                </div>
                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/8.webp") ?>" alt="">
                </div>
            </div>

        </div>
    </section>

    <section class="section h-section">
        <div class="container">
            <div class="one-side-two">

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/9.webp") ?>" alt="">
                </div>
                <div class="out-box">
                    <?php
                    $videoUri = get_theme_file_uri("/public/homepage/soti_carl.mp4");
                    $videoUri = "https://lemonchiffon-hawk-580804.hostingersite.com/wp-content/uploads/2024/11/soti_carl.mp4"
                    ?>
                    <video src="<?php echo $videoUri; ?>" autoplay muted playsinline loop controls></video>
                </div>
                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/10.webp") ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section h-section">
        <div class="container">
            <div class="two-by-two">

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/11.webp") ?>" alt="">
                </div>

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/12.webp") ?>" alt="">
                </div>
                <div class="out-box">

                    <img src="<?php echo get_theme_file_uri("/public/homepage/13.webp") ?>" alt="">
                </div>
                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/14.webp") ?>" alt="">
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonial Container -->

    <?php
    get_template_part("/components/homepage/content", "clients")
    ?>

    <?php
    get_template_part("/components/homepage/content", "testimonial")
    ?>


</main>
<?php get_footer() ?>