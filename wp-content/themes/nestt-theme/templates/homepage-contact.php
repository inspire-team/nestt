<?php $data = get_page_by_path('contact'); ?>
<!--contact section-->
<section id="contact" class="section_8 inner-section">
    <div class="contact_div">
        <h1 class="page-counter">07</h1>
        <div class="container">
            <div class="inner-content">
                <h2 class="heading"><span><?= $data->post_title; ?></span></h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact_section">
                                <?php
                                echo apply_filters('the_content', $data->post_content);
                                ?>
                                <div class="contact_subscribe">
                                    <p class="contact_subscribe_header">SUBSCRIBE<span class="contact_join">JOIN OUR MAILING LIST</span></p>
                                    <?php echo do_shortcode("[ninja_form id=2]");?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</section>
<!--/course section-->
