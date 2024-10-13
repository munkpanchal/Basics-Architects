<?php
/* Template Name: Media page Template*/
?>
<?php get_header() ?>

<div class="sub-menu-wrap">
    <div class="media-menu">
        <span class="menu-link active" data-tab-nav data-tab-target="tab-1">blogs</span>
        <span class="menu-link" data-tab-nav data-tab-target="tab-2">publication</span>
        <span class="menu-link" data-tab-nav data-tab-target="tab-3">honours</span>
    </div>
</div>
<main class="main media" id="media">

    <section class="tab-target-box appear  active" id="tab-1">
        <?php

        get_template_part("/components/media/content", "blog")
        ?>

    </section>
    <section class="tab-target-box appear " id="tab-2">
        <?php

        get_template_part("/components/media/content", "publication")
        ?>

    </section>
    <section class="tab-target-box appear" id="tab-3">
        <?php

        get_template_part("/components/media/content", "honours")
        ?>

    </section>



</main>
<?php get_footer() ?>