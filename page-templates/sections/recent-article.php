<?php
/**
 * Testimonial section HTML
 *
 * @package Guardian_Angel
 */
?>
    <!--Recent Article Start Here-->
    <section class="recent-article">
        <div class="container-lg">
            <div class="title-top">
                <h3 class="h1 mb-3 font-bold text-dark-blue"><?php esc_html_e( get_sub_field('recent_article_title') ); ?></h3>
                <p class="text-gray font-regular"><?php echo the_sub_field('recent_article_description'); ?></p>
            </div>
            <div class="row">
                <?php
                $posts = get_posts( array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'numberposts' => -1,
                        ) );
                foreach ($posts as $post) {
                    $post_link =get_post_permalink($post->ID);
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                    <div class="col-xl-4 col-md-6">
                        <a href="<?php echo $post_link; ?>" class="article-block">
                            <div class="image-thumbnail">
                                <div class="image-ratio image-ratio--square">
                                   <?php if ($feat_image) { ?>
                                        <img src="<?php echo $feat_image; ?>" alt="Featured Image">
                                   <?php } else { ?>
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/blog-image--4.jpg" alt="Featured Image">
                                   <?php } ?>  
                                </div>
                            </div>
                            <div class="article-meta">
                                <h3 class="text-dark-blue font-bold"><?php echo $post->post_title; ?></h3>
                                <p class="text-gray"><?php echo $post->post_excerpt; ?></p>
                            </div>
                        </a>
                    </div>
          <?php } ?>
            </div>
        </div>
    </section>
    <!--Recent Article End Here-->