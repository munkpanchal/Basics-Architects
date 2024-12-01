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
                <h2 class="banner-heading !text-white text-center !mb-[8%]"
                    style="text-transform: capitalize; max-width:100%">
                    creating "nature integrated designs"
                </h2>




            </div>

        </div>
    </div>
</section>
<main class="main homepage" id="homepage">



    <section class="section h-section">
        <div class="container">
            <div class="one-side-two">

                <div class="out-box">
                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/4.webp") ?>" alt="">

                        <a class="btn btn-white read-more" href="/projects/greatvalue-sharanam-clubhouse/">Read More</a>
                    </div>
                </div>
                <div class="out-box">
                    <div class="flex flex-col gap-2 justify-center h-full ">
                        <h2 class="secondary-heading capitalize">
                            about
                        </h2>

                        <p class="para" style="line-height: 1.3;">

                            Basics Architects is an award-winning architecture and interior
                            design firm providing
                            Nature-Integrated-Design solutions across residential, commercial, educational and
                            hospitality segments.
                        </p>
                        <p class="para" style="line-height: 1.3;">

                            Founded in 2004
                            by Vinod Singhi & Ranju Singhi, our firm has delivered 100+ projects in 28 cities across
                            India, UK, UAE
                            and Canada. We create spaces that protect and prioritise the human-nature connection,
                            fostering user
                            health & wellness with minimal environmental impact.

                        </p>
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">
                        <?php
                        $videoUri = get_theme_file_uri("/public/homepage/soti_carl.mp4");
                        $videoUri = "https://lemonchiffon-hawk-580804.hostingersite.com/wp-content/uploads/2024/11/Vinod-Environment-Video.mp4"
                        ?>
                        <video class="max-sm:!aspect-[3/4] !aspect-square" src="<?php echo $videoUri; ?>" autoplay muted
                            playsinline loop controls></video>

                    </div>

                </div>
                <div class="out-box">

                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/7.webp") ?>" alt="">
                        <a class="btn btn-white read-more" href="/projects/desert-resort-at-bikaner">Read More</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="section h-section">
        <div class="container">
            <div class="one-upon-two">

                <div class="out-box">
                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/1.webp") ?>" alt="">
                        <a class="btn btn-white read-more" href="/projects/subhsankar-school">Read More</a>
                    </div>
                </div>
                <div class="out-box">
                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/2.webp") ?>" alt="">

                        <a class="btn btn-white read-more" href="/projects/pernod-ricard-dubai-office/">Read More</a>
                    </div>
                </div>
                <div class="out-box">
                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/3.webp") ?>" alt="">

                        <a class="btn btn-white read-more"
                            href="/projects/arrival-centre-for-island-resort-ozone-group/">Read More</a>

                    </div>
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

                        <h2 class="secondary-heading">
                            For people, with nature
                        </h2>

                        <p class="para">
                            We abide by the principles of Nature Integrated Design (NID), a holistic approach devised by
                            BASICS that connects humans with nature.
                        </p>
                        <p class="para">

                            We use resource-efficient and environmentally-conscious strategies to incorporate natural
                            elements in built spaces for lower stress, higher productivity and improved wellbeing.

                        </p>
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri("/public/homepage/5.webp") ?>" alt="">

                            <a class="btn btn-white read-more"
                                href="/projects/nature-inspired-residential-interiors/">Read More</a>
                        </div>
                    </div>

                </div>
                <div class="out-box">

                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/9.webp") ?>" alt="">
                        <a class="btn btn-white read-more" href="/projects/witty-institute-of-art-and-science">Read
                            More</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section h-section">
        <div class="container">
            <div class="one-side-two">

                <div class="out-box">
                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/new1.webp") ?>" alt="">

                        <a class="btn btn-white read-more" href="/projects/smart-world-housing-development/">Read
                            More</a>
                    </div>
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
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri("/public/homepage/88.webp") ?>" alt="">

                            <a class="btn btn-white read-more" href="/projects/dbds-shriram-school/">Read More</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">

                        <h2 class="secondary-heading">
                            Designs that deliver
                        </h2>

                        <p class="para">
                            We recognise the value of a client's investment - be it a family home, an office, a school
                            or a hotel, every project carries with it many aspirations, and must fulfl many objectives.
                            We design to honour these aspirations and objectives
                        </p>
                        <p class="para">

                            in BASICS, you have a partner you can trust to understand and translate your vision
                            into built form.

                        </p>
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
                    <div class="img-box">
                        <img src="<?php echo get_theme_file_uri("/public/homepage/12.webp") ?>" alt="">

                        <a class="btn btn-white read-more" href="/projects/city-mall-in-gangtok/">Read More</a>
                    </div>
                </div>

                <div class="out-box">
                    <div class="flex flex-col gap-4 justify-center h-full ">

                        <h2 class="secondary-heading">
                            Outcome-driven, process-oriented

                        </h2>

                        <p class="para">
                            Our studio of architects, designers and visualisers works with a network of consultants
                            contractors and AEC experts to ensure seamless project execution and delivery

                        </p>
                    </div>
                    <div class="flex flex-col gap-4 justify-center h-full ">
                        <div class="img-box">
                            <img src="<?php echo get_theme_file_uri("/public/homepage/141.webp") ?>" alt="">

                            <a class="btn btn-white read-more" href="/projects/diksha-knitwear-corporate-office/">Read
                                More</a>
                        </div>
                    </div>

                </div>

                <!-- <div class="out-box">

                    <img src="<?php echo get_theme_file_uri("/public/homepage/13.webp") ?>" alt="">
                </div> -->
                <div class="out-box">
                    <div class="img-box">

                        <img src="<?php echo get_theme_file_uri("/public/homepage/soti5.webp") ?>" alt="">

                        <a class="btn btn-white read-more" href="/projects/soti-corporate-office/">Read More</a>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonial Container -->

    <?php
    get_template_part("/components/homepage/content", "testimonial")
    ?>

    <?php
    get_template_part("/components/homepage/content", "clients")
    ?>


</main>
<?php get_footer() ?>