<?php

$product_id = get_the_ID();

$product = wc_get_product($product_id);
$product_categories = wp_get_post_terms($product_id, 'product_cat');
// Get the product gallery attachment IDs
$attachment_ids = $product_id ? wc_get_product($product_id)->get_gallery_image_ids() : array();


?>



<?php get_header() ?>

<?php
$bannerUri = get_theme_file_uri("/public/banner.webp");
$thumbnail_url = get_the_post_thumbnail_url($product_id, 'full');
if ($thumbnail_url) {
    $bannerUri = $thumbnail_url;
}

?>
<section class="banner">
    <div class="container">

        <div class="banner-wrapper <?php if ($args['class']) {
                                        echo $args['class'];
                                    } ?>" style="--bannerUri:url(<?php echo $bannerUri ?>)">
            <!-- <img src="<?php echo $bannerUri ?>" alt=""> -->

            <div class="banner-content">
                <h2 class="banner-heading !text-white" data-aos="fade-up">
                    <?php
                    echo $product->get_name()
                    ?>
                </h2>

            </div>
        </div>
    </div>
</section>
<main class="single-project">

    <div class="container">

        <div class="single-project-head">
            <div class="sph-left">


                <!-- 
                <h2 class="project-title " data-aos="fade-up">
                    <?php
                    echo $product->get_name()
                    ?>
                </h2> -->

                <?php
                $year = get_field("year");
                $location = get_field("location");
                $area = get_field("area");
                ?>

                <div class="project-details capitalize">
                    <?php
                    if ($year) {
                    ?>
                    <p data-aos="fade-up"><strong>Year : </strong><?php echo $year; ?></p>
                    <?php
                    }
                    ?>

                    <?php
                    if ($location) {
                    ?>
                    <p data-aos="fade-up"><strong>Location : </strong><?php echo $location; ?></p>
                    <?php
                    }
                    ?>

                    <?php
                    if ($area) {
                    ?>
                    <p data-aos="fade-up"><strong>Area : </strong><?php echo $area; ?></p>
                    <?php
                    }
                    ?>



                </div>
            </div>
            <?php
            if ($product->description) {
            ?>
            <div class="sph-right">

                <!-- <h2 class="project-title opacity-0 pointer-events-none max-sm:hidden">
                        <?php
                        echo $product->get_name()
                        ?>
                    </h2> -->
                <div class="project-content max-sm:pt-2">

                    <div data-aos="fade-up">
                        <details>
                            <summary>
                                <?php
                                    echo $product->short_description;
                                    ?>
                            </summary>
                            <?php
                                echo $product->description;
                                ?>
                        </details>

                    </div>
                </div>
            </div>

            <?php
            }
            ?>
        </div>
        <div class="single-project-wrapper">
            <?php

            $row = 2;
            ?>

            <div class="project-row project-row-1">
                <?php


                $i = 1;

                $type = false;
                foreach ($attachment_ids as $attachment_id) {

                    $image_url = wp_get_attachment_url($attachment_id);
                    if ($row == 1) {
                        $i++;
                        $i++;
                    }


                ?>



                <a href="<?php echo $image_url; ?>" data-fancybox="gallery" data-caption="title" class="project"
                    data-aos="fade-up">
                    <img src=" <?php echo $image_url; ?>" alt="">

                </a>
                <?php

                    if ($i % 3 == 0) {
                    ?>

            </div>
            <div class='project-row project-row-<?php echo $row ?> <?php echo $type ? "type-1" : "" ?>'>
                <?php
                        $row < 2 ? $row++ : $row = 1;
                        if ($row == 1) {
                            $type = !$type;
                        }
                    }
                    $i++;
                }

        ?>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="related-projects my-4">
            <h2 class="primary-heading text-center sm:pb-4" data-aos="fade-up">
                Related projects
            </h2>
            <?php


            $product_categories = get_the_terms($product_id, 'product_cat');
            $category_id = $product_categories[0]->term_id;

            $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'menu_order title',
                'order' => 'ASC',

                'post__not_in' => array($product_id),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'term_id',
                        'terms' => $category_id, // You can adjust this to include multiple categories if needed
                    ),
                ),
            );

            $products = wc_get_products($args);

            if ($products) {
            ?>

            <div class="grid sm:grid-cols-3 gap-4">
                <?php

                    foreach ($products as $product) {
                        if ($product->get_id() === get_the_ID()) {
                            continue;
                        }

                        $imgUrl = get_the_post_thumbnail_url($product->get_id(), 'large');

                        if (!$imgUrl) {
                            $imgUrl = get_theme_file_uri("/public/default-blog.jpg");
                        }
                    ?>

                <div class="rp-box fade-box" data-aos="fade-up">
                    <img src="<?php echo $imgUrl ?>" alt="<?php echo $product->get_name() ?>">
                    <div class="rp-box-content fade-target">
                        <h3 class="uppercase">
                            <?php echo $product->get_name() ?>
                        </h3>
                        <p>
                            <?php echo wp_trim_words($product->get_short_description(), 10) ?>
                        </p>
                        <a class="btn btn-white" href="<?php echo get_permalink($product->get_id()) ?>">Read More</a>
                    </div>
                </div>

                <?php
                    }
                } else {
                    ?>
                <p class="text-center">
                    No Related Project found.
                </p>
                <?php
                }
                ?>
            </div>
        </section>

    </div>

</main>
<?php get_footer() ?>