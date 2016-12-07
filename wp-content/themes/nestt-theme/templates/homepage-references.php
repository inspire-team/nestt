<!--course section-->
<section id="references" class="section_7 inner-section">
    <div class="references_div">
        <h1 class="page-counter">06</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('references'); ?>
                <h2 class="heading"><span><?= $data->post_title; ?></span></h2>

                <?php
                echo apply_filters('the_content', $data->post_content);
                ?>
            </div>
        </div>
</section>
<!--/course section-->
