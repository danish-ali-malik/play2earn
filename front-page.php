<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();

    if( have_rows('sections') ){
    // Loop through landing page sections
    while ( have_rows('sections') ) {
        the_row();

        if ( get_row_layout() == 'genre' ){
          get_template_part('page-templates/sections/genre');
        }elseif ( get_row_layout() == 'industry_leader' ){
            get_template_part('page-templates/sections/industry-leader');
        }elseif ( get_row_layout() == 'blockchain' ){
            get_template_part('page-templates/sections/blockchain');
        }elseif ( get_row_layout() == 'recent_article' ){
            get_template_part('page-templates/sections/recent-article');
        }

    }
    }else{ ?>
        <div class="no-section-found">
            <p><?php esc_html_e('Please add a section in dashboard'); ?></p>
        </div>
    <?php }
?>

<?php
get_footer();