<?php
$args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1, // Fetch all posts
);

$testimonials = get_posts($args);

?>

<section class="section py-8">
    <div class="container ">
        <h2 class="primary-heading text-center sm:pb-4" data-aos="fade-up">
            Testimonials

        </h2>
        <div class="splide testimonial-slider mt-8" id="testimonial-slider">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php
                    # code...

                    foreach ($testimonials as $post) {
                        if (get_the_post_thumbnail_url($post->ID, 'large')) {
                            $imgUrl = get_the_post_thumbnail_url($post->ID, 'large');
                        } else {
                            $imgUrl = get_theme_file_uri("/public/default-user.jpg");
                        }

                    ?>

                    <li class="splide__slide">
                        <div class="ts-wrap">
                            <div class="ts-head">
                                <img src="<?php echo $imgUrl ?>" alt="<?php echo $post->post_title ?>">
                            </div>
                            <div class="ts-content">
                                <p>
                                    <?php

                                        echo      $post->post_content
                                        ?>
                                </p>
                            </div>
                            <div class="ts-info">
                                <h2>
                                    <?php
                                        echo $post->post_title
                                        ?>
                                </h2>
                                <?php
                                    if (get_field("designation")) {

                                    ?>
                                <span>
                                    <?php
                                            echo get_field("designation")
                                            ?>
                                </span>
                                <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>

    </div>
</section>