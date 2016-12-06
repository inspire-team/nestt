<section id="philosophy" class="section_2 inner-section">
    <div class="philosophy_div">
        <h1 class="page-counter">01</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('philosophy'); ?>
                <h2 class="heading">The<br> <span><?= $data->post_title; ?></span></h2>

                <?php
                    echo apply_filters('the_content', $data->post_content);
                ?>
            </div>
        </div>
    </div>
</section>