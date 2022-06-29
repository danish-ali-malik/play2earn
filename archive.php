<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package p2e-academy
 */

get_header();
?>

	
	  <!-- Page Title Start Here-->
    <section class="page-title">
        <div class="container">
            <h1 class="h1"><?php single_post_title(); ?></h1>
        </div>
    </section>
    <!-- Page Title End Here-->

    <!-- Blog Start Here -->
    <section class="blog">
        <div class="container-lg">
        	<?php if ( have_posts() ) : ?>

			<div class="title-top">
				<?php
				the_archive_title( '<h1 class="h1 font-bold text-dark-blue">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div><!-- .page-header -->

            <div class="row">
		
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
            <nav class="navigation pagination" aria-label="Posts">
                <div class="nav-links d-flex justify-content-center align-items-center flex-wrap">
                   <?php the_posts_pagination();?>
                </div>
            </nav>
        </div>
    </section>

<?php
get_footer();
