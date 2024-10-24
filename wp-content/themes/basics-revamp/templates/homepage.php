<?php
/* Template Name: Homepage Template*/
?>
<?php get_header() ?>

<?php
$img = get_theme_file_uri("/public/banner.jpg")
?>

<?php
get_template_part("/components/shared/content", "banner", array('class' => ''));
?>
<main class="main homepage" id="homepage">

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