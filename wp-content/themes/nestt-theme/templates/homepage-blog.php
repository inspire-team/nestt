<!--blog & news section-->
<section id="blog" class="section_5 inner-section">
    <div class="blog_div">
        <h1 class="page-counter">04</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('blog'); ?>

                <h2 class="heading">The<br> <span><?= $data->post_title; ?></span></h2>

                <?php
                echo apply_filters('the_content', $data->post_content);
                ?>
            </div>
        </div>
</section>
<!--/blog & news section-->
