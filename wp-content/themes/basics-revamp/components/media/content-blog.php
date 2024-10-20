<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Fetch all posts
);
$custom_posts = get_posts($args);

?>
<section class="section">
    <div class="container">
        <div class="media-section">
            <?php
            foreach ($custom_posts as $post) {

                if (get_the_post_thumbnail_url($post->ID, 'large')) {
                    $imgUrl = get_the_post_thumbnail_url($post->ID, 'large');
                } else {
                    $imgUrl = get_theme_file_uri("/public/default-blog.jpg");
                }

            ?>

                <div class="media-wrap fade-box" data-aos="zoom-in">
                    <img src="<?php echo $imgUrl ?>" alt="<?php echo $post->post_title ?>">
                    <div class="media-wrap-content fade-target">
                        <h3>
                            <?php echo $post->post_title ?>
                        </h3>
                        <h5>
                            <?php echo wp_trim_words($post->post_content, 20) ?>
                        </h5>
                        <a class="btn btn-white" target="_blank" href="<?php the_permalink($post->ID) ?>">Read More</a>
                    </div>
                </div>
            <?php
                // ...
            }
            ?>

        </div>
    </div>
</section>