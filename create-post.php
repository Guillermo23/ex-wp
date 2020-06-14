<?php

require_once 'wp-load.php';

$url = "https://fernandafamiliar.soy/wp-json/wp/v2/posts";

$response = wp_remote_get( $url );
$res = wp_remote_retrieve_body( $response );
$output = json_decode( $res, true );

if ( is_wp_error( $response ) ) {
   echo 'There be errors, yo!';
} else {
   foreach ($output as $key => $value) {
      $my_post = array(
         'post_title'    => $output[$key]["title"]["rendered"],
         'post_content'  => $output[$key]["content"]["rendered"],
         'post_date'     => $output[$key]["content"]["date"],
         'post_status'   => "publish",
         'post_name'     => $output[$key]["link"],
         'post_author'   => "Admin",
         'post_category' => array( 8,39 )
      );
      wp_insert_post( $my_post );
   }

}