<?php
/* Template Name: Studio page Template*/
?>
<?php get_header() ?>

<?php
get_template_part("/components/shared/content", "banner", array('class' => ''));;
?>

<main class="main studio" id="studio">
    <div class="container">
        <div class="studio-wrapper">
            <div class="section">
                <div class="section-head">
                    <h2 class="primary-heading text-center">
                        our partners
                    </h2>
                    <p>
                        on progress
                    </p>
                </div>
            </div>
            <section class="section">
                <div class="section-head">
                    <h2 class="primary-heading text-center">
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