<?php
$args = array(
    'post_type' => 'honour',
    'posts_per_page' => -1, // Fetch all posts
);
$custom_posts = get_posts($args);

?>
<section class="section">
    <div class="container">
        <div class="media-section">
            <?php
            foreach ($custom_posts as $post) {
                // Access post properties here
                // echo $post->post_title;
                // echo $post->post_content;

                $post_id = get_the_ID();
            ?>

            <div class="media-wrap" data-aos="zoom-in">
                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>"
                    alt="<?php echo $post->post_title ?>">
                <div class="media-wrap-content">
                    <h3><?php echo $post->post_title ?></h3>
                    <h5><?php echo wp_trim_words($post->post_content, 20) ?>...</h5>
                    <a class="btn btn-white" target="_blank" href="<?php the_field('source_uri', $post_id); ?>">Read
                        More</a>
                </div>
            </div>
            <?php
                // ...
            }
            ?>

        </div>
    </div>
</section>