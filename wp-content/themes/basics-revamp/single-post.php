<?php get_header() ?>


<?php
get_template_part("/components/shared/content", "banner", array('class' => ''));;
?>

<main class="main single-blog-page" id="single-blog-page">
    <div class="container">
        <div class="single-project-head">
            <div class="sph-left">



                <h2 class="project-title " data-aos="fade-up">
                    <?php
                    echo get_the_title()
                    ?>
                </h2>


                <div class="project-details capitalize">
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Author:</strong>
                        <?php
                        echo get_the_author() ? get_the_author() : "Basics Architects"
                        ?>
                    </p>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <strong>Published Date:</strong>
                        <?php echo get_the_date('F j, Y'); ?>
                    </p>
                </div>
            </div>
            <div class="sph-right">


                <h2 class="project-title w-max opacity-0 pointer-events-none">
                    <?php
                    echo get_the_title()
                    ?>
                </h2>
                <?php
                $excerpt = get_the_excerpt();

                // Split the excerpt into an array of words
                $words = explode(' ', $excerpt);

                $sliceCount = 20;
                // Get the first 10 words
                $trimmed_excerpt = wp_trim_words($excerpt, $sliceCount, ' &nbsp;+');

                // Get the remaining words after the first 10
                $remaining_excerpt = implode(' ', array_slice($words, $sliceCount));
                ?>

                <details data-aos="fade-up" data-aos-delay="100">
                    <summary>
                        <?php
                        echo $trimmed_excerpt;
                        ?>
                    </summary>
                    <p>
                        <?php
                        echo $remaining_excerpt;
                        ?>
                    </p>
                </details>

                <p class="sph-content" data-aos="fade-up">
                    <?php

                    ?>
                </p>
            </div>

        </div>

        <div class="single-blog-page-content">
            <?php
            echo get_the_content()
            ?>
        </div>
    </div>
</main>

<?php get_footer() ?>