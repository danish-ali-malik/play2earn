<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
?>
    <!-- Footer Starts Here -->
    <footer class="site-footer bg-black">
        <div class="container-lg">
            <div class="site-footer__wrapper">
                <div class="site-logo">
                    <img src="<?php esc_html_e( the_field('footer_image','option')); ?>" alt="">
                </div>
                <ul class="d-flex text-white justify-content-center">
                	<?php if( have_rows('links','option') ){?>
	                <?php while( have_rows('links','option')  ){ the_row(); ?>
                    <li>
                        <a href="<?php echo esc_url( the_sub_field('link')); ?>" class="font-regular"><?php esc_html_e( the_sub_field('link_label')); ?></a>
                    </li>
                     <?php } } ?>
                </ul>
                <p class="copy-sm copy-right text-hard-gray"><?php esc_html_e( the_field('right_reserved','option')) ?></p>
            </div>
        </div>
    </footer>
    <!-- Footer Ends Here -->
<?php wp_footer(); ?>

</body>
</html>
