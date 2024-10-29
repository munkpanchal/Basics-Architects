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
// var_dump($child_categories)


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
get_template_part("/components/shared/content", "banner", array('class' => 'sub-cat-banner'));
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
            <div data-aos="fade-up" data-cat="<?php echo $catName; ?>" class="project active fade-box">
                <img src=" <?php echo $thumbnail_url ?>" alt="">
                <div class="project-content fade-target">
                    <h3>
                        <?php echo $product->name; ?>
                    </h3>

                    <p class="para ">
                        <?php echo wp_trim_words($product->description, 20) ?>..
                    </p>

                    <a class="btn btn-white" target="_blank" href="<?php the_permalink($product_id) ?>">
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