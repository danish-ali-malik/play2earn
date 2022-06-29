<?php
/**
 * Industry leaders HTML
 */

$cma = new Coin_Market_Api();

$recently_added = $cma->get_recently_added();

$biggest_gainers = $cma->get_biggest_gainers();

echo '<pre>'; print_r($recently_added); echo '</pre>';
echo '<pre>'; print_r($biggest_gainers); echo '</pre>'; exit;

?>

    <!--Industry Leader Start Here-->
    <section class="industry-leader">
        <div class="container-lg">
            <div class="title-top">
                <h3 class="h1 text-dark-blue font-bold mb-3"><?php esc_html_e( get_sub_field('industry_leader_title')); ?></h3>
                <p class="text-gray font-regular"><?php esc_html_e( get_sub_field('industry_leader_description')); ?></p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="leader-block h-100">
                        <div class="leader-block__top d-flex justify-content-between align-items-center">
                            <h3 class="font-regular text-dark-blue d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="39.849" height="39.809" viewBox="0 0 39.849 39.809">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_520" data-name="Rectangle 520" width="39.849"
                                                height="39.809" fill="#e1266e" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_1291" data-name="Group 1291" clip-path="url(#clip-path)">
                                        <path id="Path_4066" data-name="Path 4066"
                                            d="M19.873,39.8A19.873,19.873,0,0,1,.314,23.516a18.479,18.479,0,0,1-.308-3.841,2.285,2.285,0,0,1,2.26-2.252,2.267,2.267,0,0,1,2.221,2.242,15.433,15.433,0,0,0,3.135,9.522,15.016,15.016,0,0,0,10.289,5.988A15.4,15.4,0,0,0,22.548,4.74a19.761,19.761,0,0,0-2.973-.248,2.2,2.2,0,0,1-2.267-2.212A2.213,2.213,0,0,1,19.568.005,19.82,19.82,0,0,1,39.493,16.292a19.3,19.3,0,0,1-5.16,17.345,19.468,19.468,0,0,1-12.074,6.071c-.319.042-.639.082-.96.092-.475.016-.95,0-1.426,0"
                                            transform="translate(0 0)" fill="#e1266e" />
                                        <path id="Path_4067" data-name="Path 4067"
                                            d="M143.769,89.772c0-1.212-.005-2.423,0-3.634a2.238,2.238,0,1,1,4.477-.008c.009,1.518.017,3.037-.006,4.554-.007.432.1.587.56.579,1.533-.026,3.067-.017,4.6-.007a2.2,2.2,0,0,1,2.2,1.949,2.24,2.24,0,0,1-1.768,2.49,2.741,2.741,0,0,1-.549.037q-3.588,0-7.177,0a2.19,2.19,0,0,1-2.339-2.327c0-1.211,0-2.423,0-3.634"
                                            transform="translate(-126.093 -73.579)" fill="#e1266e" />
                                        <path id="Path_4068" data-name="Path 4068"
                                            d="M91.17,13.211a2.384,2.384,0,0,1-2.439,2.356,2.29,2.29,0,0,1-2.277-2.241,2.475,2.475,0,0,1,2.463-2.364,2.25,2.25,0,0,1,2.253,2.249"
                                            transform="translate(-75.826 -9.614)" fill="#e1266e" />
                                        <path id="Path_4069" data-name="Path 4069"
                                            d="M15.161,89.922a2.414,2.414,0,0,1-2.311,2.486,2.286,2.286,0,0,1-2.26-2.256,2.392,2.392,0,0,1,2.326-2.471,2.215,2.215,0,0,1,2.245,2.241"
                                            transform="translate(-9.288 -76.903)" fill="#e1266e" />
                                        <path id="Path_4070" data-name="Path 4070"
                                            d="M41.221,44.368a2.4,2.4,0,0,1,2.364-2.38,2.277,2.277,0,0,1,2.28,2.227,2.533,2.533,0,0,1-2.417,2.421,2.233,2.233,0,0,1-2.227-2.269"
                                            transform="translate(-36.154 -36.826)" fill="#e1266e" />
                                    </g>
                                </svg>
                                Recently Added
                            </h3>
                            <a href="#" class="btn d-flex align-items-center text-hard-gray">More
                                <svg class="ml-2 mt-1" xmlns="http://www.w3.org/2000/svg" width="5.099" height="9.441"
                                    viewBox="0 0 5.099 9.441">
                                    <g id="arrow" transform="translate(-117.742 0)">
                                        <g id="Group_2" data-name="Group 2" transform="translate(117.742 0)">
                                            <path id="Path_1" data-name="Path 1"
                                                d="M122.733,4.461,118.367.107a.366.366,0,1,0-.517.518l4.107,4.1-4.107,4.1a.366.366,0,0,0,.517.518l4.367-4.354a.366.366,0,0,0,0-.518Z"
                                                transform="translate(-117.742 0)" fill="#6e6e6e" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <?php if( isset( $recently_added ) && is_array( $recently_added ) ){ ?>
                            <div class="middle-text d-flex justify-content-between align-items-center">
                                <p class="font-regular text-hard-gray">
                                    Token
                                </p>
                                <p class="font-regular text-hard-gray">
                                    Date Added
                                </p>
                            </div>
                            <div class="leader-block-list">
                                <ol>
                                    <?php
                                    $i = 0;
                                    foreach ( $recently_added as $item ){

                                        if( $i > 2 ) { break; }

                                        $logo = 'https://s2.coinmarketcap.com/static/img/coins/64x64/'.$item->id.'.png';

	                                    ?>
                                        <li>
                                        <div>
                                            <img class="mr-3" src="<?php echo esc_url($logo);?>" alt="<?php esc_attr_e( $item->name );?>">
                                            <?php esc_html_e($item->name); ?>
                                        </div>
                                        <span class="p text-hard-gray font-regular"><?php echo wp_date( 'F d', strtotime( $item->date_added ) );  ?></span>
                                    </li>
                                    <?php $i++; } ?>
                                </ol>
                            </div>
                        <?php }else{ ?>
                            <div class="middle-text d-flex justify-content-between align-items-center">
                                <p class="font-regular text-red">
	                                <?php esc_html_e( $recently_added ); ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="leader-block h-100">
                        <div class="leader-block__top d-flex justify-content-between align-items-center">
                            <h3 class="font-regular text-dark-blue d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34.891" height="37.125"
                                    viewBox="0 0 34.891 37.125">
                                    <g id="_2312935_boost_extension_growth_improvement_progress_icon"
                                        data-name="2312935_boost_extension_growth_improvement_progress_icon"
                                        transform="translate(-141.113 -118.813)">
                                        <path id="Path_4071" data-name="Path 4071"
                                            d="M171.421,120.171l7.849-1.358-1.518,7.928c-.477-.476-.943-.893-1.349-1.364-.284-.329-.46-.262-.727,0q-2.527,2.494-5.074,4.969-4.534,4.428-9.063,8.861c-.252.247-.377.208-.6-.008-1.264-1.213-2.548-2.406-3.808-3.623-.246-.237-.376-.255-.629,0-2.767,2.787-5.552,5.557-8.32,8.343-.252.255-.385.3-.657.018-.8-.828-1.636-1.627-2.47-2.424-.184-.176-.184-.273,0-.454q5.824-5.781,11.629-11.581c.274-.275.4-.105.566.056,1.252,1.183,2.508,2.362,3.747,3.558.2.2.3.182.49-.006q5.173-4.993,10.362-9.97c.3-.29.592-.6.917-.86.291-.235.237-.392-.013-.614-.488-.435-.951-.9-1.424-1.346Z"
                                            transform="translate(-3.266 0)" fill="#10b981" />
                                        <rect id="Rectangle_521" data-name="Rectangle 521" width="9.668" height="9.406"
                                            transform="translate(141.113 146.522)" fill="#10b981" />
                                        <rect id="Rectangle_522" data-name="Rectangle 522" width="9.669" height="13.84"
                                            transform="translate(153.631 142.088)" fill="#10b981" />
                                        <rect id="Rectangle_523" data-name="Rectangle 523" width="9.668" height="19.879"
                                            transform="translate(166.103 136.059)" fill="#10b981" />
                                    </g>
                                </svg>
                                Biggest Gainers
                            </h3>
                            <a href="#" class="btn d-flex align-items-center text-hard-gray">More
                                <svg class="ml-2 mt-1" xmlns="http://www.w3.org/2000/svg" width="5.099" height="9.441"
                                    viewBox="0 0 5.099 9.441">
                                    <g id="arrow" transform="translate(-117.742 0)">
                                        <g id="Group_2" data-name="Group 2" transform="translate(117.742 0)">
                                            <path id="Path_1" data-name="Path 1"
                                                d="M122.733,4.461,118.367.107a.366.366,0,1,0-.517.518l4.107,4.1-4.107,4.1a.366.366,0,0,0,.517.518l4.367-4.354a.366.366,0,0,0,0-.518Z"
                                                transform="translate(-117.742 0)" fill="#6e6e6e" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>

	                    <?php if( isset( $biggest_gainers ) && is_array( $biggest_gainers ) ){ ?>
                            <div class="middle-text d-flex justify-content-between align-items-center">
                                <p class="font-regular text-hard-gray">
                                    Token
                                </p>
                                <p class="font-regular text-hard-gray">
                                    24H
                                </p>
                            </div>
                            <div class="leader-block-list">
                                <ol>
	                                <?php
	                                $i = 0;
	                                foreach ( $biggest_gainers as $item ){

		                                if( $i > 2 ) { break; }

		                                $logo = 'https://s2.coinmarketcap.com/static/img/coins/64x64/'.$item->id.'.png';

		                                if( isset( $item->quote->USD->percent_change_24h ) ){

			                                $percent = round($item->quote->USD->percent_change_24h, 2);
			                                $str_exists = strpos($percent, '-' );

			                                if ($str_exists === false) {
				                                $down = null;
			                                }else{
				                                $down = 'coin-down';
			                                }
		                                }else{
		                                    $percent = null;
		                                }

		                                ?>
                                        <li>
                                            <div>
                                                <img class="mr-3" src="<?php echo esc_url($logo);?>" alt="<?php esc_attr_e( $item->name );?>">
				                                <?php esc_html_e($item->name); ?>
                                            </div>
                                            <span class="p text-green font-regular <?php esc_attr_e($down); ?>">
                                                <svg class="mr-2" id="Group_7" data-name="Group 7" xmlns="http://www.w3.org/2000/svg" width="10.664" height="5.821" viewBox="0 0 10.664 5.821">
                                                    <path id="Path_4" data-name="Path 4" d="M9.84,0H.822A.82.82,0,0,0,.243,1.4L4.188,5.347a1.623,1.623,0,0,0,2.293,0l1.5-1.5L10.427,1.4A.824.824,0,0,0,9.84,0Z" transform="translate(0 0)" fill="#10b981"/>
                                                </svg>
                                                <?php esc_html_e( $percent ); ?>%
                                            </span>
                                        </li>
		                                <?php $i++; } ?>
                                </ol>
                            </div>
	                    <?php }else{ ?>
                            <div class="middle-text d-flex justify-content-between align-items-center">
                                <p class="font-regular text-red">
				                    <?php esc_html_e( $biggest_gainers ); ?>
                                </p>
                            </div>
	                    <?php } ?>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="leader-block h-100">
                        <div class="leader-block__top d-flex justify-content-between align-items-center">
                            <h3 class="font-regular text-dark-blue d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43.006" height="43.006"
                                    viewBox="0 0 43.006 43.006">
                                    <g id="Layer_2" transform="translate(-43.5 -43.5)">
                                        <g id="Group_1297" data-name="Group 1297" transform="translate(43.5 43.5)">
                                            <path id="Path_4079" data-name="Path 4079"
                                                d="M65,43.5A21.5,21.5,0,1,0,86.506,65,21.5,21.5,0,0,0,65,43.5ZM56.839,73.581h-5.27V64.269h5.27Zm10.8,0h-5.27V53.366h5.27Zm10.8,0h-5.27V58.9h5.27Z"
                                                transform="translate(-43.5 -43.5)" fill="#f43f5e" />
                                        </g>
                                    </g>
                                </svg>
                                Most Popular Games
                            </h3>
                            <a href="#" class="btn d-flex align-items-center text-hard-gray">More
                                <svg class="ml-2 mt-1" xmlns="http://www.w3.org/2000/svg" width="5.099" height="9.441"
                                    viewBox="0 0 5.099 9.441">
                                    <g id="arrow" transform="translate(-117.742 0)">
                                        <g id="Group_2" data-name="Group 2" transform="translate(117.742 0)">
                                            <path id="Path_1" data-name="Path 1"
                                                d="M122.733,4.461,118.367.107a.366.366,0,1,0-.517.518l4.107,4.1-4.107,4.1a.366.366,0,0,0,.517.518l4.367-4.354a.366.366,0,0,0,0-.518Z"
                                                transform="translate(-117.742 0)" fill="#6e6e6e" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="middle-text d-flex justify-content-between align-items-center">
                            <p class="font-regular text-hard-gray">
                                Token
                            </p>
                            <p class="font-regular text-hard-gray">
                                Funding Amount
                            </p>
                        </div>
                        <div class="leader-block-list">
                            <ol>
                                <li>
                                    <a href="#">
                                        <img class="mr-3" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/leader-image--7.svg" alt="">
                                        Shrapnel
                                    </a>
                                    <span class="p text-hard-gray font-regular">$7M</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="mr-3" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/leader-image--8.svg" alt="">
                                        DEFY DEFY
                                    </a>
                                    <span class="p text-hard-gray font-regular">$3.5M</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="mr-3" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/leader-image--9.svg" alt="">
                                        GOALS
                                    </a>
                                    <span class="p text-hard-gray font-regular">$15M</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Industry Leader End Here-->