<?php get_header() ?>
<main class="main single-blog-page" id="single-blog-page">
    <div class="single-blog-page-head">
        <h2>
            <?php the_title() ?>
        </h2>
        <!-- <p><strong>Author:</strong> <?php echo get_the_author(); ?></p> -->
        <p><strong>Author:</strong> Basics Architects</p>
        <p><strong>Published Date:</strong> <?php echo get_the_date('F j, Y'); ?></p>
    </div>
    <div class="single-blog-page-content">
        <?php
        the_content()
        ?>
    </div>
</main>

<?php get_footer() ?>