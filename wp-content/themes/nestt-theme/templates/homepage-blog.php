<!--blog & news section-->
<section id="blog" class="section_5 inner-section">
    <div class="blog_div">
        <h1 class="page-counter">04</h1>
        <div class="container">
            <div class="inner-content">
                <?php $data = get_page_by_path('blog'); ?>
                <div class="row">
                    <h2 class="heading col-lg-4">The<br> <span><?= $data->post_title; ?></span></h2>
                    <div class="col-lg-8">
                        <?php echo apply_filters('the_content', $data->post_content); ?>
                    </div>
                </div>
                <div class="blog-list">
                    <ul>
                        <?php
                            $args = array( 'category_name' => 'blog' );
                            $posts = get_posts( $args );
                            $cnt = 0;

                            foreach ( $posts as $post ) : setup_postdata( $post );
                                $cnt++;
                        ?>

                        <li>
                            <h4><?php echo $cnt; ?>. <?php the_title(); ?></h4>
                            <p class="sub-content">
                                <?php
                                    $content = get_the_content();
                                    $content = strip_tags( $content );

                                    if (strlen( $content ) > 60 ) {
                                        $content_substr = substr( $content, 0, 60 );

                                        // make sure it ends with a complete word
                                        $content = substr( $content_substr, 0, strrpos( $content_substr, ' ' ) ) . '...';

                                        // append read more link below the content
                                        $content .= '<p>(<a href="javascript:void()">Read More...</a>)</p>';
                                    }

                                    echo $content;
                                ?>
                            </p>

                            <!-- hide the full content here -->
                            <div class="hidden">
                                <h3><?php echo $cnt; ?>. <?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
</section>
<!--/blog & news section-->
