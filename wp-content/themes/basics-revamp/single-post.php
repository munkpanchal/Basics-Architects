<?php get_header() ?>
<?php
get_template_part("/components/shared/content", "banner", array('class' => ''));;
?>

<main class="main single-blog-page" id="single-blog-page">
    <div class="container">

        <div class="single-blog-page-head single-page-head ">
            <h2>
                <?php the_title() ?>
            </h2>
            <div class="sph-details">

                <p><strong>Author:</strong> <?php
                                            echo get_the_author() ? get_the_author() : "Basics Architects"
                                            ?> </p>
                <p><strong>Published Date:</strong> <?php echo get_the_date('F j, Y'); ?></p>
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