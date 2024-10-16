<?php

$product_id = get_the_ID();

$product = wc_get_product($product_id);
$product_categories = wp_get_post_terms($product_id, 'product_cat');

// Get the product gallery attachment IDs
$attachment_ids = $product_id ? wc_get_product($product_id)->get_gallery_image_ids() : array();


?>



<?php get_header() ?>

<?php
get_template_part("/components/shared/content", "banner");
?>

<main class="single-project">

    <div class="container">

        <div class="single-project-head">
            <h2 class="project-title" data-aos="fade-up">
                <?php
                echo $product->get_name()
                ?>
            </h2>

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

            <div class="project-content">
                <p data-aos="fade-up">
                    <?php
                    echo $product->description;
                    ?>
                </p>
            </div>

        </div>
        <div class="single-project-wrapper">
            <?php

            $row = 2;
            ?>

            <div class="project-row project-row-1">
                <?php


                $i = 1;
                // for ($i = 1; $i < 3; $i++) {

                foreach ($attachment_ids as $attachment_id) {

                    # code...
                    // $image_url =  get_theme_file_uri("/public/banner.jpg");
                    $image_url = wp_get_attachment_url($attachment_id)
                ?>

                    <a href="<?php echo $image_url; ?>" data-fancybox="gallery" data-caption="title"
                        class="project <?php echo "project-" . floor(($i - 1) % 3) + 1 ?>" data-aos="fade-up">
                        <img src=" <?php echo $image_url; ?>" alt="">

                    </a>
                <?php
                    if ($i == 4) {
                        $i++;
                        $i++;
                    }

                    if ($i % 3 == 0) {
                        echo "</div><div class='project-row project-row-" . $row . "'>";
                        $row < 3 ? $row++ : $row = 1;
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
            <div class="grid sm:grid-cols-3 gap-4">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    # code...

                    if (get_the_post_thumbnail_url($post->ID, 'large')) {
                        $imgUrl = get_the_post_thumbnail_url($post->ID, 'large');
                    } else {
                        $imgUrl = get_theme_file_uri("/public/default-blog.jpg");
                    }
                ?>
                    <div class="rp-box fade-box" data-aos="fade-up">
                        <img src="<?php echo $imgUrl ?>" alt="<?php echo $post->post_title ?>">
                        <div class="rp-box-content fade-target">
                            <h3 class="uppercase">
                                <!-- <?php echo $post->post_title ?> -->
                                related project <?php
                                                echo $i
                                                ?>
                            </h3>
                            <p>
                                <?php echo wp_trim_words($post->post_content, 10) ?>
                            </p>
                            <a class="btn btn-white" target="_blank" href="<?php the_permalink($post->ID) ?>">Read
                                More</a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </section>

    </div>

</main>
<?php get_footer() ?>