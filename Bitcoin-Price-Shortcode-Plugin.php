<?php
/*
 * Plugin Name:       Bitcoin-Price-Shortcode-Plugin
 * Plugin URI:        https://www.velascommerce.com/
 * Description:       Bitcoin-Price-Shortcode-Plugin
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            VelasCommerce
 * Author URI:        https://www.velascommerce.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       
 * Domain Path:       /languages
 */

 function cwpai_bitcoin_price_api() {

  // Set the API endpoint URL
  $endpoint = 'https://api.coindesk.com/v1/bpi/currentprice/USD.json';

  // Set the API Key
  $api_key = 'Leanne Salva';

  // Set the API request headers
  $headers = array(
    'Authorization' => 'Bearer ' . $api_key
  );

  // Make the API request with wp_remote_get()
  $response = wp_remote_get( $endpoint, array(
    'headers' => $headers
  ) );

  // Retrieve and decode the API response body
  $data = json_decode( wp_remote_retrieve_body( $response ), true );
  
  // Get the Bitcoin price in USD
  $bitcoin_price = $data['bpi']['USD']['rate'];

  // Return the Bitcoin price as a formatted string
  return 'Bitcoin price (USD) $ ' . $bitcoin_price;

}

add_shortcode( 'bitcoin_price', 'cwpai_bitcoin_price_api' );
