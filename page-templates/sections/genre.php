<?php
/**
 * Accordion section HTML
 *
 * @package Guardian_Angel
 */
?>
   <!--Genre Start Here-->
    <section class="genre">
        <div class="container-lg">
            <div class="title-top">
                <h1 class="h1 font-bold mb-3 text-dark-blue"><?php esc_html_e( get_sub_field('genre_title')); ?></h1>
                <p class="text-gray font-regular"><?php esc_html_e( get_sub_field('genre_description') ); ?></p>
            </div>
            <div class="row">
             <?php 
                $args = array(
                    'type'  => 'post',
                    'child_of' => '',
                    'taxonomy' => 'category'
                    );
                $categories = get_categories( $args );
                foreach ($categories as $category ) {
                $image_id = get_term_meta ( $category->term_id, 'category-image-id', true );
                 $categories_images = wp_get_attachment_image ( $image_id );
                $categories_link = get_category_link( $category->term_id );?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="dropdown">
                        <a href="<?php echo $categories_link ?>" class="genre-block dropdown-btn bg-dark-gray text-dark-blue d-block">
                            <span class="remote-icon mr-3">
                                <?php echo $categories_images; ?>
                            </span>
                            <?php echo $category->name; 
                             $sub_categories = category_has_children($category->term_id);
                            ?>
                        </a>
                        <?php if ($sub_categories) {?>
                        <div class="dropdown-content">
                         <?php
                            foreach ($sub_categories as  $sub_category) {
                            $sub_categories_link = get_category_link( $sub_category->term_id );
                            ?>
                                <a href="<?php echo $sub_categories_link; ?>"><?php echo $sub_category->name?></a>
                            <?php } ?>
                            </div>
                      <?php  } ?>
                        
                    </div>
                </div>

<?php } ?>
            </div>
        </div>
    </section>
    <!--Genre End Here-->