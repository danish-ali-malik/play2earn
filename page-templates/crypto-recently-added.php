<?php
/**
 * Template Name: Recently Added
 *
 * @package p2e-academy
 */
get_header();
?>
    <!--Where To Buy Start Here-->
    <section class="where-to-buy where-to-buy--alt">
        <div class="container-lg">
            <div class="title-top">
                <h2 class="h2 font-bold text-dark-blue"><?php esc_html_e( the_field('bitcoin_title') ); ?></h2>
                <p class="text-gray font-regular"><?php esc_html_e( the_field('bitcoin_description') ); ?></p>
            </div>
            <div class="bitcoin-dropdown d-flex">
                <div class="dropdown">
                    <button class="btn">All Genre
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="3.821" viewBox="0 0 7 3.821">
                            <path id="arrow-down"
                                d="M6.959.09H1.039a.538.538,0,0,0-.38.92L3.249,3.6a1.065,1.065,0,0,0,1.5,0l.985-.985L7.344,1.01A.541.541,0,0,0,6.959.09Z"
                                transform="translate(-0.5 -0.09)" fill="#0f172a" />
                        </svg>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Genre</a>
                        <a href="#">Platform</a>
                        <a href="#">Price</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn">All Platform
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="3.821" viewBox="0 0 7 3.821">
                            <path id="arrow-down"
                                d="M6.959.09H1.039a.538.538,0,0,0-.38.92L3.249,3.6a1.065,1.065,0,0,0,1.5,0l.985-.985L7.344,1.01A.541.541,0,0,0,6.959.09Z"
                                transform="translate(-0.5 -0.09)" fill="#0f172a" />
                        </svg>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Genre</a>
                        <a href="#">Platform</a>
                        <a href="#">Price</a>
                    </div>
                </div>
            </div>
            <div class="row table-responsive-lg">
                <table class="table mx-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>GENRE</th>
                            <th>PLATFORM</th>
                            <th>PRICE</th>
                            <th>24H</th>
                            <th>VOLUME</th>
                            <th>MARKET CAP</th>
                            <th>LAST 7 DAYS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="46" height="46" viewBox="0 0 46 46">
                                    <defs>
                                        <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%"
                                            height="100%" viewBox="0 0 50 50">
                                            <image width="50" height="50"
                                                xlink:href="data:image/png;base64,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" />
                                        </pattern>
                                    </defs>
                                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="23" cy="23" r="23"
                                        fill="url(#pattern)" />
                                </svg>
                                Binance
                            </td>
                            <td>Collectible Minigame</td>
                            <td>$47.15</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="content-bottom d-flex justify-content-between w-100 align-items-center">
                <div class="left-col">
                    <p class="copy-md text-black">Showing 1-1 out of 1</p>
                </div>
                <div class="right-col d-flex align-items-center">
                    <p class="copy-md text-black mr-3">Show rows</p>
                    <div class="dropdown">
                        <button class="btn">50
                            <svg xmlns="http://www.w3.org/2000/svg" width="9.441" height="5.099"
                                viewBox="0 0 9.441 5.099">
                                <g id="arrow" transform="translate(9.441 -117.742) rotate(90)">
                                    <g id="Group_2" data-name="Group 2" transform="translate(117.742 0)">
                                        <path id="Path_1" data-name="Path 1"
                                            d="M122.733,4.461,118.367.107a.366.366,0,1,0-.517.518l4.107,4.1-4.107,4.1a.366.366,0,0,0,.517.518l4.367-4.354a.366.366,0,0,0,0-.518Z"
                                            transform="translate(-117.742 0)" fill="#6e6e6e" />
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">60</a>
                            <a href="#">70</a>
                            <a href="#">80</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Where To Buy End Here-->

<?php
get_footer();   