<?php

$product_id = get_the_ID();

$product = wc_get_product($product_id);
$product_categories = wp_get_post_terms($product_id, 'product_cat');
$category = $product_categories[0]->name;


// $category_id = $product_categories[0]->term_id;
// $category_url = get_term_link($category_id, 'product_cat');

// $sku = $product->get_sku();

// $thumbnail_id = get_post_thumbnail_id($product_id);
// $image_data = wp_get_attachment_image_src($thumbnail_id, 'full');
// $thumbnail_url = $image_data[0];

// $product_attributes = get_post_meta($product_id, '_product_attributes', true);

// // Get the product gallery attachment IDs
// $attachment_ids = $product_id ? wc_get_product($product_id)->get_gallery_image_ids() : array();


?>









<?php get_header() ?>




<?php
get_template_part("/components/shared/content", "banner");
?>
<main class="single-project">

    <div class="container">

        <?php
        // foreach ($products as $product) {
        //     # code...

        //     // Get the product ID
        //     $product_id = $product->get_id();

        //     // Get the product categories
        //     $product_categories = get_the_terms($product_id, 'product_cat');

        //     // Print product name and categories
        //     echo $product->get_name() . '<br>';
        //     foreach ($product_categories as $category) {
        //         echo ' - ' . $category->name . '<br>';
        //     }
        // }
        ?>


        <div class="single-project-head">
            <h2 class="project-title">
                lorem ipsum dolor sit amet
            </h2>

            <div class="project-details">
                <p><strong>Location : </strong>Bengaluru</p>
                <p><strong>Area : </strong>100sq ft</p>
            </div>

            <div class="project-content">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam fugiat quo iure necessitatibus
                    eos,
                    atque, commodi facilis nemo repellendus cupiditate eaque odio reprehenderit, delectus esse optio
                    consequatur aperiam ratione voluptas voluptatum et repellat excepturi incidunt ipsam animi? Debitis
                    aperiam sed nesciunt esse dolores accusantium non, saepe amet culpa ab hic.
                </p>
            </div>

        </div>
        <div class="single-project-wrapper">
            <?php

            $row = 2;
            ?>

            <div class="project-row project-row-1">
                <?php

                for ($i = 1; $i < 20; $i++) {
                    # code...
                ?>

                <div class="project <?php echo "project-" . floor(($i - 1) % 3) + 1 ?>">
                    <img src=" <?php echo get_theme_file_uri("/public/banner.jpg") ?>" alt="">
                </div>
                <?php
                    if ($i == 4) {
                        $i++;
                        $i++;
                    }

                    if ($i % 3 == 0) {
                        echo "</div><div class='project-row project-row-" . $row . "'>";
                        $row < 3 ? $row++ : $row = 1;
                    }
                }

                ?>
            </div>

        </div>
</main>
<?php get_footer() ?>