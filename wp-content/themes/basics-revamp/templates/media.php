<?php
/* Template Name: Media page Template*/
?>
<?php get_header() ?>


<?php
$args = array(
    'post_type' => ['post', 'publication', 'honour'],
    'posts_per_page' => -1, // Fetch all posts
);

$custom_posts = get_posts($args);


?>

<div class="sub-menu-wrap">
    <div class="media-menu" data-aos="fade-up">
        <span class="menu-link" data-tab-nav data-tab-target="post">blogs</span>
        <span class="menu-link" data-tab-nav data-tab-target="publication">publication</span>
        <span class="menu-link" data-tab-nav data-tab-target="honour">honours</span>
    </div>
</div>
<main class="main media" id="media">
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
                    $post_type = get_post_type();

                    $url = get_the_permalink($post->ID);
                    if (get_field("external_url")) {
                        $url = get_field("external_url");
                    }

                ?>


                    <div class="media-wrap fade-box" data-aos="fade-up" data-category="<?php echo $post_type ?>">
                        <img src="<?php echo $imgUrl ?>" alt="<?php echo $post->post_title ?>">
                        <div class="media-wrap-content fade-target">
                            <h3>
                                <?php echo $post->post_title ?>
                            </h3>
                            <p>
                                <?php echo wp_trim_words($post->post_content, 20) ?>
                            </p>
                            <a class="btn btn-white" target="_blank" href="<?php echo $url; ?>">Read More</a>
                        </div>
                    </div>
                <?php

                }

                ?>

            </div>
        </div>

    </section>


</main>
<?php get_footer() ?>