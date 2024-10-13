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
        <span class="menu-link active" data-tab-nav data-tab-target="all">
            all
        </span>
        <?php
        foreach ($categories as $category) {

        ?>
        <span class="menu-link" data-tab-nav data-tab-target="<?php echo $category->slug; ?>">
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

    <?php
    $rowCount = floor(20 / 3) + 1;
    ?>
    <div class="container">

        <div class="projects-wrapper" style="--rowCount:<?php echo $rowCount; ?>">
            <?php

            $row = 2;
            ?>

            <div class="project-row project-row-1">
                <?php


                for ($i = 1; $i < 20; $i++) {
                    # code...

                    if ($i == 2 || $i == 6) {


                ?>
                <div class="project appear <?php echo "project-" . floor(($i - 1) % 3) + 1 ?>">
                    <h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quaerat animi, ipsum culpa
                        blanditiis voluptatibus impedit enim minima quisquam tempore ad! Dignissimos magni voluptatum
                        earum
                        nesciunt ut cum similique voluptate?
                    </h3>
                </div>

                <?php
                    } else {

                    ?>

                <div class="project appear <?php echo "project-" . floor(($i - 1) % 3) + 1 ?>">
                    <img src=" <?php echo get_theme_file_uri("/public/banner.jpg") ?>" alt="">
                </div>
                <?php
                    }

                    if ($i % 3 == 0) {
                        echo "</div><div class='project-row project-row-" . $row . "'>";
                        $row < 2 ? $row++ : $row = 1;
                    }
                }
                ?>
            </div>
        </div>
</main>
<?php get_footer() ?>