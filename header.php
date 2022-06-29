<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="header-sticked">
    <!-- Header Starts Here -->
    <header class="site-header">
        <div class="container-lg">
            <nav class="navbar navbar-expand-lg d-block d-lg-flex">
                <div class="site-logo">
                   <?php if ( get_theme_mod( 'p2e_logo' ) ){ ?>
                            <a href="<?php echo home_url(); ?>">
                              <img src="<?php echo get_theme_mod( 'p2e_logo' ); ?>">
                            </a>
                	<?php }else { ?>
                     <a href="<?php echo home_url(); ?>"><?php esc_url(bloginfo('name')); 
                    ?></a>
                       <?php } ?>
                </div>
                <?php
                $header_menu = wp_nav_menu( array(
					    'theme_location' => 'main-menu',
					    'container' => 'ul',
					    'menu_class'=> 'navbar-nav d-none d-lg-flex',
					    'add_li_class'  => 'nav-item',
					    'link_class'   => 'nav-link p-0 font-bold'
					 ) );
                ?>
                <?php echo $header_menu; ?>
                <div class="has-search pos-rel d-none d-lg-block">
                    <form action="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.104" height="20.104"
                            viewBox="0 0 20.104 20.104">
                            <g id="search" transform="translate(0 0)">
                                <g id="Group_1218" data-name="Group 1218" transform="translate(0 0)">
                                    <path id="Path_4061" data-name="Path 4061"
                                        d="M19.981,19.389l-6.117-6.117a7.988,7.988,0,1,0-.592.592l6.117,6.117a.419.419,0,1,0,.592-.592ZM7.958,15.078a7.12,7.12,0,1,1,7.12-7.12A7.128,7.128,0,0,1,7.958,15.078Z"
                                        transform="translate(0 0)" fill="#9a1bc0" />
                                </g>
                            </g>
                        </svg>
                        <input type="text" class="form-control bg-light-blue" placeholder="Search">
                    </form>
                </div>
            </nav>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#siteNavigation"
                aria-controls="siteNavigation" aria-expanded="false" aria-label="Toggle navigation">
                <svg viewBox="0 0 800 600">
                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                        id="top"></path>
                    <path d="M300,320 L540,320" id="middle"></path>
                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="siteNavigation">
                <div class="navbar-nav-wrapper d-lg-none">
                    <div class="site-navigation">
                    <?php
                $header_menu = wp_nav_menu( array(
                        'theme_location' => 'mobile-menu',
                        'container' => 'ul',
                        'menu_class'=> 'navbar-nav',
                        'add_li_class'  => 'nav-item',
                        'link_class'   => 'nav-link p-0 font-bold'
                     ) );
                ?>
                <?php echo $header_menu; ?>
                        <form action="">
                            <div class="has-search pos-rel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.104" height="20.104"
                                    viewBox="0 0 20.104 20.104">
                                    <g id="search" transform="translate(0 0)">
                                        <g id="Group_1218" data-name="Group 1218" transform="translate(0 0)">
                                            <path id="Path_4061" data-name="Path 4061"
                                                d="M19.981,19.389l-6.117-6.117a7.988,7.988,0,1,0-.592.592l6.117,6.117a.419.419,0,1,0,.592-.592ZM7.958,15.078a7.12,7.12,0,1,1,7.12-7.12A7.128,7.128,0,0,1,7.958,15.078Z"
                                                transform="translate(0 0)" fill="#9a1bc0" />
                                        </g>
                                    </g>
                                </svg>
                                <input type="text" class="form-control bg-light-blue" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Ends Here -->