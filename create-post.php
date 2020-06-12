<?php

require_once 'wp-load.php';

$url = "https://fernandafamiliar.soy/wp-json/wp/v2/posts";

$response = wp_remote_get( $url );

if ( is_wp_error( $response ) ) {
   echo 'There be errors, yo!';
} else {
   print_r($response);
}