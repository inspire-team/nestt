<!--course section-->
<section id="course" class="section_6 inner-section">
    <div class="course_div">
        <h1 class="page-counter">05</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('course'); ?>
                <h2 class="heading">The <span><?= $data->post_title; ?></span></h2>

                <?php
                echo apply_filters('the_content', $data->post_content);
                ?>
            </div>
        </div>
</section>
<!--/course section-->
