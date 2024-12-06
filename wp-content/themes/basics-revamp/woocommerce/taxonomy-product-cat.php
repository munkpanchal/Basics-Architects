<?php

$current_category = get_queried_object();
$category_id = $current_category->term_id;
$args = [
    'status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order title',
    'order'  => 'ASC',
    'product_category_id' => $category_id,
];

$products = wc_get_products($args);



$child_categories = get_categories(array(
    'taxonomy'     => 'product_cat',
    'parent'       => $category_id,
    'hide_empty'    => false,
));


?>

<?php get_header() ?>



<div class="sub-menu-wrap ">
    <div class="category-menu">

        <?php
        foreach ($child_categories as $category) {

        ?>
            <span class="menu-link" data-tab-nav-project data-tab-target="<?php echo $category->slug; ?>">
                <?php
                echo $category->name;
                ?>
            </span>
        <?php
        }
        ?>
    </div>
</div>





<?php
$bannerUri = get_theme_file_uri("/public/banner.webp");
?>
<section class="banner">
    <div class="container">

        <div class="banner-wrapper sub-cat-banner" style="--bannerUri:url(<?php echo $bannerUri ?>)">
            <?php
            $thumbnail_id = get_term_meta($category_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);

            ?>


            <?php
            if ($current_category->slug === "architecture") {


                $videoUri = "https://lemonchiffon-hawk-580804.hostingersite.com/wp-content/uploads/2024/11/Architecture-Category-Hero-Image.mp4";
            } elseif ($current_category->slug === "interior") {
                $videoUri = "https://lemonchiffon-hawk-580804.hostingersite.com/wp-content/uploads/2024/11/Interior-Category-Hero-Image-1.mp4";
            }
            ?>
            <video class="absolute left-0 top-0 w-full h-full object-cover active" src="<?php echo $videoUri; ?>"
                data-img data-img-none data-image-id="none" autoplay muted playsinline loop></video>

            <!-- <div class="banner-content subcat active" data-content-none> -->
            <div class="banner-content subcat active" data-content data-content-none data-content-id="none">
                <h3 class="banner-cat-name active">
                    <?php echo $current_category->name; ?>
                </h3>
                <h2 class="banner-heading !text-white">
                    <?php
                    echo get_field('catlabel', $current_category);

                    ?>
                </h2>

                <p class="banner-para">
                    <?php
                    echo $current_category->description
                    ?>
                </p>
            </div>


            <?php
            foreach ($child_categories as $category) {
                // var_dump($category);
                $cat_id = $category->term_id;
                $thumbnail_id = get_term_meta($cat_id, 'thumbnail_id', true);
                $image_url = wp_get_attachment_url($thumbnail_id);
                $catlabel =    get_field('catlabel', $category);
            ?>
                <img src="<?php echo $image_url ?>" data-img data-image-id="<?php echo $category->slug; ?>" alt="">

                <div class="banner-content subcat" data-content data-content-id="<?php echo $category->slug; ?>">
                    <h3 class="banner-cat-name active">
                        <?php echo $category->name . " " . $current_category->name; ?>
                    </h3>


                    <h2 class="banner-heading !text-white" data-aos="fade-up">
                        <?php
                        echo $catlabel;
                        ?>
                    </h2>

                    <p class="banner-para" data-aos="fade-up" data-aos-delay="100">
                        <?php
                        echo $category->description
                        ?>
                    </p>

                </div>

            <?php
            }


            ?>



        </div>
    </div>
</section>
<?php

?>


<main class="main projects" id="projects">

    <div class="container">

        <?php

        $totalProducts = wp_count_posts('product');
        $totalProducts = $totalProducts->publish;
        $totalProducts = 5 * $totalProducts;


        ?>
        <section class="projects-wrapper max-sm:mt-4">
            <?php
            foreach ($products as $product) {

                $product_id = $product->get_id();
                $product_categories = get_the_terms($product_id, 'product_cat');

                $catName = $product_categories[0]->slug;


                $thumbnail_url = get_the_post_thumbnail_url($product_id, 'full');

            ?>


                <div data-cat="<?php echo $catName; ?>" class="project active  fade-box">
                    <img src=" <?php echo $thumbnail_url ?>" alt="">
                    <div class="project-content fade-target">
                        <h3>
                            <?php echo $product->name; ?>
                        </h3>
                        <p class="para">
                            <?php echo wp_trim_words($product->description, 20) ?>..
                        </p>
                        <a class="btn btn-white" href="<?php the_permalink($product_id) ?>">
                            Read More
                        </a>

                    </div>
                </div>
            <?php

            }
            ?>
        </section>



    </div>


</main>
<?php get_footer() ?>