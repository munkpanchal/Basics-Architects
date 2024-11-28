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
                <h2 class="banner-heading  !text-white text-center !mb-24"
                    style="text-transform: capitalize; max-width:100%">
                    creating "nature integrated designs"
                </h2>


            </div>

        </div>
    </div>
</section>
<main class="main homepage" id="homepage">




    <section class="section">
        <div class="container">
            <p class="text-[22px] leading-7 sm:text-xl sm:px-8 xl:px-16 sm:text-center" style="width: min(60ch,100%);">
                Basics Architects is an award-winning architecture and interior
                design firm providing
                Nature-integrated
                design solutions across residential, commercial, educational and hospitality segments. Founded in 2004
                by Vinod Singhi & Ranju Singhi, our firm has delivered 100+ projects in 28 cities across India, UK, UAE
                and Canada. We create spaces that protect and prioritise the Fuman-nature connection, fostering user
                health & wellness with minimal environmental impact.
            </p>

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


                </div>
                <div class="out-box">
                    <div class="flex flex-col gap-4 justify-center h-full ">

                        <h2 class="!text-3xl">
                            For people, with nature
                        </h2>

                        <p class="text-xl">
                            We abide by the principles of Nature Integrated Design (NID), a holistic approach devised by
                            BASICS that connects humans with nature.
                        </p>
                        <p class="text-xl">

                            We use resource-efficient and environmentally-conscious strategies to incorporate natural
                            elements in built spaces for lower stress, higher productivity and improved wellbeing.

                        </p>
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/5.webp") ?>" alt="">
                    </div>

                </div>
            </div>

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
            <div class="two-side-one">

                <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/6.webp") ?>" alt="">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/ranju.webp") ?>" alt="">
                </div>

                <div class="out-box">
                    <div class="flex flex-col gap-4 justify-center h-full ">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/8.webp") ?>" alt="">
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">

                        <h2 class="!text-3xl">
                            Designs that deliver
                        </h2>

                        <p class="text-xl">
                            We recognise the value of a client's investment - be it a family home, an office, a school
                            or a hotel, every project carries with it many aspirations, and must fulfl many objectives.
                            We design to honour these aspirations and objectives
                        </p>
                        <p class="text-xl">

                            in BASICS, you have a partner you can trust to understand and translate your vision
                            into built form.

                        </p>
                    </div>


                </div>
                <div class="out-box">

                    <img src="<?php echo get_theme_file_uri("/public/homepage/7.webp") ?>" alt="">
                </div>
                <!-- <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/8.webp") ?>" alt="">
                </div> -->
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
                <!-- <div class="out-box">
                    <img src="<?php echo get_theme_file_uri("/public/homepage/10.webp") ?>" alt="">
                </div> -->
                <div class="out-box">
                    <div class="flex flex-col gap-4 justify-center h-full ">

                        <h2 class="!text-3xl">
                            Outcome-driven, process-oriented

                        </h2>

                        <p class="text-xl">
                            Our studio of architects, designers and visualisers works with a network of consultants
                            contractors and AEC experts to ensure seamless project execution and delivery

                        </p>
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/5.webp") ?>" alt="">
                    </div>

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