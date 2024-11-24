<?php
$args = array(
    'post_type' => 'client',
    'posts_per_page' => -1, // Fetch all posts
);

$clients = get_posts($args);

?>

<section class="section py-8">
    <div class="container ">
        <h2 class="primary-heading text-center sm:pb-4" data-aos="fade-up">
            trusted by
        </h2>
        <div class="clients-wrapper">
            <?php
                foreach ($clients as $post) {
                    if (get_the_post_thumbnail_url($post->ID, 'large')) {
                        $imgUrl = get_the_post_thumbnail_url($post->ID, 'large');
                    } else {
                        $imgUrl = get_theme_file_uri("/public/default-user.jpg");
                    }

            ?>
            <figure class="cw-wrap">
                <img src="<?php echo $imgUrl ?>" alt="">
            </figure>
            <?php
            }
            ?>
        </div>
    </div>

    </div>
</section>