<?php

if ( !defined( 'ABSPATH' ) ){
	exit;
}

if ( !class_exists( 'Coin_Market_Api' ) ) {

    /**
     * Get the post from Coin Market API
     *
     * @since 2.0.0
     */
    class Coin_Market_Api {

    	CONST API_KEY = "b302187b-7bc9-4ca8-8dc6-c10f78252c9c";

        public function __construct() {

        }


	    /**
	     * Return recently added listings
	     *
	     * @return mixed|void
	     */
        public function get_recently_added(){

        	$data = null;

	        $saved_data = get_transient( 'cm_recent' );

			if( !$saved_data ){

		        $remote = wp_remote_get( 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/new',
					        array(
						        'headers' => array(
							        'X-CMC_PRO_API_KEY' => $this::API_KEY
						        ),
						        'start'     => 1,
						        'limit' => 100,
					        )
		        );

		        $response = json_decode( wp_remote_retrieve_body( $remote ) );

		        if( isset( $response->status->error_message ) ){
			       return $response->status->error_message;
		        }

		        $data = $response->data;

				set_transient( 'cm_recent', json_encode($data), 86400 );

			}else{
				$data = json_decode($saved_data);
			}

	        if( isset( $data ) && !empty( $data ) ){
				return $data;
	        }

	    }

	    /**
	     * Return biggest gainers
	     *
	     * @return mixed|void
	     */
	    public function get_biggest_gainers(){

		    $data = null;

		    $saved_data = get_transient( 'cm_biggest_gainers' );

		    if( !$saved_data ){

			    $remote = wp_remote_get( 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/trending/gainers-losers',
				    array(
					    'headers' => array(
						    'X-CMC_PRO_API_KEY' => $this::API_KEY
					    ),
					    'start'     => 1,
					    'limit' => 1000,
					    'time_period'  => '24h'
				    )
			    );

			    $response = json_decode( wp_remote_retrieve_body( $remote ) );

			    if( isset( $response->status->error_message ) ){
				    return $response->status->error_message;
			    }

			    $data = $response->data;

			    set_transient( 'cm_biggest_gainers', json_encode($data), 86400 );

		    }else{
			    $data = json_decode($saved_data);
		    }

		    if( isset( $data ) && !empty( $data ) ){
			    return $data;
		    }

	    }


    }


	new Coin_Market_Api();
}

