<?php get_header() ?>


<?php
// get_template_part("/components/shared/content", "banner", array('class' => ''));;
// echo get_the_ID();
if (get_field("gallery")) {
    $gallery  = get_field("gallery", get_the_ID());
}
?>

<main class="main single-honour-page" id="single-honour-page">
    <div class="container">
        <div class="single-honour-gallery">

            <?php
            echo $gallery;
            ?>

        </div>
    </div>
</main>

<?php get_footer() ?>