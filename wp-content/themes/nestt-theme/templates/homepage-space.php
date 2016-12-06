<section id="space" class="section_4 inner-section">
    <div class="space_div">
        <h1 class="page-counter">03</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('space'); ?>
                <h2 class="heading">The <span><?= $data->post_title; ?></span></h2>

                <?php
                echo apply_filters('the_content', $data->post_content);
                ?>
            </div>
        </div>
    </div>
</section>