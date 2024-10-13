<?php

$args = [
    'status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order title',
    'order'  => 'ASC',
];

$products = wc_get_products($args);
$categories = get_categories(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => true,
    'parent' => 0,
));




?>

<?php get_header() ?>



<div class="sub-menu-wrap">
    <div class="category-menu">
        <span class="menu-link active" data-tab-nav-project data-tab-target="all">
            all
        </span>
        <?php
        foreach ($categories as $category) {

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
// get_template_part("/components/shared/content", "banner");
?>

<main class="main projects" id="projects">


    <?php

    $totalProducts = wp_count_posts('product');
    $totalProducts = $totalProducts->publish;
    $totalProducts = 5 * $totalProducts;


    ?>
    <div class="projects-wrapper">

        <?php


        foreach ($products as $product) {

            $product_id = $product->get_id();
            $product_categories = get_the_terms($product_id, 'product_cat');
            $catName = $product_categories[0]->slug;


            $thumbnail_url = get_the_post_thumbnail_url($product_id, 'full');

            // var_dump($product);


        ?>
            <div data-aos="zoom-in" data-cat="<?php echo $catName; ?>" class="project active ">
                <img src=" <?php echo $thumbnail_url ?>" alt="">
                <div class="project-content">
                    <h3><?php echo $product->name; ?></h3>


                    <p class="para ">
                        <?php echo wp_trim_words($product->description, 20) ?>...
                    </p>
                    <a class="btn btn-white" target="_blank" href="<?php the_permalink($product_id) ?>">Read More</a>
                </div>
            </div>
        <?php

        }
        ?>
    </div>

</main>
<?php get_footer() ?>