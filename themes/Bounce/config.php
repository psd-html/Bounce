<?php

function info_shortcode($atts) {
    extract(shortcode_atts(array(
    	"texte"=> 'info',), $atts));
  	
  return ' <p class="info" ><span class="symbol">.</span>'.$texte.'</p>';

}

add_shortcode('info', 'info_shortcode'); 

?>