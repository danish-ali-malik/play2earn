<?php
/**
 * Slider section HTML
 *
 * @package Guardian_Angel
 */
?>
<!--Projects Start Here-->
    <section class="Projects bg-light-blue">
        <div class="container-lg">
            <div class="Project-wrapper justify-content-between d-block d-lg-flex">
                <div class="title-top">
                    <h3 class="h1 font-bold mb-3 text-dark-blue"><?php echo the_sub_field('blockchain_title'); ?></h3>
                    <p class="text-gray font-regular"><?php esc_html_e( get_sub_field('blockchain_description')); ?></p>
                </div>
                <div class="image-block d-none d-lg-block">
                    <img src="<?php esc_html_e( get_sub_field('blockchain_image')); ?>" alt="">
                </div>
            </div>
            <div class="projects-tabs">
                <ul class="nav nav-tabs" id="projectsTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="projectsTabs_1" data-toggle="tab" href="#projectsTabsContent_1"
                            role="tab" aria-controls="projectsTabsContent_1" aria-selected="true">All Game</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="projectsTabs_2" data-toggle="tab" href="#projectsTabsContent_2"
                            role="tab" aria-controls="projectsTabsContent_2" aria-selected="false">Recently Added</a>
                    </li>
                </ul>
                <div class="tab-content projects-tabs__content" id="projectsTabsContent">
                    <div class="tab-pane fade show active" id="projectsTabsContent_1" role="tabpanel"
                        aria-labelledby="projectsTabs_1">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="projectsTabsContent_2" role="tabpanel"
                        aria-labelledby="projectsTabs_2">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 py-4">
                                <div class="projects-tabs__card">
                                    <div class="projects-tabs__card__inner">
                                        <div class="card-head">
                                            <div class="image-wrapper">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/axie-logo-1.png" alt="" class="rounded-circle">
                                            </div>
                                            <div class="card-title">
                                                <h4>Axie Infinity AXS</h4>
                                                <ul class="game-categories">
                                                    <li><a href="#">Breeding</a></li>
                                                    <li><a href="#">Card Game</a></li>
                                                    <li><a href="#">Metaverse</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-specification">
                                            <ul>
                                                <li>
                                                    <strong>Price</strong>
                                                    <span>$48.62</span>
                                                </li>
                                                <li>
                                                    <strong>24H</strong>
                                                    <span><mark>6%</mark></span>
                                                </li>
                                                <li>
                                                    <strong>Volume</strong>
                                                    <span>$414,005,636</span>
                                                </li>
                                                <li>
                                                    <strong>Market</strong>
                                                    <span>$3,77948,878</span>
                                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/graph-line.svg" alt="" class="graph-line">
                                                </li>
                                                <li>
                                                    <strong>Platform</strong>
                                                    <ul>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-android.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-ios.svg" alt="icon">
                                                        </li>
                                                        <li>
                                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-desktop.svg" alt="icon">
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-purple">See more 70 crypto</a>
            </div>
        </div>
    </section>
    <!--Projects End Here-->