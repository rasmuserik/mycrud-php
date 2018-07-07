<?php
	 /*
	 Plugin Name: MyCrud
	 Description: 
	 Version: 0.0.1
	 Author: Veduz / Rasmus Erik Voel Jensen
	 Author URI: https://veduz.com
	 License: AGPLv3
		*/


function mycrud( $data ) {
  return $data
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'mycrud/v1', '/get/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'mycrud',
  ) );
} );
