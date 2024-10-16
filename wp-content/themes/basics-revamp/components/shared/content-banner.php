<?php
$bannerUri = get_theme_file_uri("/public/banner.webp");
?>
<section class="banner">
    <div class="container">

        <div class="banner-wrapper" style="--bannerUri:url(<?php echo $bannerUri ?>)">
            <img src="<?php echo $bannerUri ?>" alt="">
        </div>
    </div>
</section>