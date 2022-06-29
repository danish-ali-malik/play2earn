<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package p2e-academy
 */

get_header();
global $post;
$author_id = $post->post_author;
$author_name =get_the_author_meta( 'nicename', $author_id );
$avatar = get_avatar($author_id);
$register = date_i18n( "M d, Y", strtotime(get_the_author_meta( 'user_registered', $author_id )));
$categories = get_the_category($post->ID);
?>
<section class="blog-detail">
        <div class="container-lg">
            <div class="blog-detail__title">
                <?php foreach($categories as $cd){ 
                $categor_link = get_category_link( $cd->term_id );
                ?>
                <a href="<?php echo $categor_link; ?>" class="blog-cta"
                    data-wpel-link="internal"><?php echo $cd->name; ?></a>
                <?php } ?>
                <h1><?php the_title();?></h1>
                <div class="title-bottom">
                    <?php echo $avatar;?><strong><?php echo $author_name;?></strong>
                    <ul class="d-flex align-items-center flex-wrap">
                        <li><?php echo $register; ?></li>
                    </ul>
                </div>
            </div>
            <div class="blog-detail__image">
            	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id() );

                if ($feat_image) { ?>
                        <img src="<?php echo $feat_image ?>" alt="Featured Image">
                   <?php } else { ?>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/blog-image--4.jpg" alt="Featured Image">
                   <?php } ?>  
            </div>
            <div class="blog-detail__content">
               <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php
get_footer();
