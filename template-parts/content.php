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
                <a href="<?php the_permalink( );?>" class="d-block">
                    <?php 
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
                    if ($feat_image) { ?>
                        <img src="<?php echo $feat_image ?>" alt="Featured Image">
                   <?php } else { ?>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/blog-image--4.jpg" alt="Featured Image">
                   <?php } ?>  
                </a>
         </div>
    	<div class="blog-card__meta">
            <a href="<?php the_permalink(  );?>" class="card-text"><?php the_title(); ?></a>
                <p class="card-title">
                    <a href="<?php the_permalink(  );?>"><?php the_excerpt(); ?></a>
                </p>
        </div>
    </div>
</div>