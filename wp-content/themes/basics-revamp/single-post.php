<?php get_header() ?>


<?php
$bannerUri = get_theme_file_uri("/public/banner.webp");
$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
if ($thumbnail_url) {
    $bannerUri = $thumbnail_url;
}

?>
<section class="banner blog">
    <div class="container">

        <div class="banner-wrapper <?php if ($args['class']) {
                                        echo $args['class'];
                                    } ?>" style="--bannerUri:url(<?php echo $bannerUri ?>)">

            <div class="banner-content">
                <h2 class="banner-heading !text-white" data-aos="fade-up">
                    <?php
                    echo get_the_title()
                    ?>
                </h2>

            </div>
        </div>
    </div>
</section>

<main class="main single-blog-page" id="single-blog-page">
    <div class="container">
        <div class="single-project-head">
            <div class="sph-left">



                <h2 class="project-title " data-aos="fade-up">
                    <?php
                    // echo get_the_title()
                    ?>
                </h2>


                <div class="project-details capitalize">
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Author:</strong>
                        <?php
                        echo get_the_author() ? get_the_author() : "Basics Architects"
                        ?>
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <strong>Published Date:</strong>
                        <?php echo get_the_date('F j, Y'); ?>
                    </p>
                </div>
            </div>
            <div class="sph-right">


                <h2 class="project-title w-max opacity-0 pointer-events-none">
                    <?php
                    // echo get_the_title()
                    ?>
                </h2>
                <?php
                $excerpt = get_the_excerpt();

                // Split the excerpt into an array of words
                $words = explode(' ', $excerpt);

                $sliceCount = 20;
                // Get the first 10 words
                $trimmed_excerpt = wp_trim_words($excerpt, $sliceCount, ' &nbsp;+');

                // Get the remaining words after the first 10
                $remaining_excerpt = implode(' ', array_slice($words, $sliceCount));
                if ($words) {
                ?>
                    <!-- <details data-aos="fade-up" data-aos-delay="100">
                        <summary>
                            <?php
                            echo $trimmed_excerpt;
                            ?>
                        </summary>
                        <p>
                            <?php
                            echo $remaining_excerpt;
                            ?>
                        </p>
                    </details> -->
                <?php
                }
                ?>

            </div>

        </div>

        <div class="single-blog-page-content">
            <?php
            echo get_the_content()
            ?>
        </div>
    </div>
</main>

<?php get_footer() ?>