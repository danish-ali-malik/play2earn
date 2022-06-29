<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package p2e-academy
 */

?>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-card__thumbnail">
                            <a href="#" class="d-block">
                            	<?php 
								$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );?>
                                <img src="<?php echo $feat_image ?>" alt="">
                            </a>
                        </div>
                        <div class="blog-card__meta">
                            <a href="#" class="card-text"><?php the_title(); ?></a>
                            <p class="card-title">
                                <a href="#"><?php the_content(); ?></a>
                            </p>
                        </div>
                    </div>
                </div>

    <!-- Blog End Here -->
