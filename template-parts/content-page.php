<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package p2e-academy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title-top">
		<?php the_title( '<h1 class="h1 font-bold text-dark-blue">', '</h1>' ); ?>
	</div><!-- .entry-header -->
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'p2e-academy' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
