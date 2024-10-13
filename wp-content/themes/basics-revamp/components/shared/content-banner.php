<?php
$bannerUri = get_theme_file_uri("/public/banner.jpg");
?>
<section class="banner">
    <div class="banner-wrapper" style="--bannerUri:url(<?php echo $bannerUri ?>)">
        <img src="<?php echo $bannerUri ?>" alt="">

    </div>
</section>