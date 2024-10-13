<?php get_header() ?>
<main class="main single-blog-page" id="single-blog-page">
    <div class="single-blog-page-head">
        <h2>
            <?php the_title() ?>
        </h2>
    </div>
    <div class="single-blog-page-content">
        <?php
        the_content()
        ?>
    </div>
</main>

<?php get_footer() ?>