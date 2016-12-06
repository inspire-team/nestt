<section id="methodology" class="section_3 inner-section">
    <div class="methodology_div">
        <h1 class="page-counter">02</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('methodology'); ?>
                <h2 class="heading">The<br> <span><?= $data->post_title; ?></span></h2>

                <?php
                echo apply_filters('the_content', $data->post_content);
                ?>
            </div>
        </div>
    </div>
</section>